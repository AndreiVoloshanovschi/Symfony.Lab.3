<?php

namespace ContainerC6oNaaC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_AssetsInstallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($container->services['filesystem'] ?? ($container->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), 'F:\\Symfony_Lab3-main');

        $instance->setName('assets:install');

        return $instance;
    }
}
