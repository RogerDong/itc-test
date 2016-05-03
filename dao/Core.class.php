<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午9:20
 */

/*
 * Base class to connect to MongoDB
 */
class Core
{

    private $mongoClient;
    private $db;
    protected $collection;
    protected $error;

    /**
     * Core constructor. Connect to MongoDB
     * @param $collectionName
     */
    public function __construct($collectionName)
    {
        $dbName = Config::$DBName;
        try
        {
            $this->mongoClient = new MongoClient(Config::$DBServer);
            $this->db = $this->mongoClient->$dbName;
            $this->collection = $this->db->$collectionName;
        }
        catch (MongoConnectionException $e)
        {
            $this->error = $e->getMessage();
        }


    }
}
