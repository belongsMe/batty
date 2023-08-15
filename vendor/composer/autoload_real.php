<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit738199b88da4a56d94976375b4a0a824
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

        spl_autoload_register(array('ComposerAutoloaderInit738199b88da4a56d94976375b4a0a824', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit738199b88da4a56d94976375b4a0a824', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit738199b88da4a56d94976375b4a0a824::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
