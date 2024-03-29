<?php
require "config.php";
require "function.php";
require "database.php";
require "controller.php";
require "model.php";
require "app.php";


spl_autoload_register(function($class_name){
    require "../private/models/" . ucfirst($class_name) . '.php';
});

// spl_autoload_register(function ($class_name) {
//     $class_path = str_replace("\\", DIRECTORY_SEPARATOR, $class_name);
//     $class_path = "../private/" . $class_path . '.php';

//     if (file_exists($class_path)) {
//         require_once $class_path;
//     } else {
//         echo "Class file not found: $class_path";
//     }
// });
