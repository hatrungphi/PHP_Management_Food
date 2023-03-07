<?php
include_once '../util/MySQLUtils.php';
class Table{

    private $ngayDat;
    private $gioDat;
    private $soNguoi;
    private $userName;
    private $node;

    



    /**
     * Get the value of ngayDat
     */ 
    public function getNgayDat()
    {
        return $this->ngayDat;
    }

    /**
     * Set the value of ngayDat
     *
     * @return  self
     */ 
    public function setNgayDat($ngayDat)
    {
        $this->ngayDat = $ngayDat;

        return $this;
    }

    /**
     * Get the value of gioDat
     */ 
    public function getGioDat()
    {
        return $this->gioDat;
    }

    /**
     * Set the value of gioDat
     *
     * @return  self
     */ 
    public function setGioDat($gioDat)
    {
        $this->gioDat = $gioDat;

        return $this;
    }

    /**
     * Get the value of soNguoi
     */ 
    public function getSoNguoi()
    {
        return $this->soNguoi;
    }

    /**
     * Set the value of soNguoi
     *
     * @return  self
     */ 
    public function setSoNguoi($soNguoi)
    {
        $this->soNguoi = $soNguoi;

        return $this;
    }

    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of node
     */ 
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Set the value of node
     *
     * @return  self
     */ 
    public function setNode($node)
    {
        $this->node = $node;

        return $this;
    }
    public function __construct($ngayDat,$gioDat,$soNguoi,$userName,$node)
    {
        $this->ngayDat = $ngayDat;
        $this->gioDat = $gioDat;
        $this->soNguoi = $soNguoi;
        $this->userName = $userName;
        $this->node = $node;
    }


    public function insertTable()
    {
        $dbCon = new MySqlUtils();
        $data = [
            'ngayDat' => $this->ngayDat,
            'gioDat' => $this->gioDat,
            'soNguoi' => $this->soNguoi,
            'userName' =>$this->userName,
            'node'=>$this->node
        ];
        $query = "INSERT INTO `booktable` (`NgayDat`, `GioDat`, `SoNguoi`, `UserName`, `Node`) VALUES (:ngayDat,:gioDat,:soNguoi,:userName,:node)";
        $dbCon->insertData($query, $data);
        $dbCon->disconnectDB();
    }
    public function getTable($ngayDat,$userName)
    {
        $dbCon = new MySQLUtils();
        $query = "SELECT * FROM `booktable` WHERE NgayDat='$ngayDat' or UserName='$userName'";
        $dbCon->getData($query);
        $dbCon->disconnectDB();
    }
    public function getAllTable(){
        list($data)=NULL;
        $dbCon= new MySQLUtils();
        $query = "SELECT * FROM booktable";
        $data = $dbCon->getAllData($query);
        $dbCon->disconnectDB();
        return $data;
    }
}
