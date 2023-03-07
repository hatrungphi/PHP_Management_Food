<?php
// sesion_start();
include_once '../util/MySQLUtils.php';
include_once '../model/menu.php';
$menu = new menu (null, null, null, null, null, null);
$dsmenu=$menu->getAllData();
// hien menu
//if($_SERVER['REQUEST_METHOD']=="GET" and isset($_GET['idmenu']))
//{
//$menu=
//}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['add'])) {
    insertMenu();
  }
  if ($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['id'])) {
    deleteData();
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['update'])) {

    updateData();
  }
  if ($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['idU'])) {
    $menu = thongTinSanPham();
  }
  


function insertMenu()
{
  $img_name = $_FILES['image']['name'];
  $img_size = $_FILES['image']['size'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];


  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
  $img_ex_lc = strtolower($img_ex);

  $allowed_exs = array("jpg", "jpeg", "png");
  $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
  $img_upload_path = 'uploads/' . $new_img_name;
  move_uploaded_file($tmp_name, $img_upload_path);

  $name = $_POST['name'];
  $cost = $_POST['cost'];
  $describe = $_POST['describe'];
  $amount_menu = $_POST['amount_menu'];
  $menu = new menu(null, $name, $new_img_name, $cost, $describe, $amount_menu);
  $data = $menu->insertData();
  header('location:/admin/view/table.php');
  exit;
}

function deleteData()
{
$idmenu=$_GET['id'];
//var_dump($idmenu);
$menu = new menu(null, null, null, null, null, null);
 $menu->deleteData($idmenu);
header('location:/admin/view/table.php');
}

function thongTinSanPham()
{
  $maSP =  $_GET['idU'];
  $menu1 = new menu (null, null, null, null, null, null);
  $menu2 = new menu (null, null, null, null, null, null);
  $menu1 = $menu2->getData($maSP);
  return $menu1;
}

function updateData()
{

  $img_name = $_FILES['image']['name'];
  $img_size = $_FILES['image']['size'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];



  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
  $img_ex_lc = strtolower($img_ex);

  $allowed_exs = array("jpg", "jpeg", "png");
  $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
  $img_upload_path = 'uploads/' . $new_img_name;
  move_uploaded_file($tmp_name, $img_upload_path);

  $idmenu = $_POST['idmenu'];
  $name = $_POST['name'];
  $cost = $_POST['cost'];
  $describe = $_POST['describe'];
  $amount_menu = $_POST['amount_menu'];
  $menu = new menu(null, $name, $new_img_name, $cost, $describe, $amount_menu);
  $data = $menu->updateData($idmenu);
  header('location:/admin/view/table.php');
  exit;
}


function apearList($menu)
{

  try {

    if ($menu["idmenu"] != null) {
?>
 <form action="../controller/menuController.php" method="POST" enctype="multipart/form-data">
                   <div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your Menu</h6>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="idmenu"
                                    placeholder="Cost" value="<?php echo $menu["idmenu"] ?>" readonly>
                                <label for="floatingPassword">Idmenu</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="name" value="<?php echo $menu["name"] ?>" required>
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="cost"
                                    placeholder="Cost" value="<?php echo $menu["cost"] ?>" required>
                                <label for="floatingPassword">Cost</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" value="<?php echo $menu["amount_menu"] ?>" name="amount_menu"
                                    placeholder="Amuont_menu" required>
                                <label for="floatingPassword">Amount menu</label>
                            </div>
                            <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" value="<?php echo $menu["describe"] ?>"	 name="describe"
                                    placeholder="Cost" required>
                                <label for="floatingTextarea">Describe</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Add image</label>
                                <input class="form-control bg-dark" type="file" id="formFileMultiple"  name="image" multiple required>
                            </div>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>
                    </div>
        </form>
    <?php
    }
  } catch (\Throwable $th) {
    ?>

<form action="../controller/menuController.php" method="POST" enctype="multipart/form-data">
                   <div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your Menu</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="name" required>
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="cost"
                                    placeholder="Cost" required>
                                <label for="floatingPassword">Cost</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="amount_menu"
                                    placeholder="Amuont_menu" required>
                                <label for="floatingPassword">Amount menu</label>
                            </div>
                            <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" name="describe"
                                    placeholder="Cost" required>
                                <label for="floatingTextarea">Describe</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Add image</label>
                                <input class="form-control bg-dark" type="file" id="formFileMultiple"  name="image" multiple required>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary">Add</button>
                        </div>
                    </div>
        </form>
<?php
  }
}
?>