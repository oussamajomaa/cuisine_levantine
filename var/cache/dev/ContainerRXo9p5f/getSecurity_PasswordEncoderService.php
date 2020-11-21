<?php

namespace ContainerRXo9p5f;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_PasswordEncoderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactory.php';

        return $container->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($container->privates['security.encoder_factory.generic'] ?? ($container->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory([]))));
    }
}
