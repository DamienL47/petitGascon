<?php

namespace ContainerSiPYR1G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FlwiWHWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.flwiWHW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.flwiWHW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'menu' => ['privates', '.errored..service_locator.flwiWHW.App\\Entity\\Menu', NULL, 'Cannot autowire service ".service_locator.flwiWHW": it references class "App\\Entity\\Menu" but no such service exists.'],
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'entityManager' => '?',
            'menu' => 'App\\Entity\\Menu',
            'menuRepository' => 'App\\Repository\\MenuRepository',
            'slugger' => '?',
        ]);
    }
}
