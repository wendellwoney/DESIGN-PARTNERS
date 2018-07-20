<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86ae066c073483567f153afb92c912de
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Decorator\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Decorator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86ae066c073483567f153afb92c912de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86ae066c073483567f153afb92c912de::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
