<?php

namespace ContainerC6oNaaC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O3sIu7CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o3sIu7C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o3sIu7C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'generator' => ['privates', 'App\\GreetingGenerator', 'getGreetingGeneratorService', true],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', true],
        ], [
            'generator' => 'App\\GreetingGenerator',
            'logger' => '?',
        ]);
    }
}
