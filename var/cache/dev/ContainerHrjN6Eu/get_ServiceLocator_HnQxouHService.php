<?php

namespace ContainerHrjN6Eu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HnQxouHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HnQxouH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HnQxouH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'tokenStorage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'serializer' => '?',
            'tokenStorage' => '?',
        ]);
    }
}