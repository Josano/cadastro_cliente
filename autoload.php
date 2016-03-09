<?php

// define('CLASS_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
// set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function($className) {
    $path = str_replace('\\', '/', $className);
    // $file = CLASS_DIR . $path . '.php';
    $file =  $path . '.php';

    if (file_exists($file)) {
        require_once($file);
    } 
    // else {
    //     throw new \ErrorException("Could not load class {$className}. File not found: {$file}");
    //     die();
    // }
});