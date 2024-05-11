<?php

namespace Webaune\Colorcodeconverter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webaune\Colorcodeconverter\Skeleton\SkeletonClass
 */
class ColorcodeconverterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'colorcodeconverter';
    }
}
