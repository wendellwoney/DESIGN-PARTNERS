<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1aa311d7cf4a4e04d1620f587b6bac97
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Prototype\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Prototype\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1aa311d7cf4a4e04d1620f587b6bac97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1aa311d7cf4a4e04d1620f587b6bac97::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
