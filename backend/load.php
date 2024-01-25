<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/Intern-Task/backend/libs/Database.class.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Intern-Task/backend/libs/User.class.php';

$_site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Intern-Task/db_config.json');

function get_config($key, $default = null){
    global $_site_config; 
    $array = json_decode($_site_config, true);
    if(isset($array[$key])){
        return $array[$key];
    }else{
        return $default;
    }
}

?>