<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getCache_App_TaggableService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getCache_App_TaggableService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_App_TaggableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cache.app.taggable' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'TagAwareAdapterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'TagAwareCacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'TagAwareAdapter.php';

        return $container->privates['cache.app.taggable'] = new \Symfony\Component\Cache\Adapter\TagAwareAdapter(($container->services['cache.app'] ?? self::getCache_AppService($container)));
    }
}
