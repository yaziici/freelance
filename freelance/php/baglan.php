<?php
$con = mysqli_connect("localhost","root","","freelance");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // if (mysqli_connect_errno()) 
  // 	{  die("Veritbanı Bağlantınızı yapamadık nedeni : ".mysqli_connect_error()); }
  // 	   echo   " üzerinden veritabanı bağlantınız başarıyla gerçekleşti.";  

?>