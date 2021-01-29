<?php

namespace Asorasoft\Plasgate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Asorasoft\Plasgate\Skeleton\SkeletonClass
 */
class PlasgateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'plasgate';
    }
}
