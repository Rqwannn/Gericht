<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2399b49ce68e44614d9ae9465010509c
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2399b49ce68e44614d9ae9465010509c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2399b49ce68e44614d9ae9465010509c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
