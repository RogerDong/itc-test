<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-2
 * Time: 下午11:35
 */

if($_POST['_id'])
{
    $productDao = new ProductDao();
    $productDao->removeOneEntryByMongoId($_POST['_id']);
}