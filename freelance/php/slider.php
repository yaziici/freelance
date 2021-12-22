<?php

$issayisor=mysqli_query($con, "SELECT COUNT(*) FROM ilanlar");
$issayicek=mysqli_fetch_array($issayisor);

$uyesayisor=mysqli_query($con, "SELECT COUNT(*) FROM uyeler"); 
$uyesayicek=mysqli_fetch_array($uyesayisor);

$tamamlananissor=mysqli_query($con, "SELECT COUNT(*) FROM teklif WHERE teklif_tamam='1'"); 
$tamamlananiscek=mysqli_fetch_array($tamamlananissor);



?>
<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="images/home-background.jpg">
	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Herhangi bir iş için online olarak en iyi freelancerları işe alın.</strong>
						<br>
						<span>Milyonlarca kişi fikirlerini gerçeğe dönüştürmek için <strong class="color">nkufreelance.com</strong>'u kullanıyor.</span>
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->

					<!-- Search Field -->
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">Nasıl Bir İş Arıyorsun?</label>
						<input id="intro-keywords" type="text" placeholder="İş Başlığı veya Kelimeler">
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Ara</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter"><?php echo $issayicek[0] ?></strong>
						<span>İş Yayında</span>
					</li>
					<li>
						<strong class="counter"><?php echo $uyesayicek[0] ?></strong>
						<span>Kayıtlı Üye</span>
					</li>
					<li>
						<strong class="counter"><?php echo $tamamlananiscek[0] ?></strong>
						<span>Tamamlanan İş</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

