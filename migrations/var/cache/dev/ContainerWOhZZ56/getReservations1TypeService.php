<?php

namespace ContainerWOhZZ56;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservations1TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Reservations1Type' shared autowired service.
     *
     * @return \App\Form\Reservations1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Reservations1Type.php';

        return $container->privates['App\\Form\\Reservations1Type'] = new \App\Form\Reservations1Type();
    }
}
