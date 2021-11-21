<?php

namespace Asorasoft\Plasgate;

use App\Models\UserOtp;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;

trait HasPlasgate
{
    public function issuedRequestId($requestId)
    {
        $opt = UserOtp::where('request_id', $requestId)->first();
        if ($opt instanceof UserOtp) {
            return $this->issuedRequestId(Uuid::generate(4));
        }

        return (string)$requestId;
    }

    public function issuedOtpCode($otp_code)
    {
        $opt = UserOtp::where('otp_code', $otp_code)->first();
        if ($opt instanceof UserOtp) {
            return $this->issuedOtpCode($this->randomOtpCode());
        }

        return $otp_code;
    }

    public function randomOtpCode()
    {
        return random_int(100000, 999999);
    }

    public function reachedLimitationMessage()
    {
        $times = config('plasgate.number_sending_per_day');
        return message_error([
            'message_en' => "You has been reached the limitation of sending sms $times times per day.",
            'message_km' => "អ្នកមិនអាចស្នើសុំកូដបានទៀតឡើយពីព្រោះអ្នកស្នើសុំលើសការកំណត់ $times ក្នុងមួយថ្ងៃ។",
        ]);
    }

    public function isReachedLimitation($phone)
    {
        $items = UserOtp::query()
            ->where(['phone' => $phone])
            ->whereDate('created_at', Carbon::now())
            ->count();

        return $items >= config('plasgate.number_sending_per_day');
    }
}
