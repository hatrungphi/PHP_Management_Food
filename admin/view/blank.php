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
        <?php
         include './Pages/Sidebar.php';
           ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
              include './Pages/Navbar.php';
           ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>
                    </div>
                </div>
            </div>
            <!-- Blank End -->


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