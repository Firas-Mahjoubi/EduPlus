<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/getDebug_FileLinkFormatter_UrlFormatService.php
namespace Container3qZku9y;
========
namespace ContainerFgAu6GR;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerFgAu6GR/getDebug_FileLinkFormatter_UrlFormatService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_FileLinkFormatter_UrlFormatService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter::generateUrlFormat(($container->services['router'] ?? self::getRouterService($container)), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }
}
