<?php

class ProductInBill{
    private $id;
    private $idProduct;
    private $count;
    private $idEvalute;
    
    function SetId( $id ){
        $this->id = $id;
        return $this;
    }
    
    function SetIdProduct( $idProduct ){
        $this->idProduct = $idProduct;
        return $this;
    }
    function SetCount( $count ){
        $this->count = $count;
        return $this;
    }
    function SetIdEvalute( $idEvalute ){
        $this->idEvalute = $idEvalute;
        return $this;
    }
    function GetId(){
        return $this->id;
    }
    function GetIdProduct()
    {
        return $this->idProduct;
    }
    function GetCount(){
        return $this->count;
    }
    function GetIdEvalute(){
        return $this->idEvalute;
    }
}