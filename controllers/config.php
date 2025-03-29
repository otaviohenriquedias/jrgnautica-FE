<?php
    $autoload = function ($class) {
        include("../../../backend-jrbroker/$class.php");
    };
    spl_autoload_register($autoload);
?>