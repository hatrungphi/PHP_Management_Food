<!DOCTYPE html>
<html lang="en">
<?php
include './layouts/head.php';
?>
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
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>Menu</h4>
              <h2>Find the perfect meal for you!</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Banner Ends Here -->
  <section class="blog-posts grid-system">
    <div class="container">
      <div class="all-blog-posts">
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
                  <span><?php echo($menu["cost"]) ?> </span>
                  <a href="vacation-details.html">
                    <h4><?php echo $menu["name"] ?></h4>
                  </a>
                  <p><?php echo $menu["describe"] ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="#">Order Now</a></li>
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
      </div>
    </div>
  </section>
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