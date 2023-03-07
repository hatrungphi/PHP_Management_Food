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
              <h4>Sign in</h4>
              <h2>let’s voucher!</h2>
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
                  <div class="sidebar-heading">
                    <h2>Let's fill values!</h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="../controller/UserController.php" method="POST">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="txt_email" type="email" id="txt_email" placeholder="Your email" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="txt_username" type="text" id="txt_username" placeholder="username">
                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          <fieldset>
                            <input name="txt_password" type="password" id="txt_password" placeholder="Password">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <input name="txt_comfirmpass" type="password" id="txt_comfirmpass" placeholder="Comfirm password">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" name="dangky" id="form-submit" class="main-button">SIGN UP</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="sidebar-item contact-information">
                  <div class="sidebar-heading">
                    <h2>contact information</h2>
                  </div>
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

        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
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
  <script>
    var password = document.getElementById("txt_password"),
      confirm_password = document.getElementById("txt_comfirmpass");

    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>
</body>

</html>