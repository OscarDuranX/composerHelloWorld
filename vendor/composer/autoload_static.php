<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite624afb061f575a0c8eb2c9b78532d5f
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Oscar\\Hello\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Oscar\\Hello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/mfacenet/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite624afb061f575a0c8eb2c9b78532d5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite624afb061f575a0c8eb2c9b78532d5f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite624afb061f575a0c8eb2c9b78532d5f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
