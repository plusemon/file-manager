<?php

namespace Plusemon\FileManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Plusemon\FileManager\Skeleton\SkeletonClass
 */
class FileManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'file-manager';
    }
}
