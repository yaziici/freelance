			<?php 
include 'php/header.php';
?>
<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="sidebar-container">

				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>Anahtar Kelimeler</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="Php, Css vs."/>
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Kategoriler</h3>
					<select class="selectpicker" multiple data-selected-text-format="count" data-size="7" title="Tüm Kategoriler">
						<?php
				$kategorisor="SELECT * FROM kategori";
                $sql=mysqli_query($con,$kategorisor);
                while($kategoricek=mysqli_fetch_assoc($sql)){ ?>
						<option><?php echo $kategoricek['kategori_ad']; ?></option>
				<?php } ?>
					</select>
				</div>
				
				<!-- Job Types -->
				

				<!-- Salary -->
				
				<!-- Tags -->
				<div class="sidebar-widget">
					<h3>Etiketler</h3>

					<div class="tags-container">
				<?php
				$etiketsor="SELECT * FROM yetenek LIMIT 10; ";
                $sql=mysqli_query($con,$etiketsor);
                while($etiketcek=mysqli_fetch_assoc($sql)){ ?>
						<div class="tag">
							<input type="checkbox" id="tag"/>
							<label for="tag1"><?php echo $etiketcek['yetenek_ad']; ?></label>
						</div>
				<?php } ?>
						
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">İş İlanları</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><input type="checkbox"><span></span><span class="switch-text">Freelance İş İlanları..</span></label>
				</div>

			
			</div>

			<div class="listings-container compact-list-layout margin-top-35">
<?php 
$ilansor="SELECT * FROM uyeler INNER JOIN ilanlar ON uyeler.uye_id = ilanlar.ilan_ustid";
$sql=mysqli_query($con,$ilansor);
while($ilancek=mysqli_fetch_assoc($sql)){ ?>
				<!-- Job Listing -->
				<a href="ilan.php?ilan_id=<?php echo $ilancek['ilan_id']; ?>&ilan_ustid=<?php echo $ilancek['uye_id']; ?>" class="job-listing">

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

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>
				</a>	
<?php } ?>
			</div>


			<!-- Pagination -->
			
			<!-- Pagination / End -->

		</div>
	</div>
</div>


			<?php 
include 'php/footer.php';
?>