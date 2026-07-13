<?php
    if (file_exists(dirname(__DIR__)."/bootstrap/kernel.php")) {
        require_once dirname(__DIR__)."/bootstrap/kernel.php";
        Bootstrap\Kernel::run();
    }
?>