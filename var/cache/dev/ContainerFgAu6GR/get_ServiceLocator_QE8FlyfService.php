<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/get_ServiceLocator_QE8FlyfService.php
namespace Container3qZku9y;
========
namespace ContainerFgAu6GR;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerFgAu6GR/get_ServiceLocator_QE8FlyfService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QE8FlyfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qE8Flyf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qE8Flyf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'eventRepository' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
        ], [
            'eventRepository' => 'App\\Repository\\EventRepository',
        ]);
    }
}