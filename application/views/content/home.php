        <!-- Main content -->
        <section class="content" style="margin-bottom:-6.5em;">
          <!-- Small boxes (Stat box) -->
          <div class="row wow animated fadeInUp">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>173</h3>
                  <p>Lowongan Aktif</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?=base_url();?>lowongan/aktif" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>13</h3>
                  <p>Rekomendasi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?=base_url();?>lowongan/rekomendasi" class="small-box-footer">Selangkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
        </section><!-- /.content -->

        <div class="container wow animated fadeInUp">
           <!-- LOWONGAN  -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Lowongan terbaru</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="<?=base_url(); ?>assets/img/fav.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="<?=base_url(); ?>lowongan/detail" class="product-title">Web Programmer <span class="label label-info pull-right">SMK/D3/S1</span></a>
                        <span class="product-description">
                          Dibutuhkan segera web programmer area semarang
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="<?=base_url(); ?>assets/img/fav.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Marketing Manager <span class="label label-info pull-right">S1 Ekonomi</span></a>
                        <span class="product-description">
                          Dibutuhkan segera marketing manager bank BCA..
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?=base_url();?>lowongan/aktif" class="uppercase">Lowongan Terlengkap <i class="fa fa-arrow-circle-right"></i></a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->

            <!-- Event Terbaru -->
            <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Event Terdekat</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="<?=base_url(); ?>assets/img/fav.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="<?=base_url();?>event/detail" class="product-title">Jobfair15 UDINUS <span class="label label-warning pull-right">16 April 2016</span></a>
                        <span class="product-description">
                          Jangan lewatkan jobfair udinus tanggal 16&17 april
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="<?=base_url(); ?>assets/img/fav.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Get Your Career <span class="label label-warning pull-right">20 April 2016</span></a>
                        <span class="product-description">
                          Jadilah pekerja yang baik dengan mengikuti serangkaian event 
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?=base_url(); ?>event" class="uppercase">Event Terlengkap <i class="fa fa-arrow-circle-right"></i></a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
        </div>