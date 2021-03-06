<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite56ace9ea3c150d18684c8008bc42c27
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpSails\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpSails\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/phpSails',
        ),
    );

    public static $classMap = array (
        'phpSails\\Controller' => __DIR__ . '/../..' . '/src/phpSails/Controller.php',
        'phpSails\\TestController' => __DIR__ . '/../..' . '/src/phpSails/TestController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite56ace9ea3c150d18684c8008bc42c27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite56ace9ea3c150d18684c8008bc42c27::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite56ace9ea3c150d18684c8008bc42c27::$classMap;

        }, null, ClassLoader::class);
    }
}
