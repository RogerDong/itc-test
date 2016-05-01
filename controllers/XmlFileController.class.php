<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午3:56
 */
class XmlFileController
{
    private $smarty;
    /**
     * XmlFileController constructor.
     */
    public function __construct($smarty)
    {
        $this->smarty = $smarty;
    }

    function upload(){
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            $this->smarty->display("upload.tpl.html");
        }
        else{
            var_dump($_FILES);
            if ($_FILES["file"]["error"] > 0 || $_FILES["file"]["type"] != "text/xml" )
            {
                echo "Error: " . $_FILES["file"]["error"] . "<br />";
            }
            else
            {
                echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                echo "Type: " . $_FILES["file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                echo "Stored in: " . $_FILES["file"]["tmp_name"];
                $xmlParser = new XmlParser();
                $products = $xmlParser->xmlToProductArray($_FILES['file']['tmp_name']);
                $productDao = new ProductDao();
                $productDao->addEntries($products);
            }
        }

    }
}