<?php
//Start Session
session_start();

//Include Configuration
require_once('config/config.php');

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

//Autoload Classes avoid repetitive "includes" or "require"
function my_autoload($class_name){
    require_once('libraries/' . $class_name . '.php');
};
spl_autoload_register("my_autoload");//to replace "__autoload" deprecated magic function