<?php

<<<<<<<< HEAD:var/cache/dev/ContainerD27QkWd/getAssetMapper_Importmap_ResolverService.php
namespace ContainerD27QkWd;
========
namespace ContainerPotxqqX;
>>>>>>>> fe50365a75a62392ad470cff67b9a23f73defa9c:var/cache/dev/ContainerPotxqqX/getAssetMapper_Importmap_ResolverService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.resolver' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\Resolver\JsDelivrEsmResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'PackageResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'JsDelivrEsmResolver.php';

        return $container->privates['asset_mapper.importmap.resolver'] = new \Symfony\Component\AssetMapper\ImportMap\Resolver\JsDelivrEsmResolver(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));
    }
}
