<?php

<<<<<<<< HEAD:var/cache/dev/ContainerGM1kPWL/get_ServiceLocator_C98KNaGService.php
namespace ContainerGM1kPWL;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/get_ServiceLocator_B22CltOService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B22CltOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b22CltO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b22CltO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'application' => ['privates', '.errored..service_locator.b22CltO.App\\Entity\\Application', NULL, 'Cannot autowire service ".service_locator.b22CltO": it needs an instance of "App\\Entity\\Application" but this type has been excluded in "config/services.yaml".'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'application' => 'App\\Entity\\Application',
            'doctrine' => '?',
            'mailer' => '?',
        ]);
    }
}
