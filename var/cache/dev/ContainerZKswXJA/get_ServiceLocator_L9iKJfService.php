<?php

namespace ContainerZKswXJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L9iKJfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l9i_KJf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l9i_KJf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classification' => ['privates', '.errored..service_locator.l9i_KJf.App\\Entity\\Classification', NULL, 'Cannot autowire service ".service_locator.l9i_KJf": it references class "App\\Entity\\Classification" but no such service exists.'],
        ], [
            'classification' => 'App\\Entity\\Classification',
        ]);
    }
}
