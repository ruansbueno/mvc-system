<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9c2f2ec440ea28862a1acdb7ba257b4
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9c2f2ec440ea28862a1acdb7ba257b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9c2f2ec440ea28862a1acdb7ba257b4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9c2f2ec440ea28862a1acdb7ba257b4::$classMap;

        }, null, ClassLoader::class);
    }
}
