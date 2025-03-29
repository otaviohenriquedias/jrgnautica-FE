<?php
    $autoload = function ($class) {
        include("../../backend-jrbroker/$class.php");
    };
    spl_autoload_register($autoload);

    define('SWETALERT', '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>');

?>