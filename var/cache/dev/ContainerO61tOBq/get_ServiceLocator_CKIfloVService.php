<?php

namespace ContainerO61tOBq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CKIfloVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cKIfloV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cKIfloV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'application' => ['privates', '.errored..service_locator.cKIfloV.App\\Entity\\Application', NULL, 'Cannot autowire service ".service_locator.cKIfloV": it needs an instance of "App\\Entity\\Application" but this type has been excluded in "config/services.yaml".'],
        ], [
            'application' => 'App\\Entity\\Application',
        ]);
    }
}
