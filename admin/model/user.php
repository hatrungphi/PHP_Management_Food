<?php
include_once '../util/MySQLUtils.php';
class user
{
    private $Id;
    private $username;
    private $password;
    private $email;


    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    // public function __construct($username, $password, $email)
    // {
    //     $this->username = $username;
    //     $this->password = $password;
    //     $this->email = $email;
    // }
    // public function showName()
    // {
    //     echo $this->getUsername() . "" . $this->getPassword();
    // }
    public function __construct($Id,$username, $password, $email)
    {
        $this->Id=$Id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }


    public function insertUser()
    {
        $dbCon = new MySqlUtils();
        $data = [
            'username' => $this->username,
            'password' => $this->password,
            'email' => $this->email,
        ];
        $query = "INSERT INTO `user` (`userName`, `passWord`, `email`) VALUES(:username,:password ,:email)";
        $dbCon->insertData($query, $data);
        $dbCon->disconnectDB();
    }
    public function getUser($username, $email)
    {
        $dbCon = new MySQLUtils();
        $query = "SELECT * FROM `user` WHERE userName='$username' or email='$email'";
        $dbCon->getData($query);
        $dbCon->disconnectDB();
    }

    public function getAllData()
    {
        list($data) = NULL;
        $dbCon = new MySQLUtils();
        $query = "SELECT * FROM `user`";
        $data = $dbCon->getAllData($query);
        $dbCon->disconnectDB();
        return $data;
    }
    public function deleteUser($Id)
    {
        $dbCon= new MySQLUtils();
        $query = "DELETE FROM user WHERE Id=$Id";
        $dbCon->deleteData($query);
        $dbCon->disconnectDB();
    }

    /**
     * Get the value of Id
     */ 
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     *
     * @return  self
     */ 
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }
}
