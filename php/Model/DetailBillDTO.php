<?php
require_once('./Controller/DetailBill.php');
require_once('DataProvider.php');
class DetailBill
{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new DetailBill();
        }

        return self::$_instance;
    }

    function GetDetailBill($id)
    {
        $query = "Select * from DetailBill where id ='$id'";

        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $detailBill = new DetailBill();
            $detailBill->SetId($row["id"])
                ->SetIdBill($row["idBill"])
                ->SetTotalPrice($row["totalPrice"])
                ->SetState($row["State"])
                ->SetDiscount($row["Discount"]);
            return $detailBill;
        } else
            return null;
    }
    function CreateDetailBill($detailBill)
    {
        $id = $detailBill->GetId();
        $idBill = $detailBill->GetIdBill();
        $totalPrice = $detailBill->GetTotalPrice();
        $state = $detailBill->GetState();
        $discount = $detailBill->GetDiscount();

        $query = "Insert into DetailBill (idBill, totalPrice, state,discount) 
         Values('$idBill','$totalPrice','$state','$discount')";
        $result = DataProvider::getInstance()->Execute($query);

        return $result;
    }

    function UpdateDetailBill($detailBill)
    {
        $id = $detailBill->GetId();
        $idBill = $detailBill->GetIdBill();
        $totalPrice = $detailBill->GetTotalPrice();
        $state = $detailBill->GetState();
        $discount = $detailBill->GetDiscount();

        $query = "Update detailBill Set idBill='$idBill',totalPrice='$totalPrice',state = '$state',discount='$discount' where id='$id'";
        $result = DataProvider::getInstance()->Execute($query);

        return $result;
    }
}
