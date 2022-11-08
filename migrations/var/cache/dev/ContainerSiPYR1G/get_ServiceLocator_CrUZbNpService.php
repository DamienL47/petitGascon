<?php

namespace ContainerSiPYR1G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CrUZbNpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CrUZbNp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CrUZbNp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'menu' => ['privates', '.errored..service_locator.CrUZbNp.App\\Entity\\Menu', NULL, 'Cannot autowire service ".service_locator.CrUZbNp": it references class "App\\Entity\\Menu" but no such service exists.'],
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', true],
        ], [
            'menu' => 'App\\Entity\\Menu',
            'menuRepository' => 'App\\Repository\\MenuRepository',
        ]);
    }
}
