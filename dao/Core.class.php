<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午9:20
 */
class Core
{

    private $mongoClient;
    protected $db;
    protected $collection;
    /**
     * Core constructor.
     */
    public function __construct($collectionName)
    {
        $dbName = Config::$DBName;
        $this->mongoClient = new MongoClient();
        $this->db = $this->mongoClient->$dbName;
        $this->collection = $this->db->$collectionName;

    }
}
