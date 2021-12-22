<?php include 'php/header.php'; 
$ilan_id=$_GET['ilan_id'];
$ilansor=mysqli_query($con,"SELECT * FROM ilanlar WHERE ilan_id='$ilan_id'");
$ilancek=mysqli_fetch_assoc($ilansor);
?>

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
				<h3>Görev Düzenle</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="index.php">Anasayfa</a></li>
						<li>Görev Düzenle</li> 
							<?php if (@$_GET['duzenle']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Ürün Düzenlendi.
                            </div>
                            <?php } ?>
					</ul>

				</nav>
			</div>
	<form name="ilanduzenle" action="freeadmin/islem.php" method="POST" >
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						
						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Görev Düzenle Formu</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Görev Adı</h5>
										<input type="text" class="with-border" name="ilan_ad" value="<?php echo $ilancek['ilan_ad']; ?>">
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>İlan Tipi <i class="help-icon" data-tippy-placement="right" title="Verdiğiniz İlan Tipini Seçiniz"></i></h5>
										<select required class="selectpicker with-border" name="ilan_tip" title="İlan Tipi Seçiniz">
											<option value="Freelance">Freelance</option>
											<option value="Tam Zamanlı">Tam Zamanlı</option>
										</select>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Fiyat Aralığı Seçiniz <i class="help-icon" data-tippy-placement="right" title="Sadece Rakam (Noktalama İşaretleri Kullanmayınız.!)"></i></h5>
										<div class="row">
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" name="ilan_fiyat" type="number" value="<?php echo $ilancek['ilan_fiyat']; ?>">
													<i class="currency">TL/Saat</i>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" name="ilan_fiyat2" type="number" value="<?php echo $ilancek['ilan_fiyat2']; ?>">

													<i class="currency">TL/Saat</i>

												</div>
											</div>
										</div>										
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Kategori <i class="help-icon" data-tippy-placement="right" title="Üst Kategori Seçiniz"></i></h5>
										<select required name="ilan_katid" id="ilan_katid" class="selectpicker with-border" title="Üst Kategori Seçiniz">
											
              <?php $katsor="SELECT * FROM kategori ";
                              $sql=mysqli_query($con,$katsor);
                              while($katcek=mysqli_fetch_assoc($sql)){ ?>
              <option value="<?php echo $katcek['kategori_id']; ?>"><?php echo $katcek['kategori_ad']; ?></option>
              <?php } ?>
            </select>		
									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>İlan Hakkında Açıklamanızı Yazınız</h5>
										<textarea name="ilan_aciklama" class="ckeditor"><?php echo $ilancek['ilan_aciklama']; ?></textarea>
										
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<input type="hidden" name="ilan_id" value="<?php echo $ilancek['ilan_id'];?>">
					<input class="btn btn-success" style="width: 100%" type="submit" name="ilanduzenle" value="İlan Düzenle"/>
					
				</div>

			</div>
		</form>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<?php include 'php/footer2.php'; ?>
			<!-- Footer / End -->

		</div>
	</div>

