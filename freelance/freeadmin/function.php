<?php
ob_start();
session_start();

function giriskontrol(){
	$admin_kadi=$_SESSION['admin_kadi'];
	$adminsor=mysqli_query($con,"SELECT * FROM admin WHERE admin_kadi='$admin_kadi'");
	$adminsay=mysqli_num_rows($adminsor);
	if($adminsay==0){
		header('Location:login.php');
	}
}

?>