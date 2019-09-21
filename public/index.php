<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT_PATH',dirname(__DIR__));
define('APP_PATH',ROOT_PATH.DS.'application');

require APP_PATH.DS.'config/constans.php';
require ROOT_PATH.DS.'vendor/autoload.php';

$application = new App\System\Application();



?>