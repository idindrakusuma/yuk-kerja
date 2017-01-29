      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel" style="margin-top:-3em;">
            <div class="pull-left image">
              <img src="<?=base_url(); ?>assets/dist/img/12b.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Indra Kusuma</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <hr class="hr">
            <li class=""><a href="<?=base_url(); ?>main"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
            <li class=""><a href="<?=base_url(); ?>profile"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-suitcase"></i> <span>Lowongan Pekerjaan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url(); ?>lowongan/aktif"><i class="fa fa-arrow-circle-right"></i> Daftar Lowongan</a></li>
                <li><a href="<?=base_url(); ?>lowongan/nearby" onclick="return confirm('Fitur Nearby Jobs membutuhkan Akses GPS (Global Positioning System), Berikan Izin ?')"><i class="fa fa-arrow-circle-right"></i> Nearby Jobs</a></li>
                <li><a href="<?=base_url(); ?>lowongan/rekomendasi"><i class="fa fa-arrow-circle-right"></i> Rekomendasi</a></li>
              </ul>
              
              
            </li>

              <li class=""><a href="<?=base_url(); ?>event"><i class="fa fa-calendar"></i> <span>Event</span></a></li>
              <hr class="hr">
              
              <li class=""><a href="<?=base_url(); ?>main/feedback"><i class="fa fa-question-circle"></i> <span>Umpan Balik</span></a></li>
              <li><a href="<?=base_url(); ?>login/logout" onclick="return confirm('Anda yakin ingin Keluar ?')"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
            </ul>
        </section>
        <!-- Small modal -->        <!-- /.sidebar -->
      </aside>

