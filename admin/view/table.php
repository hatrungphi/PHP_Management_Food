<!DOCTYPE html>
<html lang="en">
<!-- Head  Start -->
<?php
include './Pages/head.php';
?>
<!-- Head  End -->

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php
        include './Pages/Spinner.php';
        ?>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include './Pages/Sidebar.php' ?> ;
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

            <?php include './Pages/Navbar.php'; ?>

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="content-wrapper">
                        <div class="col-sm-12 ">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">My menu</h6>
                                <table class="table">

                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Describe menu</th>
                                        <th scope="col">Amount menu</th>
                                    </tr>


                                    <?php include '../controller/menuController.php';
                                    foreach ($dsmenu as $menu) {
                                    ?> <tr>
                                            <th scope="row"><?php echo $menu["idmenu"] ?></th>
                                            <th scope="row"> <img class="rounded-circle" src="../controller/uploads/<?php echo $menu["image"] ?>" alt="" style="width: 40px; height: 40px;"> </th>
                                            <th scope="row"><?php echo $menu["name"] ?></th>
                                            <td><?php echo $menu["cost"] ?></td>
                                            <td><?php echo $menu["describe"] ?></td>
                                            <td><?php echo $menu["amount_menu"] ?></td>
                                            <td><a href='/admin/view/form.php?idU=<?php echo $menu["idmenu"] ?>' id='btn'>Update</a></td>
                                            <td><a href="../controller/menuController.php?id=<?php echo $menu["idmenu"] ?>">Delete</a> </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </table>


                            </div>
                        </div>
                    </div>

                    <!-- Table End -->




  <!-- Table Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="content-wrapper">
                        <div class="col-sm-12 ">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">My User</h6>
                                <table class="table">

                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Email</th>
                                    </tr>


                                    <?php include '../controller/UserController.php';
                                    foreach ($dsuser as $user) {
                                    ?> <tr>
                                            <th scope="row"><?php echo $user["Id"] ?></th>
                                             <th scope="row"><?php echo $user["userName"] ?></th>
                                             <th scope="row"><?php echo $user["passWord"] ?></th>
                                             <th scope="row"><?php echo $user["email"] ?></th>
                                             <td><a href="../controller/UserController.php?id=<?php echo $user["Id"]?>">Delete</a> </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Table End -->


                    <!-- Footer Start -->
                    <?php
                    include './Pages/Footer.php';
                    ?>
                    <!-- Footer End -->
                </div>
                <!-- Content End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            <!-- Script Start -->
            <?php
            include './Pages/Script.php';
            ?>
            <!-- Script End -->
</body>

</html>