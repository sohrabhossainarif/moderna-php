<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c83b1f02ab63f705247305e5e5590a1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c83b1f02ab63f705247305e5e5590a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c83b1f02ab63f705247305e5e5590a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c83b1f02ab63f705247305e5e5590a1::$classMap;

        }, null, ClassLoader::class);
    }
}