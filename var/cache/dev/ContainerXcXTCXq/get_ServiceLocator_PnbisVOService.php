<?php

namespace ContainerXcXTCXq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PnbisVOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pnbisVO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pnbisVO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'clubRepository' => ['privates', 'App\\Repository\\ClubRepository', 'getClubRepositoryService', true],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'clubRepository' => 'App\\Repository\\ClubRepository',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
            'security' => '?',
        ]);
    }
}
