<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTLloNGl/getMaker_EntityClassGeneratorService.php
namespace ContainerTLloNGl;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/getMaker_EntityClassGeneratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_EntityClassGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.entity_class_generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'EntityClassGenerator.php';

        return $container->privates['maker.entity_class_generator'] = new \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator(($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')), ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService')));
    }
}
