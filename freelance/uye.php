<?php include 'php/header.php';
?>

<?php
error_reporting(0);
include "php/baglan.php";
mysqli_query($con, "SET NAMES UTF8");

$uyesor=mysqli_query($con, "SELECT * FROM `uyeler` where uye_id=$_GET[uye_id]"); 
$uyecek=mysqli_fetch_assoc($uyesor);
?>

<!-- Titlebar
================================================== -->
<div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar"><img src="freeadmin/<?php echo $uyecek['uye_foto'] ?>" alt=""></div>
						<div class="header-details">
							<h3><?php echo $uyecek['uye_ad']; ?> <span><?php echo $uyecek['uye_kisa']; ?></span></h3>
							<ul>
								<li><div class="star-rating" data-rating="5.0"></div></li>
								<li><img class="flag" src="images/flags/tr.svg" alt=""> Türkiye</li>
								<?php if ($uyecek['uye_onay']=="1"){ ?>
								<li><div class="verified-badge-with-title">Onaylı</div></li>
						    	<?php } else { } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Hakkımda</h3>
				<p><?php echo $uyecek['uye_hakkinda']; ?></p>
			</div>

			<!-- Boxed List -->
			
			<!-- Boxed List / End -->
			
			<!-- Boxed List -->
			
			<!-- Boxed List / End -->

		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Profile Overview -->
				<div class="profile-overview">
					<div class="overview-item"><strong><?php echo $uyecek['uye_ucret']; ?> TL</strong><span>Ortalama Saatlik Ücret</span></div>
				</div>

				<!-- Button -->
				

				<!-- Freelancer Indicators -->
				
				
				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Sosyal Profiller</h3>
					<div class="freelancer-socials margin-top-25">
						<ul>
							<li><a href="https://instagram.com/<?php echo $uyecek['uye_instagram']; ?>" title="İnstagram" data-tippy-placement="top" target="_blank"><i class="icon-brand-instagram"></i></a></li>
							<li><a href="https://twitter.com/<?php echo $uyecek['uye_twitter']; ?>" title="Twitter" data-tippy-placement="top" target="_blank"><i class="icon-brand-twitter"></i></a></li>
							<li><a href="https://facebook.com/<?php echo $uyecek['uye_facebook']; ?>" title="Facebook" data-tippy-placement="top" target="_blank"><i class="icon-brand-facebook"></i></a></li>
							<li><a href="https://github.com/<?php echo $uyecek['uye_github']; ?>" title="GitHub" data-tippy-placement="top" target="_blank"><i class="icon-brand-github"></i></a></li>
						
						</ul>
					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Yetenekler</h3>
					<div class="task-tags">
						<?php
							$yeteneksor="SELECT * FROM yetenek WHERE uye_id=$_GET[uye_id] order by yetenek_id";
                     		$sql=mysqli_query($con,$yeteneksor);
                     		while($yetenekcek=mysqli_fetch_assoc($sql)){ ?>
						<span><?php echo $yetenekcek['yetenek_ad']; ?></span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<?php include 'php/footer.php';
?>