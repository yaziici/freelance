
<?php
error_reporting(0);
include "php/baglan.php";
mysqli_query($con, "SET NAMES UTF8");

$ayarsor=mysqli_query($con, "SELECT * FROM `ayarlar`"); 
$ayarcek=mysqli_fetch_assoc($ayarsor);

ob_start();
session_start();
?> 



<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2020 09:26:53 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title><?php echo $ayarcek['ayar_title'] ?></title>
<meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>" />
<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="index.php">Anasayfa</a></li>
						<li><a href="isilanlari.php">İş Arayanlar</a></li>
						<li></li>

						



					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

							
			<!-- Right Side Content / End -->
			<div class="right-side">

							<?php if (@$_GET['giris']=="yes") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Giriş Yapıldı.
                            </div>
                            <?php } ?>

                            <?php if (@$_GET['giris']=="no") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARISIZ!</strong> Hatalı Giriş !
                            </div>
                            <?php } ?>
				
				<!--  User Notifications -->
					
					
        <?php
        if(empty($_SESSION['uye_mail'])) { 

          $uyesor=mysqli_query($con, "SELECT * FROM uyeler where uye_mail='$_SESSION[uye_mail]'"); 
          $uyecek=mysqli_fetch_assoc($uyesor);


?>

					<!-- Messages -->
					<div class="header-widget">
					<a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Giriş / Kayıt</span></a>
					</div> 

				</div> <?php } else { ?>
				<!--  User Notifications / End -->
<?php
$uyesorr=mysqli_query($con, "SELECT * FROM uyeler where uye_mail='$_SESSION[uye_mail]'"); 
$uyecekk=mysqli_fetch_assoc($uyesorr);
?>
				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="freeadmin/<?php echo $uyecekk['uye_foto']; ?>" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="freeadmin/<?php echo $uyecekk['uye_foto']; ?>" alt=""></div>
									<div class="user-name">
										<?php echo $uyecekk['uye_ad']; ?><span><?php echo $_SESSION['uye_mail']; ?><br>
											<?php if ($uyecekk['uye_tip']== 0){ ?>Çalışan<?php } else { ?>İşveren<?php } ?>
										</span>
									</div>
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Çevrimiçi</label>
									<label class="user-invisible">Çevrimdışı</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="<?php if ($uyecekk['uye_tip']== 0){ ?>islerim.php<?php } else { ?>ilanlarim.php<?php } ?>"><i class="icon-material-outline-dashboard"></i> Yönetim Paneli</a></li>
							<li><a href="ayarlar.php"><i class="icon-material-outline-settings"></i> Ayarlar</a></li>
							<li><a href="logout.php"><i class="icon-material-outline-power-settings-new"></i> Çıkış Yap</a></li>
						</ul>

						</div>
					</div>

				</div>

			<?php }  ?>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

			<?php include 'giris.php'; ?>

		</div>
	</div>
</div>
</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


