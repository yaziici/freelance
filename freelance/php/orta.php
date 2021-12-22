<?php
$uyesorr=mysqli_query($con, "SELECT * FROM uyeler INNER JOIN ilanlar ON uyeler.uye_id = ilanlar.ilan_ustid WHERE uye_id=$_GET[ilan_ustid] "); 
$uyecekk=mysqli_fetch_assoc($uyesorr);

$ilansorr=mysqli_query($con, "SELECT * FROM kategori INNER JOIN ilanlar ON kategori.kategori_id = ilanlar.ilan_katid"); 
$ilancekk=mysqli_fetch_assoc($ilansorr);
?>
<!-- Content
================================================== -->
<!-- Category Boxes -->
<div class="section margin-top-65">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<div class="section-headline centered margin-bottom-15">
					<h3>Popüler İş Kategorileri</h3>
				</div>

				<!-- Category Boxes Container -->
				<div class="categories-container">

					<!-- Category Box -->

               	<?php
				$kategorisor="SELECT * FROM kategori ORDER BY kategori_sira ASC ";
                $sql=mysqli_query($con,$kategorisor);
                while($kategoricek=mysqli_fetch_assoc($sql)){ ?>


					<a href="#" class="category-box">
						<div class="category-box-icon">
							<i class="<?php echo $kategoricek['kategori_icon']; ?>"></i>
						</div>
						<div class="category-box-counter">dikkat</div>
						<div class="category-box-content">
							<h3><?php echo $kategoricek['kategori_ad']; ?></h3>
							<p><?php echo $kategoricek['kategori_detay']; ?></p>
						</div>
					</a>
						<?php } ?>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->


<!-- Features Jobs -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>Son Eklenen 5 İş</h3>
					
				</div>
				
				<!-- Jobs Container -->
				<div class="listings-container compact-list-layout margin-top-35">
					


<?php 
$ilansor="SELECT * FROM uyeler INNER JOIN ilanlar ON uyeler.uye_id = ilanlar.ilan_ustid LIMIT 5;";
$sql=mysqli_query($con,$ilansor);
while($ilancek=mysqli_fetch_assoc($sql)){ ?>

					<!-- Job Listing -->
					<a href="ilan.php?ilan_id=<?php echo $ilancek['ilan_id']; ?>&ilan_ustid=<?php echo $ilancek['uye_id']; ?>" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="freeadmin/<?php echo $ilancek['uye_foto']; ?>" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title"><?php echo $ilancek['ilan_ad']; ?></h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> <?php echo $ilancek['uye_ad']; ?> <div class="<?php if ($ilancek['uye_onay']=="1"){ ?>verified-badge <?php } else { } ?>" title="Onaylı Üye" data-tippy-placement="top"></div>
										</li>
										<li><i class="icon-material-outline-business-center"></i> <?php echo $ilancek['ilan_tip']; ?></li>
										<li><i class="icon-material-outline-access-time"></i> <?php echo $ilancek['ilan_tarih']; ?></li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<span class="list-apply-button ripple-effect">Detay Gör</span>
						</div>
					</a>	


<?php } ?>

				</div>
				<!-- Jobs Container / End -->

			</div>
		</div>
	</div>
</div>
<!-- Featured Jobs / End -->



<!-- Highest Rated Freelancers -->
<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-25">
					<h3>Freelance Çalışanlarımız</h3>
				</div>
			</div>

			<div class="col-xl-12">
				<div class="default-slick-carousel freelancers-container freelancers-grid-layout">


						<?php 
$uyesor="SELECT * FROM uyeler LIMIT 7;";
$sql=mysqli_query($con,$uyesor);
while($uyecek=mysqli_fetch_assoc($sql)){ ?>

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->

						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="uye.php?uye_id=<?php echo $uyecek['uye_id']; ?>"><img src="freeadmin/<?php echo $uyecek['uye_foto']; ?>" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="uye.php?uye_id=<?php echo $uyecek['uye_id']; ?>"><?php echo $uyecek['uye_ad']; ?> <img class="flag" src="images/flags/tr.svg" alt="" title="Türkiye" data-tippy-placement="top"></a></h4>
									<span><?php echo $uyecek['uye_kisa']; ?></span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Ortalama Ücret <strong><?php echo $uyecek['uye_ucret']; ?>TL / Saatlik</strong></li>
								</ul>
							</div>
							<a href="uye.php?uye_id=<?php echo $uyecek['uye_id']; ?>" class="button button-sliding-icon ripple-effect">Profili Gör <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

					<?php } ?>		
					<!-- Freelancer / End -->

					<!--Freelancer -->
					
					<!-- Freelancer / End -->
					
					<!--Freelancer -->
					
					<!-- Freelancer / End -->


				</div>
			</div>

		</div>
	</div>
</div>
<!-- Highest Rated Freelancers / End-->