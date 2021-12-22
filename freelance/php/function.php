<?php
ob_start();
session_start();

function giriskontrol(){
	$uye_mail=$_SESSION['uye_mail'];
	$uyesor=mysqli_query($con,"SELECT * FROM uyeler WHERE uye_mail='$uye_mail'");
	$uyesay=mysqli_num_rows($uyesor);
	if($uyesay==0){
		header('Location:index.php');
	}
}

?>