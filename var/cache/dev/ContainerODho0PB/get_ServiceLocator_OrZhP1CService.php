<?php

namespace ContainerODho0PB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OrZhP1CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.orZhP1C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.orZhP1C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ApplicationController::submit' => ['privates', '.service_locator.xLj1diB', 'get_ServiceLocator_XLj1diBService', true],
            'App\\Controller\\GClubsController::acceptApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController::clubDetails' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController::delete' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController::edit' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController::index' => ['privates', '.service_locator.koawAmk', 'get_ServiceLocator_KoawAmkService', true],
            'App\\Controller\\GClubsController::list' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GClubsController::rejectApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController::show' => ['privates', '.service_locator.eAaJ0X7', 'get_ServiceLocator_EAaJ0X7Service', true],
            'App\\Controller\\GClubsController::showClubApplications' => ['privates', '.service_locator.6.pzLHU', 'get_ServiceLocator_6_PzLHUService', true],
            'App\\Controller\\GEventsController::add' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController::delete' => ['privates', '.service_locator.dANsewa', 'get_ServiceLocator_DANsewaService', true],
            'App\\Controller\\GEventsController::index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController::show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController::update' => ['privates', '.service_locator.Yzf6g69', 'get_ServiceLocator_Yzf6g69Service', true],
            'App\\Controller\\GUsersController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GUsersController::new' => ['privates', '.service_locator.6fNvpDm', 'get_ServiceLocator_6fNvpDmService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ApplicationController:submit' => ['privates', '.service_locator.xLj1diB', 'get_ServiceLocator_XLj1diBService', true],
            'App\\Controller\\GClubsController:acceptApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController:clubDetails' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController:delete' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController:edit' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController:index' => ['privates', '.service_locator.koawAmk', 'get_ServiceLocator_KoawAmkService', true],
            'App\\Controller\\GClubsController:list' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GClubsController:rejectApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController:show' => ['privates', '.service_locator.eAaJ0X7', 'get_ServiceLocator_EAaJ0X7Service', true],
            'App\\Controller\\GClubsController:showClubApplications' => ['privates', '.service_locator.6.pzLHU', 'get_ServiceLocator_6_PzLHUService', true],
            'App\\Controller\\GEventsController:add' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController:delete' => ['privates', '.service_locator.dANsewa', 'get_ServiceLocator_DANsewaService', true],
            'App\\Controller\\GEventsController:index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController:show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController:update' => ['privates', '.service_locator.Yzf6g69', 'get_ServiceLocator_Yzf6g69Service', true],
            'App\\Controller\\GUsersController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GUsersController:new' => ['privates', '.service_locator.6fNvpDm', 'get_ServiceLocator_6fNvpDmService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ApplicationController::submit' => '?',
            'App\\Controller\\GClubsController::acceptApplication' => '?',
            'App\\Controller\\GClubsController::clubDetails' => '?',
            'App\\Controller\\GClubsController::delete' => '?',
            'App\\Controller\\GClubsController::edit' => '?',
            'App\\Controller\\GClubsController::index' => '?',
            'App\\Controller\\GClubsController::list' => '?',
            'App\\Controller\\GClubsController::new' => '?',
            'App\\Controller\\GClubsController::rejectApplication' => '?',
            'App\\Controller\\GClubsController::show' => '?',
            'App\\Controller\\GClubsController::showClubApplications' => '?',
            'App\\Controller\\GEventsController::add' => '?',
            'App\\Controller\\GEventsController::delete' => '?',
            'App\\Controller\\GEventsController::index' => '?',
            'App\\Controller\\GEventsController::show' => '?',
            'App\\Controller\\GEventsController::update' => '?',
            'App\\Controller\\GUsersController::index' => '?',
            'App\\Controller\\GUsersController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ApplicationController:submit' => '?',
            'App\\Controller\\GClubsController:acceptApplication' => '?',
            'App\\Controller\\GClubsController:clubDetails' => '?',
            'App\\Controller\\GClubsController:delete' => '?',
            'App\\Controller\\GClubsController:edit' => '?',
            'App\\Controller\\GClubsController:index' => '?',
            'App\\Controller\\GClubsController:list' => '?',
            'App\\Controller\\GClubsController:new' => '?',
            'App\\Controller\\GClubsController:rejectApplication' => '?',
            'App\\Controller\\GClubsController:show' => '?',
            'App\\Controller\\GClubsController:showClubApplications' => '?',
            'App\\Controller\\GEventsController:add' => '?',
            'App\\Controller\\GEventsController:delete' => '?',
            'App\\Controller\\GEventsController:index' => '?',
            'App\\Controller\\GEventsController:show' => '?',
            'App\\Controller\\GEventsController:update' => '?',
            'App\\Controller\\GUsersController:index' => '?',
            'App\\Controller\\GUsersController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
