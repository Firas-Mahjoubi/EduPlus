<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getAssetMapper_Command_DebugService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getAssetMapper_Command_DebugService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Command_DebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.command.debug' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\DebugAssetMapperCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugAssetMapperCommand.php';

        $container->privates['asset_mapper.command.debug'] = $instance = new \Symfony\Component\AssetMapper\Command\DebugAssetMapperCommand(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.repository'] ?? self::getAssetMapper_RepositoryService($container)), \dirname(__DIR__, 4));

        $instance->setName('debug:asset-map');
        $instance->setDescription('Output all mapped assets');

        return $instance;
    }
}
