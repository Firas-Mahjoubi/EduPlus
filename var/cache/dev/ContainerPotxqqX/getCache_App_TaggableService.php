<?php

<<<<<<<< HEAD:var/cache/dev/ContainerD27QkWd/getCache_App_TaggableService.php
namespace ContainerD27QkWd;
========
namespace ContainerPotxqqX;
>>>>>>>> fe50365a75a62392ad470cff67b9a23f73defa9c:var/cache/dev/ContainerPotxqqX/getCache_App_TaggableService.php


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
