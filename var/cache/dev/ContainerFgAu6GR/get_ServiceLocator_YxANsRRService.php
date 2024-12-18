<?php

namespace ContainerFgAu6GR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YxANsRRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yxANsRR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yxANsRR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'rec' => ['privates', '.errored..service_locator.yxANsRR.App\\Entity\\Recruitment', NULL, 'Cannot autowire service ".service_locator.yxANsRR": it needs an instance of "App\\Entity\\Recruitment" but this type has been excluded in "config/services.yaml".'],
        ], [
            'manager' => '?',
            'rec' => 'App\\Entity\\Recruitment',
        ]);
    }
}
