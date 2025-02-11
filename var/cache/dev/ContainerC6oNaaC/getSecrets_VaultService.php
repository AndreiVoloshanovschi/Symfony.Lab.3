<?php

namespace ContainerC6oNaaC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_VaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault('F:\\Symfony_Lab3-main/config/secrets/dev', \Symfony\Component\String\LazyString::fromCallable(\Closure::fromCallable([0 => $container, 1 => 'getEnv']), 'base64:default::SYMFONY_DECRYPTION_SECRET'));
    }
}
