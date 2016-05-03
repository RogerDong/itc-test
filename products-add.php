<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-3
 * Time: 上午10:38
 */

/*
 * call controller addProduct action
 */
require_once "include.php";
$productController = new ProductsController($smarty);
$productController->addProduct();