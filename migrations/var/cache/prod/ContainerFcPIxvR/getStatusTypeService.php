<?php

namespace ContainerFcPIxvR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatusTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\StatusType' shared autowired service.
     *
     * @return \App\Form\StatusType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\StatusType'] = new \App\Form\StatusType();
    }
}
