<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadbcaf1d3f20e99bed21bb12aa6ec609
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadbcaf1d3f20e99bed21bb12aa6ec609::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadbcaf1d3f20e99bed21bb12aa6ec609::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadbcaf1d3f20e99bed21bb12aa6ec609::$classMap;

        }, null, ClassLoader::class);
    }
}
