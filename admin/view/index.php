<!DOCTYPE html>
<html lang="en">
 <!-- Head  Start -->
 <?php
include './Pages/head.php';
?>
 <!-- Head  End -->

<body>
    <div class="container-fluid position-relative d-flex p-0">
       

        <?php include './Pages/Spinner.php'?> ;
        <?php include './Pages/Sidebar.php'?> ;

        <!-- Content Start -->
        <div class="content">
            <?php include './Pages/Navbar.php'?> ;
            <?php include './Pages/Sale_Revenue.php'?> ;
            <?php include './Pages/RecentSales.php'?> ;
            <?php include './Pages/Footer.php'?> ;
        </div>z
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

