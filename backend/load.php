<?php

include_once 'includes/Database.class.php';


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