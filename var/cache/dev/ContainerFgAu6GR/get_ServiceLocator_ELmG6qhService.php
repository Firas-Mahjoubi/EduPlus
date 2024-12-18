<?php

namespace ContainerFgAu6GR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ELmG6qhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eLmG6qh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eLmG6qh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'club' => ['privates', '.errored..service_locator.eLmG6qh.App\\Entity\\Club', NULL, 'Cannot autowire service ".service_locator.eLmG6qh": it needs an instance of "App\\Entity\\Club" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'club' => 'App\\Entity\\Club',
            'entityManager' => '?',
        ]);
    }
}
