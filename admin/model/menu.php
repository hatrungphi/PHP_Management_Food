<?php
include_once '../util/MySQLUtils.php';
class Menu{
     private $idmenu;
     private $name; 
     private $image; 
     private $cost;
     private $describe;
     private $amount_menu;
     public function __construct($idmenu, $name, $image, $cost, $describe, $amount_menu)
     {
        $this->idmenu=$idmenu;
        $this->name=$name;
        $this->image=$image;
        $this->cost=$cost;
        $this->describe=$describe;
        $this->amount_menu=$amount_menu;
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
    public function getamount_menu()
    {
        return $this->amount_menu;
    }
    public function setamount_menu($amount_menu)
    {
        $this->amount_menu = $amount_menu;

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
    public function insertData(){
        $dbCon= new MySQLUtils();
        $data =[
            'name' => $this->name,
            'image' => $this->image,
            'cost' => $this->cost,
            'describe' => $this->describe,
            'amount_menu' => $this->amount_menu,
        ];
        $query = "INSERT INTO `menu` (`name`, `image`, `cost`, `describe`, `amount_menu`) VALUES ( :name, :image, :cost, :describe, :amount_menu);";
        $dbCon->insertData($query,$data);
        $dbCon->disconnectDB();
    }
   public function deleteData($idmenu)
{
    $dbCon= new MySQLUtils();
    $query = "DELETE FROM `menu` WHERE idmenu=$idmenu";
    $dbCon->deleteData($query);
    $dbCon->disconnectDB();
}
public function updateData($idmenu){
    $dbCon= new MySQLUtils();
    $data =[
        'name' => $this->name,
        'image' => $this->image,
        'describe' => $this->describe,  
    ];
    var_dump($data);
    $query="UPDATE `menu` SET `name`='$this->name',`image`='$this->image',`cost`=$this->cost,`describe`='$this->describe',`amount_menu`=$this->amount_menu WHERE idmenu=$idmenu";
      $dbCon->updateData($query,$data);
      $dbCon->disconnectDB();

}

public function getData($maSP){
    $sp= new menu($maSP,null,null,null,null,null);
    $dbCon= new MySQLUtils();
    $query = "SELECT * FROM `menu` WHERE idmenu='$maSP'";
    $sp = $dbCon->getDataEntity($query);
    $dbCon->disconnectDB();
    return $sp;
}
}