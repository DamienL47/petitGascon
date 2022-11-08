<?php

namespace ContainerWOhZZ56;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H1vPl21Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h1vPl21' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h1vPl21'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adminRepository' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'adminRepository' => 'App\\Repository\\AdminRepository',
            'entityManager' => '?',
        ]);
    }
}
