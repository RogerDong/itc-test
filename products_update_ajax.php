<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-2
 * Time: 下午10:44
 */

require_once "include.php";



if($_POST['_id'])
{
    $where = array('_id' => new MongoId($_POST['_id']));
    $document = array(
        'id' => $_POST['id'],
        'sku' => $_POST['sku'],
        'name' => $_POST['name'],
        'ean' => $_POST['ean'],
        'stock' => $_POST['stock'],
        'availability' => $_POST['availability'],
    );
    $productDao = new ProductDao();
    $productDao->modifyOneEntry($where, $document);

}