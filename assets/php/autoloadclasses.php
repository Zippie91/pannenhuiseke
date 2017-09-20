<?php
spl_autoload_register(function ($class_name) {
    include("assets/php/class/" . $class_name . '.class.php');
});
?>