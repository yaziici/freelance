<?php include 'php/header.php'; ?>

<?php
$ilansor=mysqli_query($con,"select * from ilanlar where ilan_id=$_GET[ilan_id]");
$ilancek=mysqli_fetch_assoc($ilansor);

$uyesorr=mysqli_query($con, "SELECT * FROM uyeler INNER JOIN ilanlar ON uyeler.uye_id = ilanlar.ilan_ustid WHERE uye_id=$_GET[ilan_ustid] "); 
$uyecekk=mysqli_fetch_assoc($uyesorr);


$teklifsor=mysqli_query($con, "SELECT * FROM uyeler where uye_mail='$_SESSION[uye_mail]'"); 
$teklifcek=mysqli_fetch_assoc($teklifsor);

?>

<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="uye.php?uye_id=<?php echo $uyecekk['uye_id']; ?>"><img src="freeadmin/<?php echo $uyecekk['uye_foto']; ?>" alt=""></a></div>
						<div class="header-details">

							<h3><?php echo $ilancek['ilan_ad']; ?></h3>
							<h5>İşveren Bilgileri</h5>
							<ul>
								<li><a href="uye.php?uye_id=<?php echo $uyecekk['uye_id']; ?>"><i class="icon-material-outline-business"></i> <?php echo $uyecekk['uye_ad']; ?></a></li>
								<li><div class="star-rating" data-rating="5"></div></li>
								<li><img class="flag" src="images/flags/tr.svg" alt=""> Türkiye</li>
								<?php if ($uyecekk['uye_onay']=="1"){ ?>
								<li><div class="verified-badge-with-title">Onaylı</div></li>
						    	<?php } else { } ?>
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Fiyat Aralığı</div>
							<div class="salary-amount"><?php echo $ilancek['ilan_fiyat']; ?>TL - <?php echo $ilancek['ilan_fiyat2']; ?>TL</div>
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

			<div class="single-page-section">
				<h3 class="margin-bottom-25">İş Açıklaması</h3>
				<p><?php echo $ilancek['ilan_aciklama']; ?></p>
			</div>


			<div class="single-page-section">
				<h3 class="margin-bottom-25">Benzer İşler</h3>

				<!-- Listings Container -->
				<div class="listings-container grid-layout">
<?php 
$benzersor="SELECT * FROM ilanlar INNER JOIN kategori WHERE ilanlar.ilan_katid=kategori.kategori_id ORDER BY RAND() LIMIT 4;";
$sql=mysqli_query($con,$benzersor);
while($benzercek=mysqli_fetch_assoc($sql)){ 
?>
						<!-- Job Listing -->
						<a href="#" class="job-listing">

							<!-- Job Listing Details -->
							<div class="job-listing-details">
								<!-- Logo -->
								<div class="job-listing-company-logo">
									<i style="font-size: 58px;" class="<?php echo $benzercek['kategori_icon']; ?>"></i>
								</div>

								<!-- Details -->
								<div class="job-listing-description">
									<h4 class="job-listing-company"><?php echo $benzercek['kategori_ad'];?></h4>
									<h3 class="job-listing-title"><?php echo substr($benzercek['ilan_ad'],0,50);?>...</h3>
								</div>
							</div>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<li><i class="icon-material-outline-business-center"></i> <?php echo $benzercek['ilan_tip'];?></li><br>
									<li><i class="icon-material-outline-account-balance-wallet"></i> <?php echo $benzercek['ilan_fiyat'];?>TL - <?php echo $benzercek['ilan_fiyat2'];?>TL</li>
									<li><i class="icon-material-outline-access-time"></i> <?php echo $benzercek['ilan_tarih'];?></li>
								</ul>
							</div>
						</a>
<?php } ?>
						<!-- Job Listing -->
					</div>
					<!-- Listings Container / End -->

				</div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<?php if ($teklifcek['uye_yetki']== 0){ ?>

					<p style="color: red;"> Üyeliğiniz onaylanmadığı için teklif veremezsiniz. </p><hr><br>

				<?php } else { ?>


				<form action="freeadmin/islem.php" method="POST">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Fiyat Teklifi..<br> (Sadece Rakam Noktalama İşareti Kullanma)</h5>
										<div class="input-with-icon">
										<input type="number" class="input-text with-border" name="teklif_fiyat" id="teklif_fiyat" placeholder="Teklifiniz..">
										<i class="currency">TL</i>
										</div>
									</div>
								</div>

							<div class="col-xl-12">
									<div class="submit-field">
										<h5>Teslim Süresi</h5>
									 <div class="col-xl-12">
										<div class="input-with-icon">
										<input type="number" class="input-text with-border" name="teklif_sure" id="teklif_sure" placeholder="Teslim Süresiniz..">
										<i class="currency">TL</i>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="input-with-icon">
										<select class="selectpicker with-border" name="teklif_suretip" title="Süreç Tipi (Gün/Ay/Yıl)">
											<option value="Gün">Gün</option>
											<option value="Ay">Ay</option>
											<option value="Yıl">Yıl</option>
										</select>
										</div>
									</div>
									</div>
								</div>
				<input class="with-border" name="teklif_verenid" type="hidden" value="<?php echo $teklifcek['uye_id']; ?>">
				<input class="with-border" name="teklif_alanid" type="hidden" value="<?php echo $uyecekk['uye_id']; ?>">
				<input class="with-border" name="teklif_ilanid" type="hidden" value="<?php echo $ilancek['ilan_id']; ?>">
				<input class="btn btn-success" style="width: 100%" type="submit" name="teklifver" value="Teklif Ver"/>
				</form>

				<?php } ?>
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">İş Detayları</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-material-outline-business-center"></i>
									<span>İş Tipi</span>
									<h5><?php echo $ilancek['ilan_tip']; ?></h5>
								</li>
								<li>
									<i class="icon-material-outline-local-atm"></i>
									<span>Fiyat Aralığı</span>
									<h5><?php echo $ilancek['ilan_fiyat']; ?>TL - <?php echo $ilancek['ilan_fiyat2']; ?>TL</h5>
								</li>
								<li>
									<i class="icon-material-outline-access-time"></i>
									<span>İlan Tarihi</span>
									<h5><?php echo $ilancek['ilan_tarih']; ?></h5>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					

					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Panoya Kopyala" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Sosyal Medya <strong>Paylaş !</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Facebookta Paylaş" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Twitterda Paylaş" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Google Plusta Paylaş" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Linkedinde Paylaş" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<?php include 'php/footer.php'; ?>