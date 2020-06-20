<?php
//this works only if we are in the root directory
//spl_autoload_register('autoload');
//
//function autoload($className)
//{
//    $path = 'classes/';
//    $ext = '.php';
//    $fullpath = $path . $className . $ext;
//
//    if(!file_exists($fullpath))
//    {
//        return false;
//    }
//
//    include_once $fullpath;
//}

spl_autoload_register('autoload');

function autoload($className)
{
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') !== false)
    {
        $path = '../classes/';
    }else
        {
             $path = 'classes/';
        }
    $ext = '.php';
    require_once($path . $className . $ext);
}