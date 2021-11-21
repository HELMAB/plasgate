<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserOtp extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'request_id',
        'type',
        'phone',
        'otp_code',
        'verified_at',
        'expired_at',
        'platform',
        'device_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function wasNotFound()
    {
        return message_error([
            'message_en' => 'OTP was not found',
            'message_km' => 'មិនមាន OTP នេះឡើយ',
        ]);
    }
}
