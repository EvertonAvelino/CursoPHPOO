<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80b6a1db3c6d2c6553eb0aecc4cc15db
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80b6a1db3c6d2c6553eb0aecc4cc15db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80b6a1db3c6d2c6553eb0aecc4cc15db::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
