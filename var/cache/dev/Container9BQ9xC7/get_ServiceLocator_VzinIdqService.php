<?php

namespace Container9BQ9xC7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VzinIdqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VzinIdq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VzinIdq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClientController::clientNew' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\HomeController::addCategory' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.soDk2KK', 'get_ServiceLocator_SoDk2KKService', true],
            'App\\Controller\\ProduitController::produitDelete' => ['privates', '.service_locator.LogNSZS', 'get_ServiceLocator_LogNSZSService', true],
            'App\\Controller\\ProduitController::produitEdit' => ['privates', '.service_locator.LogNSZS', 'get_ServiceLocator_LogNSZSService', true],
            'App\\Controller\\ProduitController::produitNew' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\ProduitController::produitShow' => ['privates', '.service_locator.GqQuAcR', 'get_ServiceLocator_GqQuAcRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ClientController:clientNew' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\HomeController:addCategory' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.soDk2KK', 'get_ServiceLocator_SoDk2KKService', true],
            'App\\Controller\\ProduitController:produitDelete' => ['privates', '.service_locator.LogNSZS', 'get_ServiceLocator_LogNSZSService', true],
            'App\\Controller\\ProduitController:produitEdit' => ['privates', '.service_locator.LogNSZS', 'get_ServiceLocator_LogNSZSService', true],
            'App\\Controller\\ProduitController:produitNew' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\ProduitController:produitShow' => ['privates', '.service_locator.GqQuAcR', 'get_ServiceLocator_GqQuAcRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ClientController::clientNew' => '?',
            'App\\Controller\\HomeController::addCategory' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ProduitController::produitDelete' => '?',
            'App\\Controller\\ProduitController::produitEdit' => '?',
            'App\\Controller\\ProduitController::produitNew' => '?',
            'App\\Controller\\ProduitController::produitShow' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ClientController:clientNew' => '?',
            'App\\Controller\\HomeController:addCategory' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ProduitController:produitDelete' => '?',
            'App\\Controller\\ProduitController:produitEdit' => '?',
            'App\\Controller\\ProduitController:produitNew' => '?',
            'App\\Controller\\ProduitController:produitShow' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
