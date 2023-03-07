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
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Book a table</h4>
                <h2>Find the perfect table for you!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->


    <section class="contact-us">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="content">
                      <form id="contact" action="../controller/TableController.php" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="txt_ngayDat" type="date" placeholder="24/07/2020" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="txt_gioDat" type="text" placeholder="20:30" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <select name="txt_soNguoi">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                              </select>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="txt_userName" name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="txt_node" name="message" rows="6" id="message" placeholder="Your Message"></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button name="datban" type="submit" id="form-submit" class="main-button">Check Availability</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="content">
                      <ul>
                        <li>
                          <h5>+0857 435 466</h5>
                          <span>PHONE NUMBER</span>
                        </li>
                        <li>
                          <h5>NguyenandPhi@student.stu.edu.vn</h5>
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5>180 Cao Lo Street, Ward 4. District 8, HCM City</h5>
                          <span>STREET ADDRESS</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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