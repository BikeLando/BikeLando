<?php

namespace ContainerLGjwWaN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ResetController' shared autowired service.
     *
     * @return \App\Controller\ResetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\ResetController.php';

        $container->services['App\\Controller\\ResetController'] = $instance = new \App\Controller\ResetController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ResetController', $container));

        return $instance;
    }
}
