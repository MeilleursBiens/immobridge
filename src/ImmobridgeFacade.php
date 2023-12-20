<?php

namespace MeilleursBiens\Immobridge;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MeilleursBiens\Immobridge\Skeleton\SkeletonClass
 */
class ImmobridgeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'immobridge';
    }
}
