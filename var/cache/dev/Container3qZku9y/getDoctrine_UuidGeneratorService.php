<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/getDoctrine_UuidGeneratorService.php
namespace Container3qZku9y;
========
namespace ContainerFgAu6GR;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerFgAu6GR/getDoctrine_UuidGeneratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_UuidGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.uuid_generator' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Id'.\DIRECTORY_SEPARATOR.'AbstractIdGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'IdGenerator'.\DIRECTORY_SEPARATOR.'UuidGenerator.php';

        return $container->privates['doctrine.uuid_generator'] = new \Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator(NULL);
    }
}
