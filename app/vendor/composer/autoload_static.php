<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85fc4db6970ca8f710af1509c6272c57
{
    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit85fc4db6970ca8f710af1509c6272c57::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
