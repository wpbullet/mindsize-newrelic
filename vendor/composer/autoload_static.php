<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7402ef1b25063d191c8cd5aa573544bd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Mindsize\\NewRelic\\APM' => __DIR__ . '/../..' . '/includes/class-mindsize-nr-apm.php',
        'Mindsize\\NewRelic\\Browser' => __DIR__ . '/../..' . '/includes/class-mindsize-nr-browser.php',
        'Mindsize\\NewRelic\\Plugin' => __DIR__ . '/../..' . '/includes/class-mindsize-nr.php',
        'Mindsize\\NewRelic\\Plugin_Admin' => __DIR__ . '/../..' . '/includes/class-mindsize-nr-admin.php',
        'Mindsize\\NewRelic\\Plugin_Factory' => __DIR__ . '/../..' . '/includes/class-mindsize-nr-plugin-factory.php',
        'Mindsize\\NewRelic\\Plugin_Helper' => __DIR__ . '/../..' . '/includes/class-mindsize-nr-helper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7402ef1b25063d191c8cd5aa573544bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7402ef1b25063d191c8cd5aa573544bd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7402ef1b25063d191c8cd5aa573544bd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7402ef1b25063d191c8cd5aa573544bd::$classMap;

        }, null, ClassLoader::class);
    }
}
