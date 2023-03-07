<?php
class MySQLUtils
{

  private $servername;
  private $username;
  private $password;
  private $dbname;

  private static $conn;

  public function __construct()
  {
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "doanphp";
    if (self::$conn == NULL) {
     // echo "Tao kết nối!<br>";
      $this->connectDB();
    } else {
     // echo "Tao kết nối củ!<br>";
      return self::$conn;
    }
  }

  public function __destruct()
  {
    $this->servername = "";
    $this->username = "";
    $this->password = "";
    $this->dbname = "";
    self::$conn = NUll;
  }

  public function connectDB()
  {

    try {
      self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      // set the PDO error mode to exception
      self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return self::$conn;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function disconnectDB()
  {
  //  echo "Đóng kết nối!<br>";
    self::$conn = NUll;
  }

  public function insertData($query, $param = array())
  {
    $stmt = self::$conn->prepare($query);
    $stmt->execute($param);
  }

  public function getAllData($query)
  {
    $stmt = self::$conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getData($query)
  {
    $stmt = self::$conn->prepare($query);
    $stmt->execute();
    return $stmt->rowCount();
  }

  public function updateData($query,$param=array())
  {
    $stmt = self::$conn->prepare($query);
    $stmt->execute($param);
    return $stmt->rowCount();
  }
  public function deleteData($query,$param=array())
  {
    $stmt = self::$conn->prepare($query);
    $stmt->execute($param);
    return $stmt->rowCount();
  }
}
