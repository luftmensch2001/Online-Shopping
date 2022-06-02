<?php

class ProductInCart{
    private $id;
    private $idProduct;
    private $idAccount;
    private $count;
    private $Color;
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
    function SetIdAccount( $idAccount ){
        $this->idAccount = $idAccount;
        return $this;
    }
    function SetColor( $color ){
        $this->color = $color;
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
    function GetColor()
    {
        return $this->color;
    }
    function GetIdAccount(){
        return $this->idAccount;
    }
}