<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/get_ServiceLocator_UItqPakService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/get_ServiceLocator_UItqPakService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UItqPakService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UItqPak' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UItqPak'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'eventRepository' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
        ], [
            'entityManager' => '?',
            'eventRepository' => 'App\\Repository\\EventRepository',
        ]);
    }
}