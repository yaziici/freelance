<?php 


  ?>

 <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <!--main pages start-->
                <li class="nav-item nav-category">
                    <span class="nav-link">General</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index">
                        <i class="mdi mdi-home"></i>
                        <span class="menu-title">Anasayfa</span>
                    </a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="ayarlar">
                        <i class="mdi mdi-settings"></i>
                        <span class="menu-title">Ayarlar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="uyelertamami">
                        <i class="mdi mdi-settings"></i>
                        <span class="menu-title">Tüm Üyeler</span>
                    </a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="yetkisizuyeler">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="menu-title">Yetkisiz Üyeler</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="yetkiliuyeler">
                        <i class="mdi mdi-settings"></i>
                        <span class="menu-title">Yetkili Çalışanlar</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="basvuru">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="menu-title">İşverenlik Başvurusu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="isvrnuye">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="menu-title">İşveren Listesi</span>
                    </a>
                </li>
				
				                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu" aria-expanded="false" aria-controls="collapseExample">
                        <i class="mdi mdi-buffer"></i>
                        <span class="menu-title">İlanlar</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="collapse" id="uiBasicSubmenu">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="ilantamami">Tüm İlanlar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ilanyapimda">Yapımdaki İlanlar</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="ilanbitti">Tamamlanan İlanlar</a>
                            </li>                             
                        </ul>
                    </div>
                </li>
                


				
                
            </ul>
        </nav>

        <!-- partial -->