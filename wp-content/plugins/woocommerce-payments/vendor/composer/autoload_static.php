<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85414029225d8d0aa46b2d7a243ace49
{
    public static $files = array (
        'bce4ecd6aabb2a2948e06d0e2c4ea9a6' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/load-ixr.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\A8c_Mc_Stats' => __DIR__ . '/..' . '/automattic/jetpack-a8c-mc-stats/src/class-a8c-mc-stats.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Automattic\\Jetpack\\Config' => __DIR__ . '/..' . '/automattic/jetpack-config/src/class-config.php',
        'Automattic\\Jetpack\\Connection\\Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-client.php',
        'Automattic\\Jetpack\\Connection\\Error_Handler' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-error-handler.php',
        'Automattic\\Jetpack\\Connection\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-manager.php',
        'Automattic\\Jetpack\\Connection\\Manager_Interface' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/interface-manager.php',
        'Automattic\\Jetpack\\Connection\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-plugin.php',
        'Automattic\\Jetpack\\Connection\\Plugin_Storage' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-plugin-storage.php',
        'Automattic\\Jetpack\\Connection\\REST_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-rest-connector.php',
        'Automattic\\Jetpack\\Connection\\Rest_Authentication' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-rest-authentication.php',
        'Automattic\\Jetpack\\Connection\\Utils' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-utils.php',
        'Automattic\\Jetpack\\Connection\\XMLRPC_Async_Call' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-xmlrpc-async-call.php',
        'Automattic\\Jetpack\\Connection\\XMLRPC_Connector' => __DIR__ . '/..' . '/automattic/jetpack-connection/src/class-xmlrpc-connector.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/..' . '/automattic/jetpack-constants/src/class-constants.php',
        'Automattic\\Jetpack\\Heartbeat' => __DIR__ . '/..' . '/automattic/jetpack-heartbeat/src/class-heartbeat.php',
        'Automattic\\Jetpack\\Roles' => __DIR__ . '/..' . '/automattic/jetpack-roles/src/class-roles.php',
        'Automattic\\Jetpack\\Status' => __DIR__ . '/..' . '/automattic/jetpack-status/src/class-status.php',
        'Automattic\\Jetpack\\Terms_Of_Service' => __DIR__ . '/..' . '/automattic/jetpack-terms-of-service/src/class-terms-of-service.php',
        'Automattic\\Jetpack\\Tracking' => __DIR__ . '/..' . '/automattic/jetpack-tracking/src/class-tracking.php',
        'Jetpack_IXR_Client' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-client.php',
        'Jetpack_IXR_ClientMulticall' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-clientmulticall.php',
        'Jetpack_Options' => __DIR__ . '/..' . '/automattic/jetpack-options/legacy/class-jetpack-options.php',
        'Jetpack_Signature' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-signature.php',
        'Jetpack_Tracks_Client' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-client.php',
        'Jetpack_Tracks_Event' => __DIR__ . '/..' . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-event.php',
        'Jetpack_XMLRPC_Server' => __DIR__ . '/..' . '/automattic/jetpack-connection/legacy/class-jetpack-xmlrpc-server.php',
        'MyCLabs\\Enum\\Enum' => __DIR__ . '/..' . '/myclabs/php-enum/src/Enum.php',
        'MyCLabs\\Enum\\PHPUnit\\Comparator' => __DIR__ . '/..' . '/myclabs/php-enum/src/PHPUnit/Comparator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85414029225d8d0aa46b2d7a243ace49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85414029225d8d0aa46b2d7a243ace49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85414029225d8d0aa46b2d7a243ace49::$classMap;

        }, null, ClassLoader::class);
    }
}
