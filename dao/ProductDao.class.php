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
    public function addProducts($documents){
        foreach ($documents as $document){
            $this->collection->insert($document);
        }
    }
    public function getAllProducts(){
        $cursor = $this->collection->find();
        $products = array(array());
        $i = 0;
        foreach ($cursor as $key => $document){

            foreach ($document as $key => $value){
                $products[$i][$key] = $value;
            }
            $i++;
        }
        return $products;
    }
}