<?php

namespace ContainerA861U8z;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailVerifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\EmailVerifier' shared autowired service.
     *
     * @return \App\Security\EmailVerifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Security\\EmailVerifier.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfonycasts\\verify-email-bundle\\src\\VerifyEmailHelperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfonycasts\\verify-email-bundle\\src\\VerifyEmailHelper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\UriSigner.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfonycasts\\verify-email-bundle\\src\\Util\\VerifyEmailQueryUtility.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfonycasts\\verify-email-bundle\\src\\Generator\\VerifyEmailTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\MailerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Mailer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\Transports.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport.php';

        return $container->privates['App\\Security\\EmailVerifier'] = new \App\Security\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($container->services['router'] ?? $container->getRouterService()), new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET'), 'signature'), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600), new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['mailer.transport_factory.null'] ?? $container->load('getMailer_TransportFactory_NullService'));
            yield 1 => ($container->privates['mailer.transport_factory.sendmail'] ?? $container->load('getMailer_TransportFactory_SendmailService'));
            yield 2 => ($container->privates['mailer.transport_factory.smtp'] ?? $container->load('getMailer_TransportFactory_SmtpService'));
        }, 3)))->fromStrings(['main' => $container->getEnv('MAILER_DSN')]), NULL, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
