<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc914437a47324943645e6e3d0c0e5554
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mypackages\\Mainslider\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mypackages\\Mainslider\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc914437a47324943645e6e3d0c0e5554::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc914437a47324943645e6e3d0c0e5554::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc914437a47324943645e6e3d0c0e5554::$classMap;

        }, null, ClassLoader::class);
    }
}
