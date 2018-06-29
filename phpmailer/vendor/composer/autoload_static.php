<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e59ca6c7bace06d0ed0915cc69f3971
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

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e59ca6c7bace06d0ed0915cc69f3971::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e59ca6c7bace06d0ed0915cc69f3971::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0e59ca6c7bace06d0ed0915cc69f3971::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
