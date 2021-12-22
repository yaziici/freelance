<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Giriş Yap</a></li>
			<li><a href="#register">Kayıt Ol</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Hoşgeldiniz..</h3>
					<span>Hesabınız yok mu ? <a href="#" class="register-tab">Kayıt Ol!</a></span>
				</div>
					
				<!-- Form -->
				<form action="freeadmin/islem.php" method="POST">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="uye_mail" id="uye_mail" placeholder="*Email Adresiniz.." required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="uye_sifre" id="uye_sifre" placeholder="*Şifreniz.." required/>
					</div>
				
				
				<!-- Button -->
				<input class="btn btn-success" style="width: 100%" type="submit" name="logon" value="Giriş ">
				</form>

				<!-- Social Login -->
				<div class="social-login-separator"><span>NKU Proje 2</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook ile Giriş</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Google+ ile Giriş</button>
				</div>

			</div>

			<!-- Register -->

			<div class="popup-tab-content" id="register">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Kayıt Olmak İçin Bilgileri Doldurunuz..</h3>
				</div>

				<form name="uyekaydet" action="freeadmin/islem.php" method="POST">

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="uye_ad" id="uye_ad" placeholder="*Adınız.." required/>
					</div>
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="uye_mail" id="uye_mail" placeholder="*Email Adresiniz.." required/>
					</div>

					<div class="input-with-icon-left" title="En az 8 karakter uzunluğunda olmalı" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="uye_sifre" id="uye_sifre" placeholder="*Şifreniz.." required/>
					</div>					
				
				
				<!-- Button -->
				
				<input class="btn btn-success" style="width: 100%" type="submit" name="uyekaydet" value="Kayıt Ol ">
				</form>
				<!-- Social Login -->
				<div class="social-login-separator"><span>NKU Proje 2</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook ile Kayıt Ol</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Google+ ile Giriş</button>
				</div>

			</div>