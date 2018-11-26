<?php
namespace Eseath\VK\Facades;

use Illuminate\Support\Facades\Facade;

class VK extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vk';
    }
}
