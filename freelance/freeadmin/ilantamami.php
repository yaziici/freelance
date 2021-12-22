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
                          <th style="width: 20%">Üye Mail</th>
                          <th style="width: 20%">İlan Tarihi</th>
                          <th style="width: 20%">Üye Düzenle</th>
                        </tr>
                    </thead>
                    
                    <tbody>

                        <?php 
$ilansor="SELECT * FROM uyeler INNER JOIN ilanlar ON uyeler.uye_id = ilanlar.ilan_ustid";
$sql=mysqli_query($con,$ilansor);
while($ilancek=mysqli_fetch_assoc($sql)){ ?>

                         

                        <tr class="">
                          <td><?php echo $ilancek['ilan_ad'];?></td>
                          <td><?php echo $ilancek['uye_ad'];?></td>
                          <td><?php echo $ilancek['uye_mail'];?></td>

                          <td><?php echo $ilancek['ilan_tarih'];?></td>
                          <td>

<a href="islem.php?uye_id=<?php echo $uyecek['uye_id']; ?>&uyesil=ok" onclick="return confirmDel();"><button style="width: 49%" class="btn btn-danger btn-sm">Kaldır</button></a>

</form>
                          
                            </td>
                        </tr>  



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
