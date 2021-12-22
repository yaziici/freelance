<?php include 'php/header.php'; ?>

<div class="dashboard-container">

<head>
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

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
				<h3>Ayarlar</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="index.php">Anasayfa</a></li>
						<li><a href="#">Ayarlar</a></li>
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
<!--<form name="uyeduzenle" action="freeadmin/islem.php" method="POST" enctype="multipart/form-data"> -->
<div class="row">
	<div class="col-xl-6">
							<h3 style="text-align: left;"><i class="icon-material-outline-account-circle"></i> Hesabım</h3>
	</div>
	<div class="col-xl-6">
							<?php if (@$_GET['duzenle']=="ok") { ?>
                            <div class="alert alert-success" style="text-align: right;" role="alert">
                                <strong>BAŞARILI!</strong> Başvurunuz Yapıldı.
                            </div>
                          <?php } ?>
                          <?php if (@$_GET['onay']=="no") { ?>
                            <div class="alert alert-success" style="text-align: right;" role="alert">
                                <strong>HATA!</strong> Başvurunuz Yapılamadı.
                            </div>
                          <?php } ?>
                          <?php if (@$_GET['iptal']=="ok") { ?>
                            <div class="alert alert-success" style="text-align: right;" role="alert">
                                <strong>BAŞARILI!</strong> Başvurunuz İptal Edildi.
                            </div>
                          <?php } ?>
                          <?php if (@$_GET['iptal']=="no") { ?>
                            <div class="alert alert-success" style="text-align: right;" role="alert">
                                <strong>HATA!</strong> Başvurunuz İptal Edilemedi.
                            </div>
                          <?php } ?>
    </div>
						</div>
</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Avatarı Değiştir">
										<img class="profile-pic" src="freeadmin/<?php echo $uyecekk['uye_foto'] ?>" alt="" />
										
										<input class="file-upload" name="uye_foto" type="file" accept="image/*"/>
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Ad - Soyad</h5>
												<input type="text" class="with-border" style="background: gainsboro;" value="<?php echo $uyecekk['uye_ad'] ?>" readonly>
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Üyelik Durumu</h5>
												<input type="text" class="with-border" style="background: gainsboro;" value="<?php if ($uyecekk['uye_tip']== 0){ ?>Çalışan<?php } else { ?>İşveren<?php } ?>" readonly>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" class="with-border" style="background: gainsboro;" value="<?php echo $uyecekk['uye_mail'] ?>" readonly>
											</div>
										</div>
										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<?php if ($uyecekk['uye_tip']== 0){ ?>
												<h5>İşverenlik Başvurusu</h5>
												<div class="account-type">
													<div>
														<a href="freeadmin/islem.php?uye_id=<?php echo $uyecekk['uye_id']; ?>&basvuruyap=ok" onclick="return confirmDel();">
															<input class="btn btn-success" style="width: 48%" type="submit" name="basvuruyap" value="Başvur"/>
														</a>
														<a href="freeadmin/islem.php?uye_id=<?php echo $uyecekk['uye_id']; ?>&basvuruiptal=ok" onclick="return confirmDel();">
															<input class="btn btn-danger" style="width: 48%" type="submit" name="basvuruiptal" value="İptal Et"/>
														</a>
													</div>

													<div>
														<input type="text" class="with-border" style="background: gainsboro; width: 100%;" value="<?php if ($uyecekk['uye_basvuru']== 0){ ?>*<?php } else { ?>Beklemede<?php } ?>" readonly>
													</div>
												</div>
											</div>
											<?php } else { ?>

												<?php } ?>
										</div>

										

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				

				<!-- Dashboard Box -->
				
				
				<!-- Button -->
				
</form>
			</div>

<?php include 'php/footer2.php'; ?>