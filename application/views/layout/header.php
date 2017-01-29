      <header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top navbar-fixed-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu2">
              <ul class="nav navbar-nav">
                <li class="logo-baru">
                <a href="#" data-toggle="offcanvas" role="button"><?php echo $var_page; ?></a>
                </li>
              </ul>
            </div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">7</span>
                </a>
                <ul class="dropdown-menu wow animated fadeInUp">
                  <li class="header">Anda memiliki 7 notifikasi</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-paper-plane text-green"></i> Anda melamar pekerjaan Web Programing Career Center
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Anda mengubah profil
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-calendar text-blue"></i> Anda bergabung ke Jobfair Udinus
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-paper-plane text-green"></i> Anda melamar di PT Makmur Jaya
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu wow animated fadeInUp">
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <form action="<?=base_url(); ?>lowongan/pencarian" method="get" accept-charset="utf-8">
                      <div class="input-group">
                      <input type="text" name="q" class="form-control" placeholder="Cari Lowongan..">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>