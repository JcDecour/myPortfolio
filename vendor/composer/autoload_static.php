<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17f4c16d4068374d480f2b535b5912dd
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'W\\' => 2,
        ),
        'T' => 
        array (
            'TrueBV\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
            'ReCaptcha\\' => 10,
        ),
        'L' => 
        array (
            'League\\Url\\' => 11,
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'W\\' => 
        array (
            0 => __DIR__ . '/../..' . '/W',
        ),
        'TrueBV\\' => 
        array (
            0 => __DIR__ . '/..' . '/true/punycode/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'League\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/url/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17f4c16d4068374d480f2b535b5912dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17f4c16d4068374d480f2b535b5912dd::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit17f4c16d4068374d480f2b535b5912dd::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit17f4c16d4068374d480f2b535b5912dd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit17f4c16d4068374d480f2b535b5912dd::$classMap;

        }, null, ClassLoader::class);
    }
}
