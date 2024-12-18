<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabc704b282a76268a3554fa71faa24c1
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '7701cf21d42f47f5902f91dade167cc7' => __DIR__ . '/../..' . '/src/Controller.php',
        'da63c76053d02ae00ef630cc47475135' => __DIR__ . '/../..' . '/src/Game.php',
        '43ef52629d6baffcc39602acdb4dd368' => __DIR__ . '/../..' . '/src/View.php',
        'fece0ccec02aabb51bd56fcdbe04b925' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kaymka\\Minesweeper\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kaymka\\Minesweeper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$classMap;

        }, null, ClassLoader::class);
    }
}
