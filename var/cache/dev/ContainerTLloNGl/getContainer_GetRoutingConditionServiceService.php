<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/getContainer_GetRoutingConditionServiceService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/getContainer_GetRoutingConditionServiceService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetRoutingConditionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'container.get_routing_condition_service' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['container.get_routing_condition_service'] = ($container->privates['.service_locator.Xbsa8iG'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], []))->get(...);
    }
}
