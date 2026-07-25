<?php

namespace Bootstrap\Addons;

use \stdClass;

class Autoload
{

    public static array $namespaces = [];

    public static function run():void {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }


    private static function autoload(string $classNameSpace = "")
    {
        try {
            $path = strtolower($classNameSpace);
            $path = str_ireplace("\\", "/", $path);
            $file = __DIR_BASE__ . '/' . str_replace('\\', '/', $path) . '.php';

            if (file_exists($file)) {
                return require_once $file;
            }
        } catch (\Throwable $th) {
            return print "Error: " . $th->getMessage();
        }
    }

    public static function registerNamespace(string $namespace, string $path): string
    {
        return self::$namespaces[$namespace] = $path;
    }
}