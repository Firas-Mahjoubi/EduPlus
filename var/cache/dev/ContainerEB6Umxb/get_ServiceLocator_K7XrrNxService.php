<?php

namespace ContainerEB6Umxb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K7XrrNxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K7XrrNx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K7XrrNx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ressource' => ['privates', '.errored..service_locator.K7XrrNx.App\\Entity\\Ressource', NULL, 'Cannot autowire service ".service_locator.K7XrrNx": it needs an instance of "App\\Entity\\Ressource" but this type has been excluded in "config/services.yaml".'],
        ], [
            'ressource' => 'App\\Entity\\Ressource',
        ]);
    }
}
