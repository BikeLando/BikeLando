<?php

namespace ContainerVJ5sr6B;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getToursControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ToursController' shared autowired service.
     *
     * @return \App\Controller\ToursController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\ToursController.php';

        $container->services['App\\Controller\\ToursController'] = $instance = new \App\Controller\ToursController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ToursController', $container));

        return $instance;
    }
}
