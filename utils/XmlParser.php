<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午4:23
 */

/*
 * Util for XML file parser
 */
class XmlParser
{
    /**
     * parse xml file to array
     * @param $filename
     * @return array
     */
    function xmlToProductArray($filename){
        $xml = simplexml_load_file($filename);

        $products = array(array());
        $i = 0;
        foreach ($xml as $item1){
            foreach ($item1 as $item2){
                $products[$i][$item2->getName()] = (string)$item2;
            }
            $i++;
        }
        return $products;
    }
}