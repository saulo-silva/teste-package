<?php

namespace SauloSilva\TestePackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SauloSilva\TestePackage\Skeleton\SkeletonClass
 */
class TestePackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'teste-package';
    }
}
