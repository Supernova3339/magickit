<?php

namespace Supernova3339\Magickit;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Supernova3339\Magickit\Skeleton\SkeletonClass
 */
class MagickitFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'magickit';
    }
}
