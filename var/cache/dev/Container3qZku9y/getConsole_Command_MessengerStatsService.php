<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/getConsole_Command_MessengerStatsService.php
namespace Container3qZku9y;
========
namespace ContainerFgAu6GR;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerFgAu6GR/getConsole_Command_MessengerStatsService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerStatsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_stats' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\StatsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'StatsCommand.php';

        $container->privates['console.command.messenger_stats'] = $instance = new \Symfony\Component\Messenger\Command\StatsCommand(($container->privates['messenger.receiver_locator'] ?? $container->load('getMessenger_ReceiverLocatorService')), ['async', 'failed']);

        $instance->setName('messenger:stats');
        $instance->setDescription('Show the message count for one or more transports');

        return $instance;
    }
}
