<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/getDoctrine_Orm_Command_EntityManagerProviderService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/getDoctrine_Orm_Command_EntityManagerProviderService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Command_EntityManagerProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.command.entity_manager_provider' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Orm\ManagerRegistryAwareEntityManagerProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'EntityManagerProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'ManagerRegistryAwareEntityManagerProvider.php';

        return $container->privates['doctrine.orm.command.entity_manager_provider'] = new \Doctrine\Bundle\DoctrineBundle\Orm\ManagerRegistryAwareEntityManagerProvider(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
