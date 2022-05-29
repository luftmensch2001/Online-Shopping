<?php
require_once('./Controller/Bill.php');
require_once('DataProvider.php');
class BillDTO
{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new BillDTO();
        }

        return self::$_instance;
    }

    function GetBill($id)
    {
        $query = "SELECT * FROM Bill Where id = '$id'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $bill = new Bill();
            $bill->SetId($row["id"])
                ->SetIdAccount($row["idAccount"])
                ->SetIdDetailBill($row["idDetailBill"])
                ->SetTime($row["time"])
                ->SetCode($row["code"]);
            return $bill;
        } else
            return null;
    }
    function CreateBill($bill)
    {
        $id = $bill->GetId();
        $idAccount = $bill->GetIdAccount();
        $idDetailBill = $bill->GetIdDetailBill();
        $time = $bill->GetTime();
        $code = $bill->GetCode();

        $query = "INSERT INTO bill (idAccount, idDetailBill, 'time', code)
         values('$idAccount','$idDetailBill',$time,'$code')";

        $result = DataProvider::getInstance()->Execute($query);
        return $result;
    }
    function UpdateBill($bill)
    {
        $id = $bill->GetId();
        $idAccount = $bill->GetIdAccount();
        $idDetailBill = $bill->GetIdDetailBill();
        $time = $bill->GetTime();
        $code = $bill->GetCode();

        $query ="UPDATE bill SET idAccount='$idAccount', idDetailBill='$idDetailBill', time='$time', code='$code'";

        
        $result = DataProvider::getInstance()->Execute($query);
        return $result;
    }
}
