<?php 
include 'header.php'; 
include 'sidebar.php'; 

$uye_id=$_GET['uye_id'];
$uyesor=mysqli_query($con,"select * from uyeler where uye_id='$uye_id'");
$uyecek=mysqli_fetch_assoc($uyesor);
?>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;text-shadow: 3px 1px 9px;">Proje 2</h1>
            <h3 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;">Üye Düzenliyorsunuz</h1>
          <div class="row grid-margin">
            <div style="width: 100%;">
              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-12">
                      <div class="custom-legend-container small-chart-container">
                           
                           <?php if (@$_GET['duzenle']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Üye Düzenlendi.
                            </div>
                          <?php } ?>

                                
                                <form name="uyeduzenle" action="islem.php" method="POST">
                                  
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="row">
                                   
                            <div class="col-lg-6">
                                 <div class="form-group">
                                  <label>Üye Adı</label>
                                  <input class="form-control" type="text" name="uye_ad" value="<?php echo $uyecek['uye_ad']; ?>">
                                </div>
                                 <div class="form-group">
                                  <label>Üye Mail</label>
                                  <input readonly class="form-control" type="text" name="uye_mail" value="<?php echo $uyecek['uye_mail']; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Üye Onay Durumu (Mavi Tik)</label>

                                  <select style="width: 20%" name="uye_onay" id="uye_onay">
                                    
                                    <option value="<?php echo $uyecek['uye_onay'];?>"><?php if ($uyecek['uye_onay']== 0){ ?>
Onaylı Değil <?php } else { ?>Onaylı <?php } ?></option>
                                    <option value="1">Onaylı</option>
                                    <option value="0">Onaylı Değil</option>
                                    
                                  </select>


                                  <input readonly class="form-control" type="text" value="<?php if ($uyecek['uye_onay']== 0){ ?>
Onaylı Değil
<?php } else { ?>Onaylı <?php } ?>">
                                </div>
                                <div class="form-group">
                                  <label>Üyelik Tipi (Çalışan İşveren)</label>

                                  <select style="width: 20%" name="uye_tip" id="uye_tip">
                                    
                                    <option value="<?php echo $uyecek['uye_tip'];?>"><?php if ($uyecek['uye_tip']== 0){ ?>
Çalışan <?php } else { ?>İşveren <?php } ?></option>
                                    <option value="1">İşveren</option>
                                    <option value="0">Çalışan</option>
                                    
                                  </select>


                                  <input readonly class="form-control" type="text" value="<?php if ($uyecek['uye_tip']== 0){ ?>
Çalışan
<?php } else { ?>İşveren <?php } ?>">
                                </div>

                            </div>

                            <div class="col-lg-6">
                                 <div class="form-group">
                                  <label>Github</label>
                                  <input class="form-control" type="text" name="uye_github" value="<?php echo $uyecek['uye_github']; ?>">
                                </div>
                                 <div class="form-group">
                                  <label>İnstagram</label>
                                  <input class="form-control" type="text" name="uye_instagram" value="<?php echo $uyecek['uye_instagram']; ?>">
                                </div>
                                 <div class="form-group">
                                  <label>Twitter</label>
                                  <input class="form-control" type="text" name="uye_twitter" value="<?php echo $uyecek['uye_twitter']; ?>">
                                </div>
                                 <div class="form-group">
                                  <label>Facebook</label>
                                  <input class="form-control" type="text" name="uye_facebook" value="<?php echo $uyecek['uye_facebook']; ?>">
                                </div>
                                
                                
                              </div>

                                    </div>
                                  </div>
                                </div>
                              

                                <input type="hidden" name="uye_id" value="<?php echo $uyecek['uye_id'];?>">
                                <input class="btn btn-success" style="width: 100%" type="submit" name="uyeduzenle" value="Üye Düzenle"/>
                             
                                </form> 
                              





                        
       <!-- <div class="content-wrapper" style="
    width: 100%;
    margin-left: 0;
">
          
          <div class="row grid-margin">
            <div class="col-lg-12">
           
               
                 
                  <form class="forms-sample">
                    <div class="form-group">
                      <label>Site Başlığı</label>
                      <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek ['ayar_title']; ?> "/>
                    </div>
                    <div class="form-group">
                      <label>Site Açıklaması</label>
                      <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek ['ayar_description']; ?> "/>
                    </div>
                    <div class="form-group">
                      <label>Site Anahtar Kelimeleri</label>
                      <input class="form-control" type="text" name="ayar_keywords " value="<?php echo $ayarcek ['ayar_keywords']; ?> "/>
                    </div>
                    <div class="form-group">
                      <label>Telefon Numarası</label>
                      <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek ['ayar_telefon']; ?> "/>
                    </div>
                     
                     <div class="form-group">
                      <label>Facebook Adresi</label>
                      <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek ['ayar_facebook']; ?> "/>
                    </div>
                     <div class="form-group">
                      <label>İnstagram Adresi</label>
                      <input class="form-control" type="text" name="ayar_instagram" value="<?php echo $ayarcek ['ayar_instagram']; ?> "/>
                    </div>
                     <div class="form-group">
                      <label>Alt Bölüm</label>
                      <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek ['ayar_footer']; ?> "/>
                    </div>
                     <div class="form-group">
                      <label>Adres</label>
                      <input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek ['ayar_adres']; ?> "/>
                    </div>
                     <div class="form-group">
                      <label>Mail Adresi</label>
                      <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek ['ayar_mail']; ?> "/>
                    </div>
                    <div class="form-group">
                      <input class="btn btn-success" style="width: 100%" type="submit" name="ayar_kaydet" value="Ayarları Kaydet"/>
                    </div>
                  </form> 
                
              </div>
            </div>
          </div> -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>






        

 <?php include 'footer.php';?>
