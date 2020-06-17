<?php

namespace ContainerA861U8z;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddUserToDbControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AddUserToDbController' shared autowired service.
     *
     * @return \App\Controller\AddUserToDbController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\AddUserToDbController.php';

        $container->services['App\\Controller\\AddUserToDbController'] = $instance = new \App\Controller\AddUserToDbController(($container->privates['App\\Security\\EmailVerifier'] ?? $container->load('getEmailVerifierService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AddUserToDbController', $container));

        return $instance;
    }
}
