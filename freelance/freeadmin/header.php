<?php
error_reporting(0);
include "../php/baglan.php";
include 'function.php';
mysqli_query($con, "SET NAMES UTF8");

$ayarsor=mysqli_query($con, "SELECT * FROM `ayarlar`"); 
$ayarcek=mysqli_fetch_assoc($ayarsor);

ob_start();
session_start();
if(!isset($_SESSION['admin_kadi'])){
  header('Location:login.php');
} 
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.urbanui.com/zoom/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 09:45:07 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Proje 2</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
   <link rel="stylesheet" href="bower_components/lightgallery/dist/css/lightgallery.min.css">
   <link rel="stylesheet" href="css/dropzone.css">
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
  <link rel="stylesheet" href="node_modules/icheck/skins/all.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
    <script src="js/dropzone.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script language="javascript">
function confirmDel() {
 var agree=confirm("Bu içeriği silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!");
 if (agree) {
  return true ; }
 else {
  return false ;}
}
</script>

</head>

<body class="navbar-primary">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="index">PROJE 1
              <i class="mdi mdi-cube-send"></i>
            </a>
            <a class="navbar-brand brand-logo-mini" href="#"><i class="mdi mdi-cube-send"></i></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>

            

            <div class="nav-profile">
              <span>Hoşgeldiniz,&nbsp;&nbsp;<?php echo $_SESSION['admin_kadi']; ?></span>
              <img src="images/admin-icon.png" />
            </div>

             <a class="form-inline mt-2 mt-md-0 d-none d-lg-block ml-lg-auto" href="../index" target="_blank"><button type="button" class="btn btn-danger"><i class="mdi mdi-play"></i> Siteyi Görüntüle</button></a>

             <a class="form-inline mt-2 mt-md-0 d-none d-lg-block ml-lg-auto" href="logout.php"><button type="button" class="btn btn-danger"><i class="mdi mdi-play"></i> Çıkış Yap</button></a>

           

            
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
        </div>
    </nav>
