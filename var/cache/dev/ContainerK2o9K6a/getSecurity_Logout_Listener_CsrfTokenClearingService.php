<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/getSecurity_Logout_Listener_CsrfTokenClearingService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/getSecurity_Logout_Listener_CsrfTokenClearingService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_CsrfTokenClearingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CsrfTokenClearingLogoutListener.php';

        return $container->privates['security.logout.listener.csrf_token_clearing'] = new \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener(($container->privates['security.csrf.token_storage'] ?? $container->load('getSecurity_Csrf_TokenStorageService')));
    }
}
