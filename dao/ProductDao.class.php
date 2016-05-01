<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午10:20
 */
class ProductDao extends Core
{
    public function __construct()
    {
        parent::__construct("products");
    }
    public function addEntries($documents){

        var_dump($documents);
        foreach ($documents as $document){
            $this->collection->insert($document);
        }
    }
}