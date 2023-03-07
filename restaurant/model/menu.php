<?php
include_once'../util/MySQLUtils.php';
class Menu{
     private $idmenu;
     private $name; 
     private $image; 
     private $cost;
     private $describe;
     public function __construct($idmenu, $name, $image, $cost, $describe)
     {
        $this->idmenu=$idmenu;
        $this->name=$name;
        $this->image=$image;
        $this->cost=$cost;
        $this->describe=$describe;
     }
     public function getidmenu()
    {
        return $this->idmenu;
    }
    public function setidmenu($idmenu)
    {
        $this->idmenu = $idmenu;

        return $this;
    }
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getimage()
    {
        return $this->image;
    }
    public function setimage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function getcost()
    {
        return $this->cost;
    }
    public function setcost($cost)
    {
        $this->cost = $cost;

        return $this;
    }
    public function getdescribe()
    {
        return $this->describe;
    }
    public function setdescribe($describe)
    {
        $this->describe = $describe;

        return $this;
    }
    public function getAllData(){
        list($data)=NULL;
        $dbCon= new MySQLUtils();
        $query = "SELECT * FROM menu";
        $data = $dbCon->getAllData($query);
        $dbCon->disconnectDB();
        return $data;
    }
}