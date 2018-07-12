<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e3251cabc7f5265f0ecbdf0a3382d99
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AbstractFactory\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AbstractFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e3251cabc7f5265f0ecbdf0a3382d99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e3251cabc7f5265f0ecbdf0a3382d99::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
