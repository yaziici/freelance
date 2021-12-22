<div class="dashboard-nav">
					<div class="dashboard-nav-inner">
						<?php if ($uyecekk['uye_tip']=="1"){ ?>
						<ul data-submenu-title="İşveren">
								
									<li><a href="ilanver.php">İlan Ver</a></li>
									<li><a href="ilanlarim.php">İlanlarımı Yönet</a></li>
									<li><a href="teklifler.php">Teklifleri Gör</a></li>
									<li><a href="aktifisler.php">Aktif İşler</a></li>
									<li><a href="tamamlananisler.php">Tamamlanan İşler</a></li>
								
						</ul>
					<?php } else {} ?>

						<?php if ($uyecekk['uye_tip']=="0"){ ?>
						<ul data-submenu-title="Çalışan">
							
									<li><a href="islerim.php">İşlerimi Yönet </a></li>
									
									<li><a href="tekliflerim.php">Tekliflerim</a></li>
									
								
						</ul>
						<?php } else {} ?>
						

						<ul data-submenu-title="Hesap Ayarları">
							<li><a href="ayarlar.php"><i class="icon-material-outline-settings"></i> Hesap Ayarları</a></li>
							<li><a href="avatar.php"><i class="icon-material-outline-dashboard"></i> Avatar Fotoğrafı</a></li>
							<li><a href="sosyal.php"><i class="icon-material-outline-star-border"></i> Sosyal Medya</a></li>
							<li><a href="isverenbasvurusu.php"><i class="icon-material-outline-rate-review"></i> İşveren Başvurusu Yap</a></li>
							<li><a href="logout.php"><i class="icon-material-outline-power-settings-new"></i> Çıkış</a></li>
						</ul>
						
					</div>
				</div>