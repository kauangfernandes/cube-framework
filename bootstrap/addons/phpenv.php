<?php
    namespace Bootstrap\Addons;

    class PhpEnv {

        public static function run(string|null $path = null, string|null $fileName = null):void {
            $fullPath = $path . '/' . $fileName;

            if (file_exists($fullPath)) {
                try {
                    $env = parse_ini_file($fullPath);
                    foreach ($env as $key => $value) {
                        putenv("$key=$value");
                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }

            } else {
                print "Error: The .env file was not found at the specified path.";
            }
        }
    }
?>