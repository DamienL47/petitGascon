<?php

namespace ContainerFcPIxvR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpSnappy_ImageService extends App_KernelProdContainer
{
    /*
     * Gets the public 'knp_snappy.image' shared service.
     *
     * @return \Knp\Snappy\Image
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['knp_snappy.image'] = $instance = new \Knp\Snappy\Image($container->getEnv('WKHTMLTOIMAGE_PATH'), [], []);

        $instance->setLogger(($container->privates['monolog.logger.snappy'] ?? $container->load('getMonolog_Logger_SnappyService')));

        return $instance;
    }
}
