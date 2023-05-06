<?php

namespace ContainerZKswXJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YCZNw7CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YCZNw7C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YCZNw7C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\MetierRepository', 'getMetierRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\MetierRepository',
        ]);
    }
}
