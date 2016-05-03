<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午2:36
 */

require_once "include.php";


$productDao = new ProductDao();

var_dump($productDao->addOneProduct(array()));


//$smarty->assign("name","zhangsan");
//
//$array = array("zhangsan","lisi","wangwu");
//
//$smarty->assign("names",$array);
//
//$smarty->display("test.tpl.html");


