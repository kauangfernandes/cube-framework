<?php
    namespace Bootstrap;

    use Bootstrap\Addons\Autoload;

    class Kernel {
        public static function run():array {
            require_once __DIR__ . '/config.php';
            require_once __DIR__ . '/addons/autoload.php';

            return [
                \Bootstrap\Addons\Autoload::run(),
                \Bootstrap\Addons\PhpEnv::run(__DIR_BASE__, '.env'),
            ];
        }
    }
?>