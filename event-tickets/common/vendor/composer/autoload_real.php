<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9edc7eaf3ea1058acb5a0271a3dba910
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit9edc7eaf3ea1058acb5a0271a3dba910', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9edc7eaf3ea1058acb5a0271a3dba910', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9edc7eaf3ea1058acb5a0271a3dba910::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
