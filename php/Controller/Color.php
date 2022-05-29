<?php

class Color{
    private $id;
    private $color;
    private $idProduct;

    function SetId($id){
        $this->id = $id;
        return $this;
    }
    function GetId(){
        return $this->id;
    }

    function SetColor($color) {
        $this->color = $color;
        return $this;
    }
    function GetColor(){
        return $this->color;
    }

    function SetIdProduct( $idProduct ){
        $this->idProduct = $idProduct;
        return $this;
    }
    function GetIdProduct(){
        return $this->idProduct;
    }
}