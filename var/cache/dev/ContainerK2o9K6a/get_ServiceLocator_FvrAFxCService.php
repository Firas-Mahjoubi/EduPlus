<?php

namespace ContainerK2o9K6a;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FvrAFxCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fvrAFxC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fvrAFxC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::add' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\AdminController::dashboard' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::dashboardevents' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.xHAhUTS', 'get_ServiceLocator_XHAhUTSService', true],
            'App\\Controller\\AdminController::update' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\ApplicationController::submitForClub' => ['privates', '.service_locator.xLj1diB', 'get_ServiceLocator_XLj1diBService', true],
            'App\\Controller\\CommentaryController::addComment' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController::acceptApplication' => ['privates', '.service_locator.xRqqVGS', 'get_ServiceLocator_XRqqVGSService', true],
            'App\\Controller\\GClubsController::applicationsStatistics' => ['privates', '.service_locator.raUDR8y', 'get_ServiceLocator_RaUDR8yService', true],
            'App\\Controller\\GClubsController::clubDetails' => ['privates', '.service_locator.oyNdjWp', 'get_ServiceLocator_OyNdjWpService', true],
            'App\\Controller\\GClubsController::delete' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController::edit' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController::getAverageRating' => ['privates', '.service_locator.yHlyP5W', 'get_ServiceLocator_YHlyP5WService', true],
            'App\\Controller\\GClubsController::index' => ['privates', '.service_locator.0LGZiN1', 'get_ServiceLocator_0LGZiN1Service', true],
            'App\\Controller\\GClubsController::list' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController::manageMembers' => ['privates', '.service_locator.yHlyP5W', 'get_ServiceLocator_YHlyP5WService', true],
            'App\\Controller\\GClubsController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GClubsController::pendingApplications' => ['privates', '.service_locator.raUDR8y', 'get_ServiceLocator_RaUDR8yService', true],
            'App\\Controller\\GClubsController::rateClub' => ['privates', '.service_locator.Z_Q_cF0', 'get_ServiceLocator_ZQCF0Service', true],
            'App\\Controller\\GClubsController::rejectApplication' => ['privates', '.service_locator.xRqqVGS', 'get_ServiceLocator_XRqqVGSService', true],
            'App\\Controller\\GClubsController::removeMember' => ['privates', '.service_locator.pX.iTSM', 'get_ServiceLocator_PX_ITSMService', true],
            'App\\Controller\\GClubsController::searchById' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController::showClubApplications' => ['privates', '.service_locator.6.pzLHU', 'get_ServiceLocator_6_PzLHUService', true],
            'App\\Controller\\GClubsController::showClubs' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController::showMembers' => ['privates', '.service_locator.eAaJ0X7', 'get_ServiceLocator_EAaJ0X7Service', true],
            'App\\Controller\\GEventsController::cancelParticipation' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\GEventsController::eventDiscussion' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController::index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController::participate' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\GEventsController::postMessage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController::search' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController::show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController::showev' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRecrutementsController::applicationDecision' => ['privates', '.service_locator.b22CltO', 'get_ServiceLocator_B22CltOService', true],
            'App\\Controller\\GRecrutementsController::apply' => ['privates', '.service_locator.C98KNaG', 'get_ServiceLocator_C98KNaGService', true],
            'App\\Controller\\GRecrutementsController::authorDelete1' => ['privates', '.service_locator.yxANsRR', 'get_ServiceLocator_YxANsRRService', true],
            'App\\Controller\\GRecrutementsController::authorDetails' => ['privates', '.service_locator.q2iM02Z', 'get_ServiceLocator_Q2iM02ZService', true],
            'App\\Controller\\GRecrutementsController::edit' => ['privates', '.service_locator.C98KNaG', 'get_ServiceLocator_C98KNaGService', true],
            'App\\Controller\\GRecrutementsController::listApplications' => ['privates', '.service_locator.C98KNaG', 'get_ServiceLocator_C98KNaGService', true],
            'App\\Controller\\GRecrutementsController::recruitmentAdd' => ['privates', '.service_locator.IwuOEF6', 'get_ServiceLocator_IwuOEF6Service', true],
            'App\\Controller\\GRecrutementsController::showApplicationDetails' => ['privates', '.service_locator.cKIfloV', 'get_ServiceLocator_CKIfloVService', true],
            'App\\Controller\\GRecrutementsController::show_all' => ['privates', '.service_locator.Xw86vfZ', 'get_ServiceLocator_Xw86vfZService', true],
            'App\\Controller\\GRecrutementsController::show_alluser' => ['privates', '.service_locator.Xw86vfZ', 'get_ServiceLocator_Xw86vfZService', true],
            'App\\Controller\\GRessourcesController::delete' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController::demandeRessource' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController::edit' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController::indexxx' => ['privates', '.service_locator.jgzxFbe', 'get_ServiceLocator_JgzxFbeService', true],
            'App\\Controller\\GUsersController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GUsersController::new' => ['privates', '.service_locator.6fNvpDm', 'get_ServiceLocator_6fNvpDmService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.9raLMXz', 'get_ServiceLocator_9raLMXzService', true],
            'App\\Controller\\SecurityController::adminDashboard' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.stWY4Dj', 'get_ServiceLocator_StWY4DjService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:add' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\AdminController:dashboard' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:dashboardevents' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.xHAhUTS', 'get_ServiceLocator_XHAhUTSService', true],
            'App\\Controller\\AdminController:update' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\ApplicationController:submitForClub' => ['privates', '.service_locator.xLj1diB', 'get_ServiceLocator_XLj1diBService', true],
            'App\\Controller\\CommentaryController:addComment' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController:acceptApplication' => ['privates', '.service_locator.xRqqVGS', 'get_ServiceLocator_XRqqVGSService', true],
            'App\\Controller\\GClubsController:applicationsStatistics' => ['privates', '.service_locator.raUDR8y', 'get_ServiceLocator_RaUDR8yService', true],
            'App\\Controller\\GClubsController:clubDetails' => ['privates', '.service_locator.oyNdjWp', 'get_ServiceLocator_OyNdjWpService', true],
            'App\\Controller\\GClubsController:delete' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController:edit' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController:getAverageRating' => ['privates', '.service_locator.yHlyP5W', 'get_ServiceLocator_YHlyP5WService', true],
            'App\\Controller\\GClubsController:index' => ['privates', '.service_locator.0LGZiN1', 'get_ServiceLocator_0LGZiN1Service', true],
            'App\\Controller\\GClubsController:list' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController:manageMembers' => ['privates', '.service_locator.yHlyP5W', 'get_ServiceLocator_YHlyP5WService', true],
            'App\\Controller\\GClubsController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GClubsController:pendingApplications' => ['privates', '.service_locator.raUDR8y', 'get_ServiceLocator_RaUDR8yService', true],
            'App\\Controller\\GClubsController:rateClub' => ['privates', '.service_locator.Z_Q_cF0', 'get_ServiceLocator_ZQCF0Service', true],
            'App\\Controller\\GClubsController:rejectApplication' => ['privates', '.service_locator.xRqqVGS', 'get_ServiceLocator_XRqqVGSService', true],
            'App\\Controller\\GClubsController:removeMember' => ['privates', '.service_locator.pX.iTSM', 'get_ServiceLocator_PX_ITSMService', true],
            'App\\Controller\\GClubsController:searchById' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController:showClubApplications' => ['privates', '.service_locator.6.pzLHU', 'get_ServiceLocator_6_PzLHUService', true],
            'App\\Controller\\GClubsController:showClubs' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController:showMembers' => ['privates', '.service_locator.eAaJ0X7', 'get_ServiceLocator_EAaJ0X7Service', true],
            'App\\Controller\\GEventsController:cancelParticipation' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\GEventsController:eventDiscussion' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController:index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController:participate' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\GEventsController:postMessage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController:search' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController:show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController:showev' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRecrutementsController:applicationDecision' => ['privates', '.service_locator.b22CltO', 'get_ServiceLocator_B22CltOService', true],
            'App\\Controller\\GRecrutementsController:apply' => ['privates', '.service_locator.C98KNaG', 'get_ServiceLocator_C98KNaGService', true],
            'App\\Controller\\GRecrutementsController:authorDelete1' => ['privates', '.service_locator.yxANsRR', 'get_ServiceLocator_YxANsRRService', true],
            'App\\Controller\\GRecrutementsController:authorDetails' => ['privates', '.service_locator.q2iM02Z', 'get_ServiceLocator_Q2iM02ZService', true],
            'App\\Controller\\GRecrutementsController:edit' => ['privates', '.service_locator.C98KNaG', 'get_ServiceLocator_C98KNaGService', true],
            'App\\Controller\\GRecrutementsController:listApplications' => ['privates', '.service_locator.C98KNaG', 'get_ServiceLocator_C98KNaGService', true],
            'App\\Controller\\GRecrutementsController:recruitmentAdd' => ['privates', '.service_locator.IwuOEF6', 'get_ServiceLocator_IwuOEF6Service', true],
            'App\\Controller\\GRecrutementsController:showApplicationDetails' => ['privates', '.service_locator.cKIfloV', 'get_ServiceLocator_CKIfloVService', true],
            'App\\Controller\\GRecrutementsController:show_all' => ['privates', '.service_locator.Xw86vfZ', 'get_ServiceLocator_Xw86vfZService', true],
            'App\\Controller\\GRecrutementsController:show_alluser' => ['privates', '.service_locator.Xw86vfZ', 'get_ServiceLocator_Xw86vfZService', true],
            'App\\Controller\\GRessourcesController:delete' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController:demandeRessource' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController:edit' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController:indexxx' => ['privates', '.service_locator.jgzxFbe', 'get_ServiceLocator_JgzxFbeService', true],
            'App\\Controller\\GUsersController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GUsersController:new' => ['privates', '.service_locator.6fNvpDm', 'get_ServiceLocator_6fNvpDmService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.9raLMXz', 'get_ServiceLocator_9raLMXzService', true],
            'App\\Controller\\SecurityController:adminDashboard' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.stWY4Dj', 'get_ServiceLocator_StWY4DjService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::add' => '?',
            'App\\Controller\\AdminController::dashboard' => '?',
            'App\\Controller\\AdminController::dashboardevents' => '?',
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::update' => '?',
            'App\\Controller\\ApplicationController::submitForClub' => '?',
            'App\\Controller\\CommentaryController::addComment' => '?',
            'App\\Controller\\GClubsController::acceptApplication' => '?',
            'App\\Controller\\GClubsController::applicationsStatistics' => '?',
            'App\\Controller\\GClubsController::clubDetails' => '?',
            'App\\Controller\\GClubsController::delete' => '?',
            'App\\Controller\\GClubsController::edit' => '?',
            'App\\Controller\\GClubsController::getAverageRating' => '?',
            'App\\Controller\\GClubsController::index' => '?',
            'App\\Controller\\GClubsController::list' => '?',
            'App\\Controller\\GClubsController::manageMembers' => '?',
            'App\\Controller\\GClubsController::new' => '?',
            'App\\Controller\\GClubsController::pendingApplications' => '?',
            'App\\Controller\\GClubsController::rateClub' => '?',
            'App\\Controller\\GClubsController::rejectApplication' => '?',
            'App\\Controller\\GClubsController::removeMember' => '?',
            'App\\Controller\\GClubsController::searchById' => '?',
            'App\\Controller\\GClubsController::showClubApplications' => '?',
            'App\\Controller\\GClubsController::showClubs' => '?',
            'App\\Controller\\GClubsController::showMembers' => '?',
            'App\\Controller\\GEventsController::cancelParticipation' => '?',
            'App\\Controller\\GEventsController::eventDiscussion' => '?',
            'App\\Controller\\GEventsController::index' => '?',
            'App\\Controller\\GEventsController::participate' => '?',
            'App\\Controller\\GEventsController::postMessage' => '?',
            'App\\Controller\\GEventsController::search' => '?',
            'App\\Controller\\GEventsController::show' => '?',
            'App\\Controller\\GEventsController::showev' => '?',
            'App\\Controller\\GRecrutementsController::applicationDecision' => '?',
            'App\\Controller\\GRecrutementsController::apply' => '?',
            'App\\Controller\\GRecrutementsController::authorDelete1' => '?',
            'App\\Controller\\GRecrutementsController::authorDetails' => '?',
            'App\\Controller\\GRecrutementsController::edit' => '?',
            'App\\Controller\\GRecrutementsController::listApplications' => '?',
            'App\\Controller\\GRecrutementsController::recruitmentAdd' => '?',
            'App\\Controller\\GRecrutementsController::showApplicationDetails' => '?',
            'App\\Controller\\GRecrutementsController::show_all' => '?',
            'App\\Controller\\GRecrutementsController::show_alluser' => '?',
            'App\\Controller\\GRessourcesController::delete' => '?',
            'App\\Controller\\GRessourcesController::demandeRessource' => '?',
            'App\\Controller\\GRessourcesController::edit' => '?',
            'App\\Controller\\GRessourcesController::indexxx' => '?',
            'App\\Controller\\GUsersController::index' => '?',
            'App\\Controller\\GUsersController::new' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::adminDashboard' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:add' => '?',
            'App\\Controller\\AdminController:dashboard' => '?',
            'App\\Controller\\AdminController:dashboardevents' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:update' => '?',
            'App\\Controller\\ApplicationController:submitForClub' => '?',
            'App\\Controller\\CommentaryController:addComment' => '?',
            'App\\Controller\\GClubsController:acceptApplication' => '?',
            'App\\Controller\\GClubsController:applicationsStatistics' => '?',
            'App\\Controller\\GClubsController:clubDetails' => '?',
            'App\\Controller\\GClubsController:delete' => '?',
            'App\\Controller\\GClubsController:edit' => '?',
            'App\\Controller\\GClubsController:getAverageRating' => '?',
            'App\\Controller\\GClubsController:index' => '?',
            'App\\Controller\\GClubsController:list' => '?',
            'App\\Controller\\GClubsController:manageMembers' => '?',
            'App\\Controller\\GClubsController:new' => '?',
            'App\\Controller\\GClubsController:pendingApplications' => '?',
            'App\\Controller\\GClubsController:rateClub' => '?',
            'App\\Controller\\GClubsController:rejectApplication' => '?',
            'App\\Controller\\GClubsController:removeMember' => '?',
            'App\\Controller\\GClubsController:searchById' => '?',
            'App\\Controller\\GClubsController:showClubApplications' => '?',
            'App\\Controller\\GClubsController:showClubs' => '?',
            'App\\Controller\\GClubsController:showMembers' => '?',
            'App\\Controller\\GEventsController:cancelParticipation' => '?',
            'App\\Controller\\GEventsController:eventDiscussion' => '?',
            'App\\Controller\\GEventsController:index' => '?',
            'App\\Controller\\GEventsController:participate' => '?',
            'App\\Controller\\GEventsController:postMessage' => '?',
            'App\\Controller\\GEventsController:search' => '?',
            'App\\Controller\\GEventsController:show' => '?',
            'App\\Controller\\GEventsController:showev' => '?',
            'App\\Controller\\GRecrutementsController:applicationDecision' => '?',
            'App\\Controller\\GRecrutementsController:apply' => '?',
            'App\\Controller\\GRecrutementsController:authorDelete1' => '?',
            'App\\Controller\\GRecrutementsController:authorDetails' => '?',
            'App\\Controller\\GRecrutementsController:edit' => '?',
            'App\\Controller\\GRecrutementsController:listApplications' => '?',
            'App\\Controller\\GRecrutementsController:recruitmentAdd' => '?',
            'App\\Controller\\GRecrutementsController:showApplicationDetails' => '?',
            'App\\Controller\\GRecrutementsController:show_all' => '?',
            'App\\Controller\\GRecrutementsController:show_alluser' => '?',
            'App\\Controller\\GRessourcesController:delete' => '?',
            'App\\Controller\\GRessourcesController:demandeRessource' => '?',
            'App\\Controller\\GRessourcesController:edit' => '?',
            'App\\Controller\\GRessourcesController:indexxx' => '?',
            'App\\Controller\\GUsersController:index' => '?',
            'App\\Controller\\GUsersController:new' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:adminDashboard' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
