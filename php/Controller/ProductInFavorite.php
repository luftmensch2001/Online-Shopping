<?php

class ProductInFavorite{
    private $id;
    private $idProduct;
    private $count;
    function SetId( $id ){
        $this->id = $id;
        return $this;
    }
    function SetIdProduct( $idProduct ){
        $this->idProduct = $idProduct;
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
}