<?php
session_start();
include_once '../util/MySQLUtils.php';
include_once '../model/user.php';
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dangky'])) {
    dangKy();
}
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dangnhap'])) {
    dangnhap();
}
function dangKy()
{
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];
    $email = $_POST['txt_email'];
    $password = md5($password);

    $users = new user($username, $password, $email);
    var_dump($users);
    if ($users->getUser($username, $password, $email) != null) {
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $data = $users->insertUser();
    header('location:/restaurant/view/index.php');
    exit;
}

function dangnhap()
{
    $username = $_POST['txt_username'];
    $password = md5($_POST['txt_password']);
    $dbCon = new MySQLUtils();
    $query = "SELECT userName,passWord FROM user WHERE userName='$username' && passWord='$password'";
    if ($dbCon->getData($query)) {
        $_SESSION["username"] = $username;
        header('location:/restaurant/view/index.php');
    } else {
        header('location:/restaurant/view/index.php');
        exit;
    }
}
function getAllUser()
{
    $user = new user("", "", "", "");
    $dsKH = array($user);
    $dsKH = $user->getAllData();
    foreach ($dsKH as $value) {
        foreach ($value as $KH)
            echo "$KH : ";
    }
}
        // var_dump($arrUsers);
        // $user2 = new user($txt_username, $txt_password, $txt_email);
        // $user2->insertUser();
        // $arrUsers = array();
        // array_push($arrUsers, $user2);
        // 
        // var_dump($arrUsers);
        // $dbconn->insertData($txt_email, $txt_username, $txt_password);
        // $dbconn->disconnectDB();

        // $isUser = isUserExit($txt_email, $arrUsers);
        // if ($isUser) {
        //     echo "da co user";
        //     exit();
        // // }
        // function isUserExit($email, $arrUsers = array())
        // {
        //     $isExist = false;
        //     foreach ($arrUsers as $user) {
        //         if ($user->getEmail() == $email) {
        //             $isExist = true;
        //         }
        //     }
        //     return $isExist;
        // }
