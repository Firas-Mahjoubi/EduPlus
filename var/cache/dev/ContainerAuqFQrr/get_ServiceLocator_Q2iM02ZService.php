<?php

namespace ContainerAuqFQrr;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q2iM02ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q2iM02Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q2iM02Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repo' => ['privates', 'App\\Repository\\RecruitmentRepository', 'getRecruitmentRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\RecruitmentRepository',
        ]);
    }
}
