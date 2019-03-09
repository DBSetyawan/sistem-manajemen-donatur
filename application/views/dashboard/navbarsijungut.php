<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" title="Dashboard"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                        <i>
                        <a href="">
                    <img class="navbar-brand active" style="float:right;" src="<?php echo base_url('/assets/logo.png')?>">
                      </a>
                      </i>
                    </li>
                       <!-- <li>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="active" style="font-family:Bradley Hand ITC;">Data Master</i>
                                  <ul class="dropdown-menu">
                                        <li >
                                           <a class="active" style="font-family:Bradley Hand ITC;" href="#tbhdonatur">Data Donatur</a>
                                        </li>
                                  </ul>
                            </a>
                        </li> -->
                         <li>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="active" style="font-family:Bradley Hand ITC;">Data Transaksi</i>
                                  <ul class="dropdown-menu">
                                        <li >
                                           <a class="active" style="font-family:Bradley Hand ITC;" href="#tbhdonatur">Transaksi Donasi Donatur</a>
                                        </li>
                                   </ul>
                            </a>
                        </li>
                     <li>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="active" style="font-family:Bradley Hand ITC;">Laporan Transaksi</i>
                                  <ul class="dropdown-menu">
                                   <!--  <li >
                                          <a class="active" style="font-family:Bradley Hand ITC;" href="#Laporan">Laporan Dana Donasi Donatur</a>
                                    </li> -->
                                      <li>
                                   <a class="active" style="font-family:Bradley Hand ITC;" href="#signin" data-toggle="modal" data-target="#mode_grafik">Perolehan Program Donasi</a>
                                </li>
                                  </ul>
                            </a>
                        </li>
                         <li>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="active" style="font-family:Bradley Hand ITC;">Help Desk</i>
                                  <ul class="dropdown-menu">
                                        <li>
                                           <a class="active" style="font-family:Bradley Hand ITC;" href="#helpdesk" data-toggle="modal" data-target="#pemakaians">User Guide
                                           </a>
                                       </li>
                                  </ul>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li> 
                           <a>
                          <?php echo '<div style="font-family:Bradley Hand ITC">Masuk Sebagai :'.$pengguna->login.'</div>';?>
                               <?php echo $kodekawasan; ?>
                            </a>
                        </li>
                        <li>
                           <a href="javascript:void(0)" title="Log out" style="font-family:Bradley hand ITC" onclick="metu()">
                                Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>