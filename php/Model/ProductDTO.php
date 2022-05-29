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
                ->SetDecribe($row["decribe"]);
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
        //$countStar = $product->GetCountStar();

        //$query = "Insert Into Product(nameProduct, idAccount, price, countSold,countAvailable,decribe,countStar)
        //values('$nameProduct','$idAccount','$price','$countSold','$countAvailable','$decribe','$countStar')";
        $query = "Insert Into Product(nameProduct, idAccount, price,decribe)  
        values('$nameProduct','$idAccount','$price','$decribe')";
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

        $query = "Update Product Set 
        'nameProduct' = '$nameProduct',
        'idAccount' = '$idAccount',
        'price' = '$price',
        'countSold' = '$countSold',
        'countAvailable' = '$countAvailable',
        'decribe' = '$decribe' 
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
}
