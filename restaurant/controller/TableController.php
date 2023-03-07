<?php
session_start();
include_once '../util/MySQLUtils.php';
include_once '../model/Table.php';
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['datban'])) {
    datBan();
}
function datBan()
{
    $ngayDat = $_POST['txt_ngayDat'];
    $gioDat = $_POST['txt_gioDat'];
    $soNguoi = $_POST['txt_soNguoi'];
    $userName = $_POST['txt_userName'];
    $node = $_POST['txt_node'];

    $table = new Table($ngayDat, $gioDat, $soNguoi, $userName, $node);
    //var_dump($table);
    $data = $table->insertTable();
    header('location:/restaurant/view/index.php');
    exit;
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
