<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-2
 * Time: 下午11:35
 */
/*
 * call controller deleteProduct action
 */
require_once "include.php";

$productController = new ProductsController($smarty);
$productController->deleteProduct($_POST['_id']);