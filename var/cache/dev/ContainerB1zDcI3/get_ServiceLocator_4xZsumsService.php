<?php

namespace ContainerB1zDcI3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4xZsumsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4xZsums' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4xZsums'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'application' => ['privates', '.errored..service_locator.4xZsums.App\\Entity\\Application', NULL, 'Cannot autowire service ".service_locator.4xZsums": it needs an instance of "App\\Entity\\Application" but this type has been excluded in "config/services.yaml".'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'application' => 'App\\Entity\\Application',
            'doctrine' => '?',
        ]);
    }
}
