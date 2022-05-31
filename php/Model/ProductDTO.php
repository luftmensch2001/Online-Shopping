<?php
require_once('./Controller/Product.php');
require_once('DataProvider.php');

class ProductDTO
{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new ProductDTO();
        }

        return self::$_instance;
    }

    public function GetProduct($id)
    {
        $query = "SELECT * FROM Product Where id = '$id'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $Product = new Product();
            $Product->SetId($row["id"])
                ->SetNameProduct($row["nameProduct"])
                ->SetIdAccount($row["idAccount"])
                ->SetPrice($row["price"])
                ->SetCountSold($row["countSold"])
                ->SetCountAvailable($row["countAvailable"])
                ->SetDecribe($row["decribe"])
                ->SetType($row["type"]);
            return $Product;
        } else
            return null;
    }
    public function CreateProduct($product)
    {
        $nameProduct = $product->GetNameProduct();
        $idAccount = $product->GetIdAccount();
        $price = $product->GetPrice();
        //$countSold = $product->GetCountSold();
        // $countAvailable = $product->GetCountAvailable();
        $decribe = $product->GetDecribe();
        $type = $product->GetType();
        //$countStar = $product->GetCountStar();

        //$query = "Insert Into Product(nameProduct, idAccount, price, countSold,countAvailable,decribe,countStar)
        //values('$nameProduct','$idAccount','$price','$countSold','$countAvailable','$decribe','$countStar')";
        $query = "Insert Into Product(nameProduct, idAccount, price,decribe,type)  
        values('$nameProduct','$idAccount','$price','$decribe','$type')";
        $result = DataProvider::getInstance()->Execute($query);
        return $result;
    }
    public function UpdateProduct($product)
    {
        $id = $product->GetId();
        $nameProduct = $product->GetNameProduct();
        $idAccount = $product->GetIdAccount();
        $price = $product->GetPrice();
        $countSold = $product->GetCountSold();
        $countAvailable = $product->GetCountAvailable();
        $decribe = $product->GetDecribe();
        $type = $product->GetType();

        $query = "Update Product Set 
        'nameProduct' = '$nameProduct',
        'idAccount' = '$idAccount',
        'price' = '$price',
        'countSold' = '$countSold',
        'countAvailable' = '$countAvailable',
        'decribe' = '$decribe',
        'type' = '$type'
        Where 'id' = '$id'";

        $result = DataProvider::getInstance()->Execute($query);
        return $result;
    }
    public function GetMaxId()
    {
        $query = "SELECT MAX(id) as MAXID FROM Product";
        $result = DataProvider::getInstance()->Execute($query);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            return $row["MAXID"];
        }
        return -1;
    }
    public function GetListProduct($idAccount)
    {
        $query = "SELECT * FROM Product Where idaccount = '$idAccount'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);


        $listProduct = array();
        while ($row = $result->fetch_assoc()) {
            $product = new Product();
            $product->SetId($row["id"])
                ->SetNameProduct($row["nameProduct"])
                ->SetIdAccount($row["idAccount"])
                ->SetPrice($row["price"])
                ->SetCountSold($row["countSold"])
                ->SetCountAvailable($row["countAvailable"])
                ->SetDecribe($row["decribe"])
                ->SetType($row["type"]);
            array_push($listProduct,$product);
        }
        return $listProduct;
    }
    public function GetListProductBestSeller($idAccount)
    {
        $query = "SELECT * FROM Product ORDER BY countSold DESC";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);


        $listProduct = array();
        while ($row = $result->fetch_assoc()) {
            $product = new Product();
            $product->SetId($row["id"])
                ->SetNameProduct($row["nameProduct"])
                ->SetIdAccount($row["idAccount"])
                ->SetPrice($row["price"])
                ->SetCountSold($row["countSold"])
                ->SetCountAvailable($row["countAvailable"])
                ->SetDecribe($row["decribe"])
                ->SetType($row["type"]);
            array_push($listProduct,$product);
        }
        return $listProduct;
    }
    public function GetListProductTopStar($idAccount)
    {
        $query = "SELECT * FROM Product ORDER BY countStar DESC";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);


        $listProduct = array();
        while ($row = $result->fetch_assoc()) {
            $product = new Product();
            $product->SetId($row["id"])
                ->SetNameProduct($row["nameProduct"])
                ->SetIdAccount($row["idAccount"])
                ->SetPrice($row["price"])
                ->SetCountSold($row["countSold"])
                ->SetCountAvailable($row["countAvailable"])
                ->SetDecribe($row["decribe"])
                ->SetType($row["type"]);
            array_push($listProduct,$product);
        }
        return $listProduct;
    }
}
