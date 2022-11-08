<?php

namespace ContainerSiPYR1G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FKAqqEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FKAqqE_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FKAqqE_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\AppAuthentificatorAuthenticator', 'getAppAuthentificatorAuthenticatorService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'authenticator' => 'App\\Security\\AppAuthentificatorAuthenticator',
            'entityManager' => '?',
            'userAuthenticator' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
