<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'symfony/website-skeleton';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'dev-master@8fc7b23076e6144d68379f3410bb7dcf15cdc902',
  'doctrine/cache' => 'dev-master@5c5b0e27f6a8d2e03b1bdd061bd9056c4e9d1cf6',
  'doctrine/collections' => '1.7.x-dev@613162ea0b39fb581d4740039353358e275962fe',
  'doctrine/common' => '2.13.x-dev@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.11.x-dev@d200523958e8132a01e8162bc466049ea3d54bea',
  'doctrine/doctrine-bundle' => 'dev-master@a9e3720814d93789bd7c91e80957fcd1003bf3b6',
  'doctrine/doctrine-migrations-bundle' => 'dev-master@6c162986c571da4675acdf891fc5ce45dd783053',
  'doctrine/event-manager' => '1.1.x-dev@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.x-dev@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => 'dev-master@a390fde13fc9bc2ffb73340bb8f07201a8e85af8',
  'doctrine/lexer' => 'dev-master@ec953a1b157db060fc9576a6f6b6b1865a09aac9',
  'doctrine/migrations' => 'dev-master@da238fb4e2311924e6e78089adbbe35cb02a89dc',
  'doctrine/orm' => '2.8.x-dev@6bce7e9cabb2d1741dc1ebd328852bf2c48bdc61',
  'doctrine/persistence' => '1.4.x-dev@6f6bf429011868e9fbcda13cba6b6e60077bf35e',
  'doctrine/reflection' => 'dev-master@e602ccf82febf2bcff124493a52ae6eb23f9f8f8',
  'doctrine/sql-formatter' => 'dev-master@a732f3ed008574c01f7d04cd58f96e2b32d4d055',
  'egulias/email-validator' => 'dev-master@2f38a470f9f179d8d8835256de58c300916e47ae',
  'laminas/laminas-code' => 'dev-develop@889ba6f34788eee250b5e8f895ca87dc0d685da2',
  'laminas/laminas-eventmanager' => 'dev-develop@333b632c38f4a49cb753e8ec8392900ae6c00c6d',
  'laminas/laminas-zendframework-bridge' => 'dev-develop@881b3786014058a7c7a9926bbad376bac8f9375a',
  'monolog/monolog' => 'dev-master@ed2a226ebe210fecd5f74ca5a126793294c31b1d',
  'ocramius/package-versions' => 'dev-master@ed4df24d312ff9dcb1aeb454e83efe7aa91de2ea',
  'ocramius/proxy-manager' => '2.8.x-dev@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => 'dev-master@985f414b55eca4296ffc99db960a97b3cc8fbcea',
  'phpdocumentor/reflection-docblock' => 'dev-master@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => 'dev-master@95d8782070ccd738295bbe4483f8760f998ad64d',
  'psr/cache' => 'dev-master@b9aa2cd4dd36cec02779bee07ee9dab8bd2d07d7',
  'psr/container' => 'dev-master@fc1bc363ecf887921e3897c7b1dad3587ae154eb',
  'psr/event-dispatcher' => 'dev-master@3b1c10727b12ecdfc7b80b040b887a94c64d8388',
  'psr/link' => 'dev-master@131b5c337db3599ef922e9d6c22889ad237b80b9',
  'psr/log' => 'dev-master@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'dev-master@c76bb1c5c67840ecb6d9be8e9d8d7036e375e317',
  'symfony/asset' => 'dev-master@d228deb9cb876277adcf9ff2b6f0dd57025d32c5',
  'symfony/cache' => 'dev-master@a6ea1b312809dec4937858b6c139e937c07b6d06',
  'symfony/cache-contracts' => 'dev-master@8cdaf96856dd1381d83711c303c7abbe3f76eeed',
  'symfony/config' => 'dev-master@8b87bd9638f8f3411841f830c7b4cfec748c8673',
  'symfony/console' => 'dev-master@6f533d9849346d00e4a8c65ed19110ab8140c89c',
  'symfony/dependency-injection' => 'dev-master@bb3e33b2c67b021b72e1200c4b1319af935b4f28',
  'symfony/deprecation-contracts' => 'dev-master@5e20b83385a77593259c9f8beb2c43cd03b2ac14',
  'symfony/doctrine-bridge' => 'dev-master@983247e5e54dbd8c37889ad62d13be5d2f46ed63',
  'symfony/dotenv' => 'dev-master@465e7eed76324919b6693311f9b74dde8f54ccd7',
  'symfony/error-handler' => 'dev-master@fc072cb982a28042cd9d39597bca7604fb38e35f',
  'symfony/event-dispatcher' => 'dev-master@8a53fd33b1637494c03565a24cfd195c9a8b2c2d',
  'symfony/event-dispatcher-contracts' => 'dev-master@3bf93073ac43f3e60d099057a0aafc79cf8289c3',
  'symfony/expression-language' => 'dev-master@e5926086a7f9a4dda92987775e794123b104c06c',
  'symfony/filesystem' => 'dev-master@e7550993849f986f01a9161b302d4aed8d4aab0a',
  'symfony/finder' => 'dev-master@2a63a45741144325f84d28ea1e67bc1b669b1748',
  'symfony/flex' => 'dev-master@967fb2d58d4e8437e0e417979dd0e8ee4891cfb9',
  'symfony/form' => 'dev-master@495233354d165a60e450c5c02fee231bfaa1e119',
  'symfony/framework-bundle' => 'dev-master@b8276f285fdc199825af050522b1f0a4f1b621e1',
  'symfony/http-client' => 'dev-master@8c6de8dedef719b865be3e36fee70675f6ce4652',
  'symfony/http-client-contracts' => 'dev-master@fffb68e893875a114f0e3615b893d39aae33b35c',
  'symfony/http-foundation' => 'dev-master@661de3bec53b8e77638570a01262f3714a086686',
  'symfony/http-kernel' => 'dev-master@d85e727953142d8ce17dffc2de1a9321ce0a0817',
  'symfony/inflector' => 'dev-master@8e2e8bb1bf146c624626a144d100f76e59c893b8',
  'symfony/intl' => 'dev-master@3b789870e75243d958f574159de154d7d5ebcac0',
  'symfony/mailer' => 'dev-master@860b40664547bc191bbe50e8dff96eafa4cf267f',
  'symfony/mime' => 'dev-master@467fec4463a45c35f52b88afcf4483eaef090a38',
  'symfony/monolog-bridge' => 'dev-master@d420ed3e01faa3e3b3a3ec9dc95c32e41c868a50',
  'symfony/monolog-bundle' => 'dev-master@72e798ccdcfd277a6bc88e934b43f618732e3561',
  'symfony/notifier' => 'dev-master@ba66ee5fca9b652f23a7242b0ea40ee4930a2ff2',
  'symfony/options-resolver' => 'dev-master@f3f9b9cd067d32e61e0759fc7746390f3d4d67fd',
  'symfony/orm-pack' => 'dev-master@3644badedf565a5a0ff6b1cba117daee4bf7bdfc',
  'symfony/polyfill-intl-grapheme' => 'dev-master@6e4dbcf5e81eba86e36731f94fe56b1726835846',
  'symfony/polyfill-intl-icu' => 'dev-master@7b5e03aeb88cc8b4b2b136e34b0fc0830e86cd4d',
  'symfony/polyfill-intl-idn' => 'dev-master@a57f8161502549a742a63c09f0a604997bf47027',
  'symfony/polyfill-intl-normalizer' => 'dev-master@0d8d204044deb5d74a5df813379d321fcc03f301',
  'symfony/polyfill-mbstring' => 'dev-master@7110338d81ce1cbc3e273136e4574663627037a7',
  'symfony/polyfill-php73' => 'dev-master@fa0837fe02d617d31fbb25f990655861bb27bd1a',
  'symfony/polyfill-php80' => 'dev-master@4a5b6bba3259902e386eb80dd1956181ee90b5b2',
  'symfony/process' => 'dev-master@2cf3f1373f84bdd33a3dfb1fb99eaa29371859af',
  'symfony/property-access' => 'dev-master@225cbcea5abd6e3163e39da27f180de63eab6992',
  'symfony/property-info' => 'dev-master@8a3df45e756c6e00d7177c86ae0561218b31726b',
  'symfony/routing' => 'dev-master@cf4202ab0c571af1bed00bf6c886505808f9af95',
  'symfony/security-bundle' => 'dev-master@5000f77264a55a815298c0f7ca7ecbbf583a3527',
  'symfony/security-core' => 'dev-master@35927d36fdf611706233f5197ddb3e3a92fef458',
  'symfony/security-csrf' => 'dev-master@32a7bcd8ae172c74cdb3b764382493cca9a3a851',
  'symfony/security-guard' => 'dev-master@a46a25609c85e57dffb1a144319df6e85602fdb0',
  'symfony/security-http' => 'dev-master@47cc4079db31be922a65c40b05705e114cb148e9',
  'symfony/serializer' => 'dev-master@3f729d11706b03ac367979d5939cd65c9c4970e7',
  'symfony/serializer-pack' => 'dev-master@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'dev-master@e9a840fa4bad676ca39cb7fab4b1c29c91016887',
  'symfony/stopwatch' => 'dev-master@3e6eedd86eaede475458b45d1d09c1a90c0ffc11',
  'symfony/string' => 'dev-master@c70102b5e84f20821de9f31b54e5b7482888aace',
  'symfony/translation' => 'dev-master@9d6d2599edc6dd04e1985c7703f971a4bc587ca3',
  'symfony/translation-contracts' => 'dev-master@cb4f3ddf92e316391bb142992169be66fc33b285',
  'symfony/twig-bridge' => 'dev-master@53f48bd73d71e6cc0a0151584e07016286f4c0cb',
  'symfony/twig-bundle' => 'dev-master@90619679df0dd22a50801db5f72c02cb5e44fac0',
  'symfony/twig-pack' => 'dev-master@93b57cbdd1e6107c641779de7137bb5ee3add98e',
  'symfony/validator' => 'dev-master@e66c90dd94d362fa55e87a23c97d79d8248f9d6b',
  'symfony/var-dumper' => 'dev-master@83d77c03540bd430f311db331dff239d7f3f2da6',
  'symfony/var-exporter' => 'dev-master@1faf28875f2ac9c08eae51b83a273a1e2c0f0469',
  'symfony/web-link' => 'dev-master@b59ae4b66a71f602cd0206f8c83bfedbaf065278',
  'symfony/yaml' => 'dev-master@90faa846d8e34b647d3021227ee37b838f1001b5',
  'twig/extra-bundle' => '3.x-dev@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => '3.x-dev@83d6a120ffab9dfce143505eea52ace0febe8328',
  'webimpress/safe-writer' => 'dev-develop@af360c80e178d6293549c31ea329b0db0997734e',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'symfony/browser-kit' => 'dev-master@f67f27eae9d5d94a74c53a520f1af00eeb223670',
  'symfony/css-selector' => 'dev-master@59f93b18026535f06263f768082017ff7a9160d8',
  'symfony/debug-bundle' => 'dev-master@16bf45267712b79424e5402b1b9038d4fa53a0e4',
  'symfony/debug-pack' => 'dev-master@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'dev-master@73e0ac530c705db69318609d0bb822dc677930d8',
  'symfony/maker-bundle' => 'v1.19.0@bea8c3c959e48a2c952cc7c4f4f32964be8b8874',
  'symfony/phpunit-bridge' => 'dev-master@32c0d13af3bcfaf1938818a8ac3ab9128c22156d',
  'symfony/profiler-pack' => 'dev-master@f8fddff65d774087e250fd74c36b2fde70db6cfb',
  'symfony/test-pack' => 'dev-master@556da83d34a502dc1c713d315086c444d37d7779',
  'symfony/web-profiler-bundle' => 'dev-master@383fd1f96396921e7bfccc0530cc322e564acfb2',
  'paragonie/random_compat' => '2.*@b352f11bf25255c0bac83b180c131a131ba581b8',
  'symfony/polyfill-ctype' => '*@b352f11bf25255c0bac83b180c131a131ba581b8',
  'symfony/polyfill-iconv' => '*@b352f11bf25255c0bac83b180c131a131ba581b8',
  'symfony/polyfill-php72' => '*@b352f11bf25255c0bac83b180c131a131ba581b8',
  'symfony/polyfill-php71' => '*@b352f11bf25255c0bac83b180c131a131ba581b8',
  'symfony/polyfill-php70' => '*@b352f11bf25255c0bac83b180c131a131ba581b8',
  'symfony/polyfill-php56' => '*@b352f11bf25255c0bac83b180c131a131ba581b8',
  'symfony/website-skeleton' => '5.2.x-dev@b352f11bf25255c0bac83b180c131a131ba581b8',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
