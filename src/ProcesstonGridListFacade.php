<?php

namespace Processton\ProcesstonGridList;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonGridList\Skeleton\SkeletonClass
 */
class ProcesstonGridListFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-grid-list';
    }
}
