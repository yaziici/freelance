<!DOCTYPE html>
<html lang="en">
<?php include "../php/baglan.php";
session_start();
ob_start();


 ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Proje 1</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper auth-pages login-2">
          <div class="card col-lg-4">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Giriş</h3>
   <!--           <?php
              /*if ($_POST) {
                if (!empty($_POST["admin_kadi"]) && !empty($_POST["admin_sifre"])) {
                  $admin_kadi=$con->filter($_POST["admin_kadi"]);
                  $admin_sifre=$con->filter($_POST["admin_sifre"]);
                  $kontrol=$con->VeriGetir("admin","WHERE admin_kadi=? AND admin_sifre=?,array($admin_kadi,$admin_sifre), ORDER BY admin_id ASC",1);
                  if($kontrol!=false)
                  {
                    $_SESSION["admin_kadi"]=$kontrol[0]["admin_kadi"];
                    $_SESSION["admin_sifre"]=$kontrol[0]["admin_sifre"];
                    $_SESSION["admin_id"]=$kontrol[0]["admin_id"];
                    ?>
                      <meta http-equiv="refresh" content="0;url=index /">
                    <?php
                    exit();
                  } else{
                    echo '<div class="alert alert-danger"> Hata</div>';
                  }
                } else{
                  echo '<div class="alert alert-danger"> Boş</div>';
                }
              }
              */?>  -->
              <form action="islem.php" method="POST">
                <div class="form-group">
                  <label>Kullanıcı Adı *</label>
                  <input type="text" id="admin_kadi" name="admin_kadi" class="form-control p_input Required">
                </div>
                <div class="form-group">
                  <label>Şifre *</label>
                  <input type="password" id="admin_sifre" name="admin_sifre" class="form-control p_input Required">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Beni Hatırla
                      </label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="loggin" class="btn btn-primary btn-block enter-btn">Giriş Yap</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->


  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/zoom/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jul 2020 11:47:58 GMT -->
</html>
