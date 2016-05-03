<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-2
 * Time: 下午10:44
 */


/*
 * call controller updateProduct action
 */
require_once "include.php";
$productController = new ProductsController($smarty);
$productController->updateProduct($_POST['_id'], $_POST['id'], $_POST['sku'],$_POST['name'], $_POST['ean'], $_POST['stock'], $_POST['availability']);