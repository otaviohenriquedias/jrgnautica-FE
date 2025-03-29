<?php
    $autoload = function ($class) {
        include("../../../models_2/$class.php");
    };
    spl_autoload_register($autoload);
?>