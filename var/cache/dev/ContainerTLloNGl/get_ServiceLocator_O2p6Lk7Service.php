<?php

namespace ContainerTLloNGl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O2p6Lk7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O2p6Lk7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O2p6Lk7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'form.factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
            'twig' => ['privates', 'twig', 'getTwigService', false],
            'web_link.http_header_serializer' => ['privates', 'web_link.http_header_serializer', 'getWebLink_HttpHeaderSerializerService', false],
        ], [
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'twig' => '?',
            'web_link.http_header_serializer' => '?',
        ]);
    }
}
