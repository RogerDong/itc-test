<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午2:36
 */

require_once "ini.php";

$smarty->assign("name","zhangsan");

$array = array("zhangsan","lisi","wangwu");

$smarty->assign("names",$array);

$smarty->display("test.tpl.html");


