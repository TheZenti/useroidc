<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd556fdd42ea423c899800714befb1d87
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
    );

    public static $classMap = array (
        'OpenIDConnectClient' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/OpenIDConnectClient.php',
        'OpenIDConnectClientException' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/OpenIDConnectClient.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd556fdd42ea423c899800714befb1d87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd556fdd42ea423c899800714befb1d87::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd556fdd42ea423c899800714befb1d87::$classMap;

        }, null, ClassLoader::class);
    }
}
