<?php 
include 'header.php'; 
include 'sidebar.php'; 
?>
<?php 


?>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;text-shadow: 3px 1px 9px;">Proje 2</h1>
            <h3 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;">Üyeler</h1>
<div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Üye Listesi</h2>
                                  
                   
                  <hr>






                     <?php if (@$_GET['onay']=="ok") { ?>
                         <div class="alert alert-success" role="alert">
                          <strong>BAŞARILI!</strong> Üye İşverenlik Başvurusu Onaylandı.
                         </div>
                    <?php } ?>
                      <?php if (@$_GET['red']=="ok") { ?>
                         <div class="alert alert-danger" role="alert">
                          <strong>BAŞARILI!</strong> Üye İşverenlik Başvurusu Reddedildi.
                         </div>
                    <?php } ?>

                     <?php if (@$_GET['silme']=="ok") { ?>
                         <div class="alert alert-success" role="alert">
                           <strong>BAŞARILI!</strong> Üye Silindi.
                           </div>
                     <?php } ?>
                      
                      <?php if (@$_GET['duzenle']=="ok") { ?>

                          <div class="alert alert-success" role="alert">
                           <strong>BAŞARILI!</strong> Üye Düzenlendi.
                          </div>
                      <?php } ?>



                  <div class="table-responsive ps ps--theme_default" data-ps-id="1c05b7b3-d04f-70fa-e18b-35ba99c5bdd4">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr>
                          <th style="width: 20%; color:red; text-align: center;">Üye Avatar</th>
                          <th style="width: 20%">Üye Adı/Soyadı</th>
                          <th style="width: 20%">Üye Mail</th>
                          <th style="width: 20%">Üye Onay Durumu</th>
                          <th style="width: 20%">Üye Düzenle</th>
                        </tr>
                      </thead>
                      <tbody>

                      	<?php
                         $uyesor=mysqli_query($con,"select * from uyeler order by uye_id ASC");
                         while ($uyecek=mysqli_fetch_assoc($uyesor)) {
                         ?>

                         <?php if ($uyecek['uye_basvuru']== 1 AND $uyecek['uye_tip']== 0){ ?>

                        <tr class="">
                          <td><img style="width: 100px; height: 60px;" src="<?php echo $uyecek['uye_foto'];?>"></td>
                          <td><?php echo $uyecek['uye_ad'];?>	
                              <?php echo $uyecek['uye_soyad'];?></td>
                          <td><?php echo $uyecek['uye_mail'];?></td>
                          <td><?php if ($uyecek['uye_onay']== 0){ ?>
<p style="color: red; ">Onaylı Üye Değil</p>
<?php } else { ?> <p style="color: green;"> Onaylı</p> <?php } ?> </td>
                          <td>

<a href="islem.php?uye_id=<?php echo $uyecek['uye_id']; ?>&uyereddet=ok" onclick="return confirmDel();"><button style="width: 100%" class="btn btn-danger btn-sm">Reddet</button></a>

<a href="islem.php?uye_id=<?php echo $uyecek['uye_id']; ?>&uyeonayla=ok" onclick="return confirmDel(asd);"><button style="width: 100%; margin-top: 2%;" class="btn btn-success">İşverenlik Başvurusunu Kabul Et</button></a>
</form>
                          
                          	</td>
                        </tr>  

<?php } else {} ?> 

                        <?php } ?>                   
                      </tbody>
                    </table>
                  <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                    <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                  </div>
                      <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                        <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
            
          </div>
        </div>


 <?php include 'footer.php';?>