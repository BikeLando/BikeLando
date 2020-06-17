<?php

namespace ContainerNFm41in;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Basic_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.basic.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\BasicAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\BasicAuthenticationEntryPoint.php';

        $container->privates['security.authentication.listener.basic.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), 'main', ($container->privates['security.authentication.basic_entry_point.main'] ?? ($container->privates['security.authentication.basic_entry_point.main'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area'))), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')));

        $instance->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

        return $instance;
    }
}
