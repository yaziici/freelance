<?php 
include 'header.php'; 
include 'sidebar.php'; 
?>
<?php 


?>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;text-shadow: 3px 1px 9px;">Proje 2</h1>
            <h3 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;">Genel Ayarlar</h1>
          <div class="row grid-margin">
            <div style="width: 100%;">
              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-12">
                      <div class="custom-legend-container small-chart-container">
                                                      <?php 

                              if (@$_GET['durum']=="ok") { ?>

                                <div class="alert alert-success" role="alert">
                                 <strong>BAŞARILI!</strong> Değişiklikleriniz kaydedildi.
                                </div>
<?php 
                              }



                               ?>
                        <div class="card-body">                          
                          <ul class="nav nav-tabs" id="Demo-tab1" role="tablist">


                              <li class="nav-item">


                                  <a class="nav-link active" data-toggle="tab" href="#GenelAyarlar" role="tab" aria-expanded="true">Genel Ayarlar</a>
                              </li>
                                                      
                          </ul>



                          <!-- Tab panes -->
                          <div class="tab-content">
                              <div class="tab-pane pt-4 active" id="GenelAyarlar" role="tabpanel" aria-expanded="true">
                                <form name="ayar_genel" action="islem.php" method="POST">
                                 <div class="form-group">
                                  <label>Site Başlığı</label>
                                  <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek ['ayar_title']; ?> "/>
                                </div>
                                <div class="form-group">
                                  <label>Mail Adresi</label>
                                  <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek ['ayar_mail']; ?> "/>
                                </div>
                                <div class="form-group">
                                  <label>Site Açıklaması</label>
                                  <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek ['ayar_description']; ?> "/>
                                </div>
                                <div class="form-group">
                                  <label>Site Anahtar Kelimeleri</label>
                                  <input class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek ['ayar_keywords']; ?> "/>
                                </div>
                                <input class="btn btn-success" style="width: 100%" type="submit" name="ayar_genel" value="Ayarları Kaydet"/>
                              </form>
                              </div>
                          </div>
                      </div>
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
