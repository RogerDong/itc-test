<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午10:20
 */

/*
 * For CRUD of products collection
 */
class ProductDao extends Core
{
    /**
     * ProductDao constructor. Call super constructor
     */
    public function __construct()
    {
        parent::__construct("products");
    }

    /**
     * Add products
     * @param $documents
     */
    public function addProducts($documents)
    {
        foreach ($documents as $document)
        {
            try
            {
                $this->collection->insert($document);
            }
            catch (MongoException $e)
            {
                $this->error = $e->getMessage();
            }

        }
    }

    /**
     * Add on product
     * @param $document
     * @return mixed
     */
    public function addOneProduct($document)
    {
        $this->collection->insert($document);
        $addedProduct = $this->collection->findOne($document);
        return $addedProduct['_id']->{'$id'};
    }


    /**
     * Get all products in database
     * @return array|null
     */
    public function getAllProducts()
    {
        $cursor = $this->collection->find();
        $products = array(array());
        $i = 0;
        foreach ($cursor as $key => $document)
        {
            foreach ($document as $key => $value)
            {
                if($key == '_id')
                {
                    $products[$i][$key] = $value->{'$id'};
                }
                else
                {
                    $products[$i][$key] = $value;
                }
            }
            $i++;
        }
        if($i == 0)
        {
            $products = null;
        }
        return $products;
    }

    /**
     * modify one document in Mongodb.
     * @param $where
     * @param $document
     * @return bool
     */
    public function modifyOneEntry($where, $document)
    {
        $update = null;
        try
        {
            $update = $this->collection->update($where, $document);
        }
        catch (MongoCursorException $e)
        {
            $this->error = $e->getMessage();
        }
        return $update;
    }

    /**
     * remove one document in Mongodb
     * @param $id
     */
    public function removeOneEntryByMongoId($id)
    {
        $where = array('_id' => new MongoId($id));
        try
        {
            $this->collection->remove($where);
        }
        catch (MongoException $e)
        {
            $this->error = $e->getMessage();
        }
    }
}