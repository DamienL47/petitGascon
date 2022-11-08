<?php

namespace ContainerWOhZZ56;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YN9rrrBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yN9rrrB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yN9rrrB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationsRepository' => ['privates', 'App\\Repository\\ReservationsRepository', 'getReservationsRepositoryService', true],
            'statusRepository' => ['privates', 'App\\Repository\\StatusRepository', 'getStatusRepositoryService', true],
        ], [
            'reservationsRepository' => 'App\\Repository\\ReservationsRepository',
            'statusRepository' => 'App\\Repository\\StatusRepository',
        ]);
    }
}
