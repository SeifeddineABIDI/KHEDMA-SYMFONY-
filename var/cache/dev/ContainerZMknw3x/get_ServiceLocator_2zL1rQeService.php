<?php

namespace ContainerZMknw3x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2zL1rQeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2zL1rQe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2zL1rQe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonce' => ['privates', '.errored..service_locator.2zL1rQe.App\\Entity\\Annonce', NULL, 'Cannot autowire service ".service_locator.2zL1rQe": it references class "App\\Entity\\Annonce" but no such service exists.'],
            'annonceRepository' => ['privates', 'App\\Repository\\AnnonceRepository', 'getAnnonceRepositoryService', true],
        ], [
            'annonce' => 'App\\Entity\\Annonce',
            'annonceRepository' => 'App\\Repository\\AnnonceRepository',
        ]);
    }
}
