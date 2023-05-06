<?php

namespace ContainerZKswXJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D23vQsLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d23vQsL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d23vQsL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'tache' => ['privates', '.errored..service_locator.d23vQsL.App\\Entity\\Tache', NULL, 'Cannot autowire service ".service_locator.d23vQsL": it references class "App\\Entity\\Tache" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'tache' => 'App\\Entity\\Tache',
        ]);
    }
}
