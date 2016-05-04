<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午3:56
 *
 * Controller to generate the view
 */
class ProductsController
{
    private $smarty;

    /**
     * Pass smarty lib variable
     * XmlFileController constructor.
     * @param $smarty
     */
    public function __construct($smarty)
    {
        $this->smarty = $smarty;
    }

    /**
     *Show main page and get upload file
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
            elseif ( $_FILES["file"]["type"] != "text/xml" )
            {
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

    /**
     *Get the request for adding a product
     */
    public function addProduct()
    {
        $productDao = new ProductDao();
        $_id = $productDao->addOneProduct(array());
        echo json_encode($_id);
    }

    /**
     * Delete one product based on Mongodb ID
     * @param $productId
     */
    public function deleteProduct($productId)
    {
        if($productId)
        {
            $productDao = new ProductDao();
            $productDao->removeOneEntryByMongoId($productId);
        }
    }

    /**
     * Update product selected by MongoId and update
     * @param $productId
     * @param $id
     * @param $sku
     * @param $name
     * @param $ean
     * @param $stock
     * @param $availability
     */
    public function updateProduct($productId, $id, $sku, $name, $ean, $stock, $availability)
    {
        if($productId)
        {
            $where = array('_id' => new MongoId($productId));
            $document = array(
                'id' => $id,
                'sku' => $sku,
                'name' => $name,
                'ean' => $ean,
                'stock' => $stock,
                'availability' => $availability,
            );
            $productDao = new ProductDao();
            $productDao->modifyOneEntry($where, $document);

        }
    }
}