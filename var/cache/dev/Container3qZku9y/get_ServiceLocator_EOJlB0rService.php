<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/get_ServiceLocator_EOJlB0rService.php
namespace Container3qZku9y;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/get_ServiceLocator_EOJlB0rService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EOJlB0rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eOJlB0r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eOJlB0r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'clubRepository' => ['privates', 'App\\Repository\\ClubRepository', 'getClubRepositoryService', true],
        ], [
            'clubRepository' => 'App\\Repository\\ClubRepository',
        ]);
    }
}