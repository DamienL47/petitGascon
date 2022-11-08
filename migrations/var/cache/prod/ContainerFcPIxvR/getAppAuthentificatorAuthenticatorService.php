<?php

namespace ContainerFcPIxvR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppAuthentificatorAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\AppAuthentificatorAuthenticator' shared autowired service.
     *
     * @return \App\Security\AppAuthentificatorAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\AppAuthentificatorAuthenticator'] = new \App\Security\AppAuthentificatorAuthenticator(($container->services['router'] ?? $container->getRouterService()));
    }
}
