<?php 
include 'header.php';
include 'sidebar.php';
?>

        <div class="content-wrapper">
          <h1 class="page-title">Proje 2</h1>
          <div class="card">

            <div class="card-body">

              <h2 class="card-title">Yetkili Üyeler</h2>

              <div class="row">
                <div class="col-12">

                  <table id="order-listing" class="table" cellspacing="0" width="100%">

                    <thead>

                     <tr>
                          <th style="width: 20%; color:red; text-align: center;">İlan Adı</th>
                          <th style="width: 20%">İlan Veren Adı/Soyadı</th>
                          <th style="width: 20%">İşi Yapan</th>
                          <th style="width: 20%">İlan Tarihi</th>
                          <th style="width: 20%">Durum</th>
                        </tr>
                    </thead>
                    
                    <tbody>

                      <?php
$sor=mysqli_query($con,"SELECT * FROM teklif INNER JOIN uyeler ON teklif.teklif_verenid = uyeler.uye_id INNER JOIN ilanlar ON teklif.teklif_ilanid = ilanlar.ilan_id");
$cek=mysqli_fetch_assoc($sor);
?>

<?php $teklifsor="SELECT * FROM teklif INNER JOIN uyeler ON teklif.teklif_alanid = uyeler.uye_id INNER JOIN ilanlar ON teklif.teklif_ilanid = ilanlar.ilan_id";
                              $sql=mysqli_query($con,$teklifsor);
                              while($teklifcek=mysqli_fetch_assoc($sql)){ ?>
                         
                                <?php if ($teklifcek['teklif_durum']=="1"){ ?>
                        <tr class="">
                          <td><?php echo $teklifcek['ilan_ad'];?></td>
                          <td><?php echo $teklifcek['uye_ad'];?></td>
                          <td><?php echo $cek['uye_ad'];?></td>

                          <td><?php echo $teklifcek['ilan_tarih'];?></td>
                          <td>Yapılıyor.</td>
                        </tr>  

 <?php } ?> 

                        <?php } ?>                   
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<?php include 'footer.php'; ?>

        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
    <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/zoom/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jul 2020 11:49:19 GMT -->
</html>
