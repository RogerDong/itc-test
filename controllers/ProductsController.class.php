<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午3:56
 */
class ProductsController
{
    private $smarty;

    /**
     * XmlFileController constructor.
     * @param $smarty
     */
    public function __construct($smarty)
    {
        $this->smarty = $smarty;
    }

    /**
     *
     */
    function upload()
    {
        $message = "";
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $message = "";
            if ($_FILES["file"]["error"] > 0 )
            {
                $message = "Error: " . $_FILES["file"]["error"];
            }
            elseif ( $_FILES["file"]["type"] != "text/xml" ){
                $message = "File must be XML format";
            }
            else
            {
                $xmlParser = new XmlParser();
                $products = $xmlParser->xmlToProductArray($_FILES['file']['tmp_name']);
                $productDao = new ProductDao();
                $productDao->addProducts($products);
            }
        }
        $productDao = new ProductDao();
        $products = $productDao->getAllProducts();
        $this->smarty->assign("products", $products);
        $this->smarty->assign("message", $message);
        $this->smarty->display("upload.tpl.html");
    }
}