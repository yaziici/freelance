<?php include 'php/header.php'; ?>

<div class="dashboard-container">

<head>
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<script language="javascript">
function confirmDel() {
 var agree=confirm("Bu içeriği silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!");
 if (agree) {
  return true ; }
 else {
  return false ;}
}
</script>

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title"></span>
				</a>
				
				<!-- Navigation -->
				<?php include 'php/sol.php' ?>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Görevleri Yönet</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Anasayfa</a></li>
						<li>Görevleri Yönet</li>
						    <?php if (@$_GET['silme']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> İlan Silindi.
                            </div>
                            <?php } ?>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-assignment"></i> İlanlarım</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<?php 
									$ilansor="SELECT * FROM uyeler INNER JOIN ilanlar ON uyeler.uye_id = ilanlar.ilan_ustid WHERE ilan_ustid=$uyecekk[uye_id];";
									$sql=mysqli_query($con,$ilansor);
									while($ilancek=mysqli_fetch_assoc($sql)){ ?>

								<li>
									<!-- Job Listing -->
									<div class="job-listing width-adjustment">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#"><?php echo $ilancek['ilan_ad']; ?></a></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-access-time"></i> <?php echo $ilancek['ilan_tarih']; ?></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- Task Details -->
									<ul class="dashboard-task-info">
										<li><strong><?php echo $ilancek['ilan_fiyat']; ?> TL  - <?php echo $ilancek['ilan_fiyat2']; ?> TL </strong><span>Fiyat Aralığı</span></li>
									</ul>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="ilanduzenle.php?ilan_id=<?php echo $ilancek['ilan_id'] ?>" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> İlanı Düzenle</a>
										<a href="freeadmin/islem.php?ilan_id=<?php echo $ilancek['ilan_id']; ?>&ilannsil=ok" class="button gray ripple-effect ico" title="Kaldır" data-tippy-placement="top" onclick="return confirmDel();"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
<?php } ?>
								

							</ul>
						</div>
					</div>
				</div>

			</div>



			<!-- Row / End -->
			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<?php include 'php/footer2.php'; ?>
			<!-- Footer / End -->

		</div>
	</div>

