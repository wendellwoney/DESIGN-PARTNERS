<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50c29f654f8bf349a6766952bd458f27
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Command\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Command\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50c29f654f8bf349a6766952bd458f27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50c29f654f8bf349a6766952bd458f27::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
