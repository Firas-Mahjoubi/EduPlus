<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/getSecurity_Logout_Listener_Default_MainService.php
namespace Container3qZku9y;
========
namespace ContainerFgAu6GR;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerFgAu6GR/getSecurity_Logout_Listener_Default_MainService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_Default_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.default.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DefaultLogoutListener.php';

        return $container->privates['security.logout.listener.default.main'] = new \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'app_login');
    }
}