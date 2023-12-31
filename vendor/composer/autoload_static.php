<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf31ef9d3977beff6f006bebe788a68c6
{
    public static $files = array (
        'f1f925400e4cd61a53a6df138982b04f' => __DIR__ . '/../..' . '/src/StringUtils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf31ef9d3977beff6f006bebe788a68c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf31ef9d3977beff6f006bebe788a68c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf31ef9d3977beff6f006bebe788a68c6::$classMap;

        }, null, ClassLoader::class);
    }
}
