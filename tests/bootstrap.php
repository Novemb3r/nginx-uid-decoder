<?php
set_time_limit(0);
restore_error_handler();

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__FILE__, 2) . DIRECTORY_SEPARATOR);
}

require_once ROOT_PATH . 'vendor/autoload.php';

set_include_path(
    implode(
        PATH_SEPARATOR,
        [
            ROOT_PATH,
            get_include_path()
        ]
    )
);
