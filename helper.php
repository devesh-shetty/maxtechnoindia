<?php

function build_paths() {
    if (!defined('RDIR')) {
        define('RDIR', dirname(__FILE__));
        define('PARENTDIR', dirname(RDIR));
    }

    if (@$_SERVER["HTTPS"] == "on") {
        $protocol = "https://";
    } else {
        $protocol = "http://";
    }

    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];


    return str_replace("index.php", "", $url);
}

