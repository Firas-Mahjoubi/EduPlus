<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/getAssetMapper_Importmap_GeneratorService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/getAssetMapper_Importmap_GeneratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.generator' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'ImportMapGenerator.php';

        return $container->privates['asset_mapper.importmap.generator'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapGenerator(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.compiled_asset_mapper_config_reader'] ??= new \Symfony\Component\AssetMapper\CompiledAssetMapperConfigReader((\dirname(__DIR__, 4).'/public/assets'))), ($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')));
    }
}
