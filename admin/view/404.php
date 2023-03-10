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


            <!-- 404 Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center p-4">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1 fw-bold">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website!
                            Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a>
                    </div>
                </div>
            </div>
            <!-- 404 End -->


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