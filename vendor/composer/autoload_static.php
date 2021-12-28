<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e18364ae9383f9e5b4fc805c90f8207
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GMJ\\LaravelBlock2Recaptcha\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GMJ\\LaravelBlock2Recaptcha\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e18364ae9383f9e5b4fc805c90f8207::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e18364ae9383f9e5b4fc805c90f8207::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e18364ae9383f9e5b4fc805c90f8207::$classMap;

        }, null, ClassLoader::class);
    }
}