<?php

namespace ContainerO5BMttK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.filter_eager_loading' shared service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Extension\FilterEagerLoadingExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/FilterEagerLoadingExtension.php';

        return $container->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] = new \ApiPlatform\Doctrine\Orm\Extension\FilterEagerLoadingExtension(true, ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()));
    }
}
