<?php

namespace ContainerPXEjw9x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YHlyP5WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yHlyP5W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yHlyP5W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'club' => ['privates', '.errored..service_locator.yHlyP5W.App\\Entity\\Club', NULL, 'Cannot autowire service ".service_locator.yHlyP5W": it needs an instance of "App\\Entity\\Club" but this type has been excluded in "config/services.yaml".'],
        ], [
            'club' => 'App\\Entity\\Club',
        ]);
    }
}
