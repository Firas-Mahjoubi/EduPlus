<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/get_AssetMapper_Command_Compile_LazyService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/get_AssetMapper_Command_Compile_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Command_Compile_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.asset_mapper.command.compile.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.asset_mapper.command.compile.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('asset-map:compile', [], 'Compile all mapped assets and writes them to the final public output directory', false, #[\Closure(name: 'asset_mapper.command.compile', class: 'Symfony\\Component\\AssetMapper\\Command\\AssetMapperCompileCommand')] fn (): \Symfony\Component\AssetMapper\Command\AssetMapperCompileCommand => ($container->privates['asset_mapper.command.compile'] ?? $container->load('getAssetMapper_Command_CompileService')));
    }
}
