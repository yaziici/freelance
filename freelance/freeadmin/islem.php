<?php 
error_reporting(0);
include "../php/baglan.php";
mysqli_query($con, "SET NAMES UTF8");
session_start();
ob_start();

if(isset($_POST['loggin'])) {

    $admin_kadi=$_POST['admin_kadi'];
    $admin_sifre=md5($_POST['admin_sifre']);

    if($admin_kadi && $admin_sifre){

        $sorgula=mysqli_query($con,"SELECT * FROM admin WHERE admin_kadi='$admin_kadi' AND admin_sifre='$admin_sifre'");
        $verisay=mysqli_num_rows($sorgula);

        if($verisay>0){
            $_SESSION['admin_kadi'] = $admin_kadi;
            header('Location:index.php');
        } else{
            header('Location:login.php?login=no');
        }
    }
}
if(isset($_POST['logon'])) {

    $uye_mail=$_POST['uye_mail'];
    $uye_sifre=md5($_POST['uye_sifre']);

    if($uye_mail && $uye_sifre){

        $sorgulaa=mysqli_query($con,"SELECT * FROM uyeler WHERE uye_mail='$uye_mail' AND uye_sifre='$uye_sifre'");
        $verisayy=mysqli_num_rows($sorgulaa);

        if($verisayy>0){
            $_SESSION['uye_mail'] = $uye_mail;
            header('Location:../index.php?giris=yes');
        } else{
            header('Location:../index.php?giris=no');
        }
    }
}




if(isset($_POST['ayar_genel'])) {



    $ayar_genel=mysqli_query(@$con,"UPDATE ayarlar set 
        ayar_title='".@$_POST['ayar_title']."' ,        
        ayar_mail='".@$_POST['ayar_mail']."' ,
        ayar_description='".@$_POST['ayar_description']."' ,
        ayar_keywords='".@$_POST['ayar_keywords']."' 
        where ayar_id='1'");

if(mysqli_affected_rows($con))

{header("Location:ayarlar.php?durum=ok");}
else {header("Location:ayarlar.php?durum=no");}
}

if (isset($_POST['uyekaydet'])) {
 $uyeekle=mysqli_query(@$con, "INSERT INTO uyeler
    (uye_ad,uye_mail,uye_sifre) VALUES 
   ('".@$_POST['uye_ad']."',
    '".@$_POST['uye_mail']."',
    md5('".@$_POST['uye_sifre']."'))");
 if (mysqli_affected_rows($con)) {
  header("Location:../index.php?durum=ok");
 }
 else {
  header("Location:../index.php?durum=no");
 }
}

if($_GET['basvuruiptal']=="ok") {
    $basvuruiptal=mysqli_query(@$con,"UPDATE uyeler set 
    uye_basvuru='0' where uye_id='".$_GET['uye_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:../isverenbasvurusu.php?iptal=ok");}
else { header("Location:../isverenbasvurusu.php?iptal=no");}
}
if($_GET['basvuruyap']=="ok") {
    $basvuruyap=mysqli_query(@$con,"UPDATE uyeler set 
    uye_basvuru='1' where uye_id='".$_GET['uye_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:../isverenbasvurusu.php?onay=ok");}
else { header("Location:../isverenbasvurusu.php?onay=no");}
}

if (isset($_POST['uyeduzenle'])) {

    $uye_id=$_POST['uye_id'];
    $uyeduzenle=mysqli_query(@$con,"UPDATE uyeler set 
        uye_ad='".@$_POST['uye_ad']."' , 
        uye_mail='".@$_POST['uye_mail']."' ,    
        uye_ucret='".@$_POST['uye_ucret']."' , 
        uye_kisa='".@$_POST['uye_kisa']."' , 
        uye_hakkinda='".@$_POST['uye_hakkinda']."'
        where uye_id='$uye_id'");

if(mysqli_affected_rows($con))

{header("Location:../ayarlar.php?duzenle=ok&uye_id=$uye_id");}
else {header("Location:../ayarlar.php?duzenle=no&uye_id=$uye_id");}
}

if (isset($_POST['sosyalduzenle'])) {

    $uye_id=$_POST['uye_id'];
    $sosyalduzenle=mysqli_query(@$con,"UPDATE uyeler set 
        uye_facebook='".@$_POST['uye_facebook']."' , 
        uye_twitter='".@$_POST['uye_twitter']."' ,    
        uye_github='".@$_POST['uye_github']."' , 
        uye_instagram='".@$_POST['uye_instagram']."' 
        where uye_id='$uye_id'");

if(mysqli_affected_rows($con))

{header("Location:../sosyal.php?duzenle=ok&uye_id=$uye_id");}
else {header("Location:../sosyal.php?duzenle=no&uye_id=$uye_id");}
}

if (isset($_POST['avatardegis'])) {

    $uye_id=$_POST['uye_id'];
    $uploads_dir = "uploads/uyefoto";
    @$tmp_name = $_FILES['uyeavatar']["tmp_name"];
    @$name = $_FILES['uyeavatar']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

$avatardegis=mysqli_query(@$con,"UPDATE uyeler set     
        uye_foto='".@$refimgyol."' 
        where uye_id='$uye_id'");
 if (mysqli_affected_rows($con)) {
  header("Location:../avatar.php?avatar=ok&uye_id=".$_POST['uye_id']."");
 }
 else {
  header("Location:../avatar.php?avatar=no&uye_id=".$_POST['uye_id']."");
 }
}

if (isset($_POST['ilanver'])) {
 $uyeekle=mysqli_query(@$con, "INSERT INTO ilanlar
    (ilan_ad,ilan_fiyat,ilan_fiyat2,ilan_aciklama,ilan_tip,ilan_ustid,ilan_katid) VALUES 
   ('".@$_POST['ilan_ad']."',
    '".@$_POST['ilan_fiyat']."',
    '".@$_POST['ilan_fiyat2']."',
    '".@$_POST['ilan_aciklama']."',
    '".@$_POST['ilan_tip']."',
    '".@$_POST['ilan_ustid']."',
    '".@$_POST['ilan_katid']."')");
 if (mysqli_affected_rows($con)) {
  header("Location:../index.php?durum=ok");
 }
 else {
  header("Location:../index.php?durum=no");
 }
}

if (isset($_POST['ilanduzenle'])) {

    $ilan_id=$_POST['ilan_id'];
    $ilanduzenle=mysqli_query(@$con,"UPDATE ilanlar set 
        ilan_ad='".@$_POST['ilan_ad']."' , 
        ilan_tip='".@$_POST['ilan_tip']."' ,    
        ilan_katid='".@$_POST['ilan_katid']."' , 
        ilan_aciklama='".@$_POST['ilan_aciklama']."' , 
        ilan_fiyat='".@$_POST['ilan_fiyat']."' , 
        ilan_fiyat2='".@$_POST['ilan_fiyat2']."'
        where ilan_id='$ilan_id'");

if(mysqli_affected_rows($con))

{header("Location:../ilanduzenle.php?duzenle=ok&ilan_id=$ilan_id");}
else {header("Location:../ilanduzenle.php?duzenle=no&ilan_id=$ilan_id");}
}

if ($_GET['ilannsil']=="ok") {
    $uyesil=mysqli_query($con, "DELETE from ilanlar where ilan_id='".$_GET['ilan_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:../ilanlarim.php?silme=ok");
}
}

if (isset($_POST['teklifver'])) {
 $teklifver=mysqli_query(@$con, "INSERT INTO teklif
    (teklif_fiyat,teklif_verenid,teklif_alanid,teklif_sure,teklif_suretip,teklif_ilanid) VALUES 
   ('".@$_POST['teklif_fiyat']."',
    '".@$_POST['teklif_verenid']."',
    '".@$_POST['teklif_alanid']."',
    '".@$_POST['teklif_sure']."',
    '".@$_POST['teklif_suretip']."',
    '".@$_POST['teklif_ilanid']."')");
 if (mysqli_affected_rows($con)) {
  header("Location:../index.php?teklif=ok");
 }
 else {
  header("Location:../index.php?teklif=no");
 }
}

if ($_GET['teklifsil']=="ok") {
    $uyesil=mysqli_query($con, "DELETE from teklif where teklif_id='".$_GET['teklif_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:../teklifler.php?silme=ok");
}
}

if($_GET['teklifonayla']=="ok") {
    $uyeonayla=mysqli_query(@$con,"UPDATE teklif set 
    teklif_sahipid='".@$_GET['teklif_sahipid']."' , 
    teklif_durum='1' where teklif_id='".$_GET['teklif_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:../teklifler.php?onay=ok");}
else { header("Location:../teklifler.php?onay=no");}
}

if($_GET['tekliftamamla']=="ok") {
    $uyeonayla=mysqli_query(@$con,"UPDATE teklif set 
    teklif_tamam='1',
    teklif_durum='0' where teklif_id='".$_GET['teklif_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:../islerim.php?onay=ok");}
else { header("Location:../islerim.php?onay=no");}
}

if($_GET['teklifiptal']=="ok") {
    $uyeonayla=mysqli_query(@$con,"UPDATE teklif set 
    teklif_sahipid='0' , 
    teklif_durum='0' where teklif_id='".$_GET['teklif_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:../tekliflerim.php?onay=ok");}
else { header("Location:../tekliflerim.php?onay=no");}
}

if ($_GET['uyesil']=="ok") {
    $uyesil=mysqli_query($con, "DELETE from uyeler where uye_id='".$_GET['uye_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:yetkisizuyeler.php?silme=ok");
}
}

if($_GET['uyeyetkilendir']=="ok") {
    $uyeyetkilendir=mysqli_query(@$con,"UPDATE uyeler set 
    uye_yetki='1' where uye_id='".$_GET['uye_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:yetkisizuyeler.php?onay=ok");}
else { header("Location:yetkisizuyeler.php?onay=no");}
}

if($_GET['uyeonayla']=="ok") {
    $uyeonayla=mysqli_query(@$con,"UPDATE uyeler set 
    uye_tip='1' , 
    uye_basvuru='0' where uye_id='".$_GET['uye_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:basvuru.php?onay=ok");}
else { header("Location:basvuru.php?onay=no");}
}

if($_GET['uyereddet']=="ok") {
    $uyereddet=mysqli_query(@$con,"UPDATE uyeler set 
    uye_tip='0' , 
    uye_basvuru='0' where uye_id='".$_GET['uye_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:basvuru.php?red=ok");}
else { header("Location:basvuru.php?red=no");}
}

if (isset($_POST['uyeduzenle'])) {

    $uye_id=$_POST['uye_id'];

    $uyeduzenle=mysqli_query(@$con,"UPDATE uyeler set 
        uye_ad='".@$_POST['uye_ad']."' ,  
        uye_onay='".@$_POST['uye_onay']."' ,      
        uye_tip='".@$_POST['uye_tip']."' , 
        uye_mail='".@$_POST['uye_mail']."' , 
        uye_instagram='".@$_POST['uye_instagram']."' , 
        uye_twitter='".@$_POST['uye_twitter']."',
        uye_facebook='".@$_POST['uye_facebook']."' , 
        uye_github='".@$_POST['uye_github']."' 
        where uye_id='$uye_id'");

if(mysqli_affected_rows($con))

{header("Location:uye-duzenle.php?duzenle=ok&uye_id=$uye_id");}
else {header("Location:uye-duzenle.php?duzenle=no&uye_id=$uye_id");}
}
?>