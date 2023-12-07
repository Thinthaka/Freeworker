<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdc92cedfec76c80902f16a625608cd8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdc92cedfec76c80902f16a625608cd8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdc92cedfec76c80902f16a625608cd8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}