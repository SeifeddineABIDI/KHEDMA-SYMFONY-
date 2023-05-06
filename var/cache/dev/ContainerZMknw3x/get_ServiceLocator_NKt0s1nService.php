<?php

namespace ContainerZMknw3x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NKt0s1nService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nKt0s1n' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nKt0s1n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}
