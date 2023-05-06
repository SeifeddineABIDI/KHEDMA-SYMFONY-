<?php

namespace ContainerZMknw3x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KLuEMNpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KLuEMNp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KLuEMNp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sousMetier' => ['privates', '.errored..service_locator.KLuEMNp.App\\Entity\\SousMetier', NULL, 'Cannot autowire service ".service_locator.KLuEMNp": it references class "App\\Entity\\SousMetier" but no such service exists.'],
            'sousMetierRepository' => ['privates', 'App\\Repository\\SousMetierRepository', 'getSousMetierRepositoryService', true],
        ], [
            'sousMetier' => 'App\\Entity\\SousMetier',
            'sousMetierRepository' => 'App\\Repository\\SousMetierRepository',
        ]);
    }
}
