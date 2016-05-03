<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午3:59
 */


/*
 * include all needed files
 */
require_once "./inc/Config.class.php";
require_once "./inc/ini.php";
require_once "./utils/XmlParser.php";

$files = glob('./dao/*.{php}', GLOB_BRACE);
foreach($files as $file) {
    require($file);
}
$files = glob('./controllers/*.{php}', GLOB_BRACE);
foreach($files as $file) {
    require($file);
}