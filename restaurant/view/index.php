<!DOCTYPE html>
<html lang="en">
<?php
    include './layouts/head.php';
    ?>
  <body>
  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <?php
    include './layouts/header.php';
    ?>
    <!--Header-->
    <!-- Page Content -->
    <!-- Banner Starts Here -->
        <?php
    include './layouts/banner.php';
    ?>
    <!-- Banner Ends Here -->
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">Events</h2>
          <br>
          <div class="row">
          <?php include '../controller/menuController.php';
          foreach ($dsmenu as $menu) {
          ?>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                <img src="/admin/controller/uploads/<?php echo $menu["image"]?>" alt="">
                </div>
                <div class="down-content">
                  <span><?php echo $menu["cost"] ?></span>
                  <a href="book-table.php"><h4><?php echo $menu["name"] ?></h4></a>
                  <p><?php echo $menu["describe"] ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="book-table.php">Book a Table</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
          </div>
 <!-- Footer-->
<?php
include './layouts/footer.php';
?>
<!-- Footer-->
<!-- Script-->
<?php
include './layouts/script.php';
?>
<!-- Script-->
  </body>
</html>