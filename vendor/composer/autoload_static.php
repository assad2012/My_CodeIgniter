<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf316fa36682f9738c646a9622b70eb9b
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '2208db94ce05fb2f82040fa4f2ccdbe6' => __DIR__ . '/..' . '/leeoniya/dump-r/dump_r.php',
    );

    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dump_r\\' => 7,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dump_r\\' => 
        array (
            0 => __DIR__ . '/..' . '/leeoniya/dump-r/src/dump_r',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'Zend_Registry' => 
            array (
                0 => __DIR__ . '/..' . '/zf1/zend-registry/library',
            ),
            'Zend_Exception' => 
            array (
                0 => __DIR__ . '/..' . '/zf1/zend-exception/library',
            ),
        ),
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Cismarty' => __DIR__ . '/..' . '/Myext/Libs/Cismarty.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf316fa36682f9738c646a9622b70eb9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf316fa36682f9738c646a9622b70eb9b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf316fa36682f9738c646a9622b70eb9b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf316fa36682f9738c646a9622b70eb9b::$classMap;

        }, null, ClassLoader::class);
    }
}
