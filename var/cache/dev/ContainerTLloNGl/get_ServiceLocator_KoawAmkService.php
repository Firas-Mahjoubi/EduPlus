<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/get_ServiceLocator_KoawAmkService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/get_ServiceLocator_0LGZiN1Service.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0LGZiN1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0LGZiN1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0LGZiN1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'clubRepository' => ['privates', 'App\\Repository\\ClubRepository', 'getClubRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
        ], [
            'clubRepository' => 'App\\Repository\\ClubRepository',
            'doctrine' => '?',
            'parameterBag' => '?',
        ]);
    }
}
