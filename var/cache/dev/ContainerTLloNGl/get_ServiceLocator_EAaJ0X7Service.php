<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/get_ServiceLocator_EAaJ0X7Service.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/get_ServiceLocator_EAaJ0X7Service.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EAaJ0X7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eAaJ0X7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eAaJ0X7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'club' => ['privates', '.errored..service_locator.eAaJ0X7.App\\Entity\\Club', NULL, 'Cannot autowire service ".service_locator.eAaJ0X7": it needs an instance of "App\\Entity\\Club" but this type has been excluded in "config/services.yaml".'],
            'memberRepository' => ['privates', 'App\\Repository\\MemberRepository', 'getMemberRepositoryService', true],
        ], [
            'club' => 'App\\Entity\\Club',
            'memberRepository' => 'App\\Repository\\MemberRepository',
        ]);
    }
}
