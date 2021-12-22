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
<?php
$sor=mysqli_query($con,"SELECT * FROM teklif INNER JOIN uyeler ON teklif.teklif_verenid = uyeler.uye_id INNER JOIN ilanlar ON teklif.teklif_ilanid = ilanlar.ilan_id WHERE teklif_alanid=$uyecekk[uye_id]; ");
$cek=mysqli_fetch_assoc($sor);
?>

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
				<h3>İşlerimi Yönet</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Anasayfa</a></li>
						<li>İşlerimi Yönet</li>
						   
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
							<h3><i class="icon-material-outline-supervisor-account"></i> İşlerim</h3>
							<div class="sort-by">
								<?php if (@$_GET['silme']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Teklif Silindi.
                            </div>
                            <?php } ?>
							</div>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">


							<?php $teklifsor="SELECT * FROM teklif INNER JOIN uyeler ON teklif.teklif_sahipid = uyeler.uye_id INNER JOIN ilanlar ON teklif.teklif_ilanid = ilanlar.ilan_id WHERE teklif_sahipid=$uyecekk[uye_id]; ";
                              $sql=mysqli_query($con,$teklifsor);
                              while($teklifcek=mysqli_fetch_assoc($sql)){ ?>

                              	<?php if ($teklifcek['teklif_durum']=="1"){ ?>
                              			<?php if ($teklifcek['teklif_tamam']=="0"){ ?>
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="<?php if ($teklifcek['uye_onay']=="1"){ ?>verified-badge <?php } else { } ?>"></div>
												<a href="#"><img src="freeadmin/<?php echo $teklifcek['uye_foto']; ?>" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#"><?php echo $teklifcek['ilan_ad']; ?> </a></h4>

												<!-- Details -->

												<span class="freelancer-detail-item"><a href="uye.php?uye_id=<?php echo $teklifcek['uye_id']; ?>"><i class="icon-material-outline-business"></i> <?php echo $teklifcek['uye_ad']; ?> <img class="flag" src="images/flags/tr.svg" alt="" title="Türkiye" data-tippy-placement="top"></a></span>
												/ 
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> <?php echo $teklifcek['uye_mail']; ?></a></span>

												

												<!-- Rating -->

												<!-- Bid Details -->
												<ul class="dashboard-task-info bid-info">
													<li><strong><?php echo $teklifcek['teklif_fiyat']; ?> TL</strong><span>Türk Lirası</span></li>
													<li><strong><?php echo $teklifcek['teklif_sure']; ?> <?php echo $teklifcek['teklif_suretip']; ?></strong><span>Teslim Süresi</span></li>
												</ul>

												<!-- Buttons -->

												

												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
													
													<a href="freeadmin/islem.php?teklif_id=<?php echo $teklifcek['teklif_id']; ?>&tekliftamamla=ok&teklif_sahipid=<?php echo $teklifcek['uye_id']; ?>" class="button gray ripple-effect ico" title="Tamamlandı" data-tippy-placement="top"><i class="icon-feather-check" onclick="return confirmDel();"></i></a>

												</div>
											</div>
										</div>
									</div>
								</li>
								<?php } else { } ?>
								<?php } else { } ?>


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

