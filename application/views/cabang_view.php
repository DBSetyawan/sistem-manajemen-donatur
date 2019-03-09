<!DOCTYPE html>
<html>
    <head> 
    <link rel="shortcut icon" type="assets" href="<?php echo base_url('assets/zas.png')?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YDSF | CABANG Dashboard</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrapflat.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/select2.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sweetalert.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/select2.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/alerty/alertify.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/alerty/alertify.core.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/alerty/alertify.default.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/typeahead/default.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/typeahead/jquery.autocomplete.css')?>" rel="stylesheet">
    <!--<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>-->
    <!-- HTML5 shim adding Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head> 
    <body onload="displayTime();setInterval('displayTime()', 1000);">
     <div id="preloader">
      <div id="status"></div>
     </div>
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y-m-d", $tanggal);
?>
<!-- System Hari -->
<?php
  $days = date('l');
    switch ($days) {
        case 'Sunday' : $hari = "Ahad"; break;
        case 'Monday' : $hari = "Senin"; break;
        case "Tuesday" : $hari = "Selasa"; break;
        case 'Wednesday' : $hari = "Rabu"; break;
        case 'Thursday' : $hari = "Kamis"; break;
        case 'Friday' : $hari = "Jum'ah"; break;
        case 'Saturday' : $hari = "Sabtu"; break;
      default : $hari = "Error System";
    }
?>
<!-- System Bulan -->
<?php
  $days = date('M');
  $tanggal = date('d');
  $tahun = date('Y');
    switch ($days) {
        case 'Oct' : $bulan = "Oktober"; break;
        case 'Nov' : $bulan = "November"; break;
        case 'Dec' : $bulan = "Desember"; break;
        case 'Jan' : $bulan = "Januari"; break;
        case 'Feb' : $bulan = "Februari"; break;
        case 'Mar' : $bulan = "Maret"; break;
        case 'Apr' : $bulan = "April"; break;
        case 'May' : $bulan = "Mei"; break;
        case 'Jun' : $bulan = "Juni"; break;
        case 'Jul' : $bulan = "Juli"; break;
        case 'Aug' : $bulan = "Agustus"; break;
        case 'Sep' : $bulan = "September"; break;
      default : $bulan = "Error System";
    }
?>
<?php $this->load->view('dashboard/navbar'); ?>
<div class="headerlock">
<?php echo '<div style="font-size:20pt;font-family:Bradley Hand ITC;">'. $hari.', '.$tanggal.' '.$bulan.' '. $tahun.' '.'<font color="#191970">Jam</font>' . ' ' . '<span id="clock"></span>'.'</div>';?> 
</div>
<div class="modal-footer">
    <img style="margin-right:1070px" src="<?php echo base_url('/assets/logo.png')?>">
</div>
<br>
</br>
  </body>
<body>
    <div class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" href="#tbhdonatur">Tambah Master Donatur</a>
  </li>
  <li>
      <a data-toggle="tab" href="#lhtdonatur">Lihat Transaksi Donatur</a>
  </li>
</ul>
<div class="tab-content">
  <div id="lhtdonatur" class="tab-pane fade">
    <br>
    <br>
    </br>
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:auto">Action</th>
                    <th>Kawasan</th>
                    <th>No Donatur</th>
                    <th>Nama Lengkap</th>
                    <th style="width:125px">Alamat</th>
                    <th>Status</th>
                    <th>Petugas</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
                <th style="width:auto">Action</th>
                <th>Kawasan</th>
                <th>No Donatur</th>
                <th>Nama Lengkap</th>
                <th style="width:125px">Alamat</th>
                <th>Status</th>
                <th>Petugas</th>
            </tr>
            </tfoot>
        </table>
  </div>
  <div id="tbhdonatur" class="tab-pane fade in active">
    <br>
    <?php $this->load->view('modal_donatur');?>
  </div>
</div>
</div>
<!-- Transaksi Kegiatan Acara -->
  <div class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" href="#kgt">Transaksi Kegiatan Acara</a>
  </li>
  <li>
      <a data-toggle="tab" href="#lhtkgt">Lihat Transaksi Kegiatan Acara</a>
  </li>
</ul>
<div class="tab-content">
  <div id="lhtkgt" class="tab-pane fade">
    </br>
    <table id="kgtsn" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:auto">Action</th>
                    <th>No Kegiatan</th>
                    <th>Kode Acara</th>
                    <th>Nama Acara</th>
                    <th>Ketua Pelaksana</th>
                    <th style="width:150px">Alamat Kegiatan</th>
                    <th>Jumlah Donasi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
            <th style="width:auto">Action</th>
                    <th>No Kegiatan</th>
                    <th>Kode Acara</th>
                    <th>Nama Acara</th>
                    <th>Ketua Pelaksana</th>
                    <th style="width:150px">Alamat Kegiatan</th>
                    <th>Jumlah Donasi</th>
            </tr>
            </tfoot>
        </table>
  </div>
  <div id="kgt" class="tab-pane fade in active">
    <br>
      <!-- isi modal disini -->
     <?php $this->load->view('modal_kegiatanacara');?>
  </div>
</div>
</div>
<!-- Transaksi Pengelolaan Donasi -->
  <div class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" href="#pgl">Transaksi Pengelolaan Donasi</a>
  </li>
  <li>
      <a data-toggle="tab" href="#lhtpgl">Lihat Transaksi Pengelolaan Donasi</a>
  </li>
</ul>
<div class="tab-content">
  <div id="lhtpgl" class="tab-pane fade">
    </br>
    <table id="pdonasi" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:auto">Action</th>
                    <th>Id Acara</th>
                    <th>Kode Acara</th>
                    <th>Tanggal Acara</th>
                    <th>Dana Acara</th>
                    <th style="width:150px">Disetujui dana sebesar</th>
                    <th>Pihak Pengajuan</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
            <th style="width:auto">Action</th>
                    <th>Id Acara</th>
                    <th>Kode Acara</th>
                    <th>Tanggal Acara</th>
                    <th>Dana Acara</th>
                    <th style="width:150px">Disetujui dana sebesar</th>
                    <th>Pihak Pengajuan</th>
            </tr>
            </tfoot>
        </table>
  </div>
  <div id="pgl" class="tab-pane fade in active">
    <br>
      <!-- isi modal disini -->
    <?php $this->load->view('modal_pengelolaandonasi');?>

  </div>
</div>
</div>
<!-- Transaksi Laporan -->
  <div class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" href="#Laporan">Laporan Pendonatur</a>
  </li>
</ul>
<div class="tab-content">
  <div id="Laporan" class="tab-pane fade in active">
    <br>
      <!-- isi modal disini -->
<?php $this->load->view('laporan_view');?>
  </div>
</div>
</div>
<!-- Transaksi Laporan Pengajuan Acara-->
  <div class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" href="#Laporanacara">Laporan Dana Pengajuan Acara</a>
  </li>
</ul>
<div class="tab-content">
  <div id="Laporanacara" class="tab-pane fade in active">
    <br>
      <!-- isi modal disini -->
<?php $this->load->view('laporan_pengelolaan_view');?>
  </div>
</div>
</div>
<div class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" id="lapso">Laporan Kegiatan Acara</a>
  </li>
</ul>
<div class="tab-content">
  <div id="laporan_kegs" class="tab-pane fade in active">
    <br>
      <!-- isi modal disini -->
<?php $this->load->view('laporan_kegs');?>
  </div>
</div>
</div>
<!-- Master SEC_USERS -->
  <div class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" href="#users">Tambah Master Program</a>
  </li>
  <li>
      <a data-toggle="tab" href="#lhtusers">Lihat Data Program</a>
  </li>
</ul>
<div class="tab-content">
  <div id="lhtusers" class="tab-pane fade">
    </br>
    <table id="programst" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:auto">Action</th>
                    <th>Noid</th>
                    <th>Status</th>
                    <th>Nama Program</th>
                    <th style="width:125px">Harga</th>
                    <th>Id Kelompok</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
            <th style="width:auto">Action</th>
                    <th>Noid</th>
                    <th>Status</th>
                    <th>Nama Program </th>
                    <th style="width:125px">Harga</th>
                    <th>Id Kelompok</th>
            </tr>
            </tfoot>
        </table>
  </div>
  <div id="users" class="tab-pane fade in active">
    <br>
      <!-- isi modal disini -->
    <?php $this->load->view('modal_secusers');?>

  </div>
</div>
</div>
<!-- Master Users -->
  <div id="pusds" class="container">
    <ul class="nav nav-tabs">
  <li class="active">
      <a data-toggle="tab" href="#pusr">Tambah Master Karyawan</a>
  </li>
  <li>
      <a data-toggle="tab" href="#lhtusr">Lihat Data Karyawan</a>
  </li>
</ul>
<div class="tab-content">
  <div id="lhtusr" class="tab-pane fade">
    </br>
    <table id="usrs" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:auto">Action</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th style="width:125px">Email</th>
                    <th>Active</th>
                    <th>Privilages Admin</th>
                    <th>Id Cabang</th>
                    <th>Id Pusat</th>
                    <th>Kode Jungut</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
            <th style="width:auto">Action</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th style="width:125px">Email</th>
                    <th>Active</th>
                    <th>Privilages Admin</th>
                    <th>Id Cabang</th>
                    <th>Id Pusat</th>
                    <th>Kode Jungut</th>
            </tr>
            </tfoot>
        </table>
  </div>
  <div id="pusr" class="tab-pane fade in active">
    <br>
      <!-- isi modal disini -->
    <?php $this->load->view('modal_users');?>

  </div>
</div>
</div>
<!-- Monitoring -->
  <div id="trigger" class="container">
    <ul class="nav nav-tabs">
  <li>
      <a data-toggle="tab" href="#sdcv">Monitoring Donatur Baru</a>
  </li>
  <li>
      <a data-toggle="tab" href="#sdab">Monitoring Donasi Donatur</a>
  </li>
</ul>
<br />
<div class="tab-content">
  <div id="sdcv" class="tab-pane fade">
    </br>
    <table id="mntngpb" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Noid</th>
                    <th>Tanggal</th>
                    <th style="width:139px">Kolom</th>
                    <th style="width:125px">Dari</th>
                    <th>Menjadi</th>
                    <th>Entri Pegawai</th>
                    <th style="width:139px">Last Update</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
                    <th>Noid</th>
                    <th>Tanggal</th>
                    <th style="width:139px">Kolom</th>
                    <th style="width:125px">Dari</th>
                    <th>Menjadi</th>
                    <th>Entri Pegawai</th>
                    <th style="width:139px">Last Update</th>
            </tfoot>
        </table>
  </div>
  <div id="sdab" class="tab-pane fade in active">
     <table id="mntgdnt" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Tanggal</th>
                  <th style="width:139px">Kolom</th>
                  <th style="width:125px">Dari</th>
                  <th>Menjadi</th>
                  <th>Entri Pegawai</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th style="width:139px">Kolom</th>
              <th style="width:125px">Dari</th>
              <th>Menjadi</th>
              <th>Entri Pegawai</th>
            </tfoot>
        </table>
  </div>
</div>
</div>
     <div class="scrollup" href="#">▲<i class="fa fa-angle-double-up" aria-hidden="true"></i></div>
<li>
      <a data-toggle="tab" href="#containers"></a>
  </li>
  <div id="containers">
    </div>
 <div id="containerss">
    </div>
<div>
<br>
<br />
<div class="modal-footer" style="border-top-width:100px">
</div>

        <!-- <h1 style="font-size:20pt">Donatur Yayasan Dana Sosial Al-Falah</h1>
        <h3>Data Donatur</h3>
        <br/>-->
        
        <!-- <button id="btntambah" class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus" disabled="true"></i>Tambahkan Data</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i>Perbarui</button>
        <br/>
        <br/>
        <div class="container">
                <div class="container">
                <div class="panel panel-default">
                  <div class="panel-heading"><b>Filter Donatur</b></div>
                    <div class="panel-body">
                        <div class="col-xs-6">
                        <table class="table table-striped table-bordered">
                         <tr>
                         <td>
                         <form method="POST" action="#" id="donatur">
                         <label>Juru Pungut</label>
                        <div class="row-fluid"> 
                        <div id="combox"> 
                        <select name="jungut" id="jungut" class="form-control">
                       <option value="0">[Pilih Jungut]</option>
                       <?php foreach($qjungut as $rowjungut) {?>
                       <option value="<?=$rowjungut->kodej?>"><?=$rowjungut->kodej .' - '. $rowjungut->name?></option>
                       <?php }?>
                      </select>
                      </form>
                      </div>
                      </div>
                     </td>
                     </tr>
                <tr>
             <td>
     <label>Kawasan</label>
      <select  name="kawasan" id="kawasan" class="form-control">
       <option value="0">[Semua Kawasan]</option>
      </select>
      <br> -->
      <!--<button type="button" class="btn btn-primary">Submit</button>-->
      </br>
     </td>
     </tr>
   </table>
</div>
</br>
</br>
</br>
</br>
</br>
<br>
</div>
<!-- /panel -->
<!-- COMBOBOX -->
        
    </div>
<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/vars.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/select2.full.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/select2.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/highcharts.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/alertify.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery-ui.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.price.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.validate.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
<script src="<?php echo base_url('assets/typeahead/jquery.autocomplete.js')?>"></script>
<style type="text/css">
body{background: #eee url("<?php echo base_url('assets/mtery.png');?>");}
html,body{
    position: relative;
    height: 100%;
}

.mouse {
    display: block;
    margin: 0 auto;
    width: 26px;
    height: 48px;
    border-radius: 12px;
    background-color:transparents;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
    border: 2px solid white;
    position: absolute;
    top: 40px;
    position: absolute;
    left: 51%;
    margin-left: -26px;
}
.mouse__wheel {
    display: block;
    margin: 6px auto;
    width: 3px;
    height: 3px;
    border-radius: 4px;
    background-color:#222;
    border: 1px solid transparent;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: scroll;
    animation-name: scroll;
}
@keyframes scroll {
  0% {
    opacity: 1;
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    transform: translateY(14px);
  }
}



#section-1{
    height:50px;
    width:100%;
    background-color:#2196f3;
}
#blank{
    height:1200px;
}

#section-2{
    height:50px;
    width:100%;
    background-color:#ff5722;
}

/*BOTTOM TO - TOP*/

.scrollup{
font-size: 40px;color: #2196F3;
padding: 6px;
width: 30px;
height: 30px;
position: fixed;
bottom: 50px;
right:30px;
cursor: pointer;
}

.login-container{
    position: relative;
    width: 300px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 150px;height: 150px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
    background:url(http://maubelajarapa.com/wp-content/uploads/2014/08/Dumet-School.jpg);
  background-position:-70px -30px;
  
}

.form-box input{
    width: 100%;
    padding: 10px;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}


.pswd{
    position: relative;
}

.pswd .glyphicon,#password2 .glyphicon {
    display:none;
    right:1px;
    position: absolute;
    top: 12px;
    cursor:pointer;
}

     .error{
        color: black;
     }

     .headerlock{
        margin-left:890px
     }

     /*
      #page-loader {
        position:fixed !important;
        position:absolute;
        top:0;
        right:0;
        bottom:0;
        left:0;
        z-index:999999;
        background: #000 url("http://4.bp.blogspot.com/-39XJmVYPlVw/VA16p37GXCI/AAAAAAAADZA/josfLBxhobs/s1600/loading10.gif") no-repeat 50% 50%;
        padding:1em 1.2em;
        display:none
        }
      */

     #preloader {
        position:fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        background-color:#ffffff; /* change if the mask should have another color then white */
        z-index:99; /* makes sure it stays on top */
       }

       #status {
        width:200px;
        height:200px;
        position:absolute;
        left:50%; /* centers the loading animation horizontally one the screen */
        top:50%; /* centers the loading animation vertically one the screen */
        background-image:url("<?php echo base_url('assets/updateimg.gif');?>"); /* path to your loading animation */
        background-repeat:no-repeat;
        background-position:center;
        margin:-100px 0 0 -100px; /* is width and height divided by two */
       }

   </style>
<script type='text/javascript'>

   $(document).ready(function(){
  // Add smooth scrolling to all links
  $(".mouse").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});



$('.scrollup').click(function (){
$("html,body").animate({
scrollTop: 0
}, 1000);
return false;
});

//bottom to top

// fadeIn fadeOut
$(window).scroll(function () {
if ($(this).scrollTop() > 400) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});

        var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/ydsfku/search',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                autoSelectFirst: true,
                onSelect: function (suggestion) {
                    $('#nm_kawasann').val(''+suggestion.nm_kawasan);
                    $('#almktr').val(''+suggestion.alamat);
                    $('#jupen').val(''+suggestion.kodejgt);
                    $('#alamat').val(''+suggestion.alamat);
                    $('#kodejgt').val(''+suggestion.name); // membuat id 'v_nim' untuk ditampilkan
                }
            });
        });
        
          var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete1').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/ydsfku/search',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                autoSelectFirst: true,
                onSelect: function (suggestion) {
                    $('[name="nm_kawasann1"]').val(suggestion.nm_kawasan);
                    $('#almktr1').val(''+suggestion.alamat);
                    $('#jupen1').val(''+suggestion.kodejgt);
                    $('#alamat1').val(''+suggestion.alamat);
                    $('#kodejgts').val(''+suggestion.name); // membuat id 'v_nim' untuk ditampilkan
                }
            });
        });

         var site = "<?php echo site_url();?>";
         $(function(){
            $('.autocompletecr1').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/ydsfku/cariketua',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                autoSelectFirst: true,
                onSelect: function (suggestion) {
                    $('[name="kplk1"]').val(suggestion.name);
                    $('#kplk1').val(''+suggestion.name);
                    
                }
            });
        });
        
        var site = "<?php echo site_url();?>";
         $(function(){
            $('.autocompletecari').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/ydsfku/cariketua',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                autoSelectFirst: true,
                onSelect: function (suggestion) {
                    $('[name="kplk"]').val(suggestion.name);
                    $('#kplk').val(''+suggestion.name);
                    
                }
            });
        });
        $("#pswd").on("keyup",function(){
    if($(this).val())
        $(".glyphicon-eye-open").show();
    else
        $(".glyphicon-eye-open").hide();
    });

$(".glyphicon-eye-open").mousedown(function(){
                $("#pswd").attr('type','text');
            }).mouseup(function(){
              $("#pswd").attr('type','password');
            }).mouseout(function(){
              $("#pswd").attr('type','password');
            });
    </script>
    <script type="text/javascript">
      /* $(function () {
  $('#containerss').highcharts({
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false
    },
    title: {
      text: '<div style="font-family:Bradley Hand ITC;font-size:28pt">Perolehan Donasi Program Amal Yayasan Dana Sosial Al-Falah 2017</div>'
    },
    tooltip: {
      pointFormat: '{series.name} Saldo akhir: Rp <b>{point.y:,.0f},-</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %',
          style: {
            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
          }
        }
      }
    },
    series: [{
      type: 'pie',
      name: 'Jumlah Perolehan Donasi',
      data: [
          <?php 
          // data yang diambil dari database
          if(count($graph)>0)
          {
             foreach ($graph as $data) {
             echo "['" .$data->NM_PROGRAM . "'," . $data->besar ."],\n";
             }
          }
          ?>
      ]
    }]
  });
});*/
    </script>
<script type="text/javascript">
var save_method; //for save method string
var table;
var donasit;

function metu()
{
   swal({
    title: "Apakah anda yakin?",
    text: "Apakah anda yakin ingin keluar sekarang?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Keluar Sekarang!",
    closeOnConfirm: false
  },

    function(){
       $(location).attr('href','logout');
    });

}

 function displayTime(){
        //buat object date berdasarkan waktu saat ini
        var time = new Date();
        //ambil nilai jam, 
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = time.getHours() + ""; 
        //ambil nilai menit
        var sm = time.getMinutes() + "";
        //ambil nilai detik
        var ss = time.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }


/*
$(document.body).append('<div id="page-loader"></div>');
  $(window).on("beforeunload", function() {
  $('#page-loader').fadeIn(1000).delay(8000).fadeOut(1000);
});
*/

$(document).ready(function() {
      $('#status').fadeOut();
      $('#preloader').delay(100).fadeOut('slow'); 
      });

function formatCurrency(num) {

  num = num.toString().replace(/\$|\,/g,'');
  if(isNaN(num))

  num = "0";
  sign = (num == (num = Math.abs(num)));
  num = Math.floor(num*100+0.50000000001);
  cents = num%100;
  num = Math.floor(num/100).toString();

  if(cents<10)
  cents = "0" + cents;

  for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
  num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));

  return (((sign)?'':'-') + 'Rp. ' + num + ',' + cents);

}

$(document).ready(function () {

        setTimeout(function () {

 // focus on the txtenclude text area first visible and enabled input field or textarea
        $(":input:visible:enabled").each(function () {

            if ($(this).is('autocomplete1')) {
                $(this).focus();
                return false;
            }

        });

    }, 1000);
        });


function capLock(e){
 kc = e.keyCode?e.keyCode:e.which;
 sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
 if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
  document.getElementById('divMayus').style.visibility = 'visible';
 else
  document.getElementById('divMayus').style.visibility = 'hidden';
}

function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}

$(document).ready(function() {
  $("#form").validate({

    rules: {

      nama: {
        required : true,
        minlength : 5
      },

      almktr: "required",
      nominal: "required",
      kawasann: "required",
      jupen: "required",

    },

    messages: {
      nama: "Mohon entri nama anda dengan benar",
      almktr: "Alamat kantor tidak boleh kosong",
      kawasann: "Kawasan tidak boleh kosong",
      jupen: "Jupen kantor tidak boleh kosong",

      nama: {
        required: "Mohon inputkan nama anda dengan benar",
        minlength: "Minimal 5 Karakter untuk nama."
      },

     },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});

$(document).ready(function() {
  $("#pdons").validate({

    rules: {


      dana_acara: "required",
      dana_persetujuan: "required",
      pihak_pengajuan: "required",
      tanggal_acara: "required",

      },

    messages: {
      dana_acara: "Mohon entri nominal dana dengan benar",
      dana_persetujuan: "Mohon entri nominal dana persetujuan acara dengan benar",
      pihak_pengajuan: "Mohon entri nama pihak pengajuan dengan benar",
      tanggal_acara: "Mohon entri tanggal acara dengan benar"

     
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(pdons) {
      form.submit();
    }
  });
});

function filterGlobal () {
    $('#table').DataTable().search(
        $('#global_filter').val(),
        $('#global_regex').prop('checked'),
        $('#global_smart').prop('checked')
    ).draw();
}
 
function filterColumn ( i ) {
    $('#table').DataTable().column( i ).search(
        $('#col'+i+'_filter').val(),
        $('#col'+i+'_regex').prop('checked'),
        $('#col'+i+'_smart').prop('checked')
    );

    $()[0].reset();
}
 
$(document).ready(function() {
   table = $('#table').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": false, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/ajax_list')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

     $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });
 
    $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );

$(document).ready(function() {
   table = $('#mntgdnt').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/monitoring_ajax_dnt')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

     $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });
 
    $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );

$(document).ready(function() {
   table = $('#mntngpb').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/monitoring_ajax')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

     $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });
 
    $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );

$(document).ready(function() {
  $('#usrs').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/ajax_list_secusers')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

     $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });
 
} );


$(document).ready(function() {
   table = $('#programst').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": false, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/ajax_list_programs')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

     $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });
 
    $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );


$(document).ready(function() {
   donasit = $('#pdonasi').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": false, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/ajax_list_donasi')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

     $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });
 
    $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );

$(document).ready(function() {
  $('#kgtsn').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": false, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/ajax_list_kegiatan')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

     $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });
 
} );

/*
$(document).ready(function () {
        $("#kawasann").select2({
                placeholder: "Please Select",
        });

        $(".js-example-basic-multiple").select2({
              maximumSelectionLength: 1
        });
               
});
*/


/*
$(document).ready(function () {

    $('#form').validate({
        rules: {
            nama: {
                minlength: 2,
                required: true
            },

            email: {
                required: true,
                email: true
            },

            kawasann : {
                required : true,
            },

            almktr : {
                required: true
            },

            jupen : {
                required: true
            },

            message: {
                minlength: 2,
                required: true
            }

        },

        error: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.text('Entry is valid!').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    });

});
*/

/*
$(function(){
      $('#nominal1').priceFormat({
      prefix: 'Rp ',
      thousandsSeparator: '.'
       });
})

$(function(){
      $('#gaji').priceFormat({
      prefix: 'Rp ',
      centsSeparator: ',',
      thousandsSeparator: '.'
       });
})
*/

  $(function(){
 
        $("#gaji").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#nominal1").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

/*
$(function(){
      $('#nominal').priceFormat({
      prefix: 'Rp ',
      centsSeparator: ',',
      thousandsSeparator: '.'
       });
})

$(function(){
      $('#nominal').priceFormat({
      prefix: 'Rp ',
      centsSeparator: ',',
      thousandsSeparator: '.'
       });
})
*/
  $(function(){
 
        $("#nominal").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    }); 

  $(function(){
 
        $("#harga").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#kelompok").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#kelompok1").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

  $(function(){
 
        $("#harga1").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

   $(function(){
 
        $("#nohp").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#telepon").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#dana_persetujuan1").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#dana_acara1").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

     $(function(){
 
        $("#tot_don").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#tonts").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#dana_persetujuan").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

    $(function(){
 
        $("#dana_acara").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

     $(function(){
 
        $("#telprmh").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

     $(function(){
 
        $("#nohp3").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

     $(function(){
 
        $("#faxkantor").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

     $(function(){
 
        $("#teleponktr").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

      $(function(){
 
        $("#besar").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

       $(function(){
 
        $("#kawasann").keyup(function(event){
 
            if(event.which >= 37 && event.which <= 40) return;
             
            // format number
             
            $(this).val(function(index, value) {
             
            return value
             
            .replace(/\D/g, "");  // selain angka akan mengubahnya menjadi value kosong
 
            });
 
        });
 
    });

var hashChangedCount = -2;
$(window).on("hashchange", function () {
    hashChangedCount++;

        if (top.location.hash == "?url=dashboard" && hashChangedCount > 0) {
            console.log("dinon-aktifkan.");
        }

        top.location.hash = '?url=dashboard';

    });

    top.location.hash = "?url=dashboard";

 $(document).ready(function () {
            $('#combox select').change(function () {
                var selJungut = $(this).val();
                console.log(selJungut);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
                $.ajax({
                    url: "./get_kawasan/", //memanggil function controller dari url
                    async: false,
                    type: "POST",     //jenis method yang dibawa ke function
                    data: "jungut="+selJungut,   //data yang akan dibawa di url
                    dataType: "html",
                    
                    success: function(data) {
                        $('#kawasan').html(data);   //hasil ditampilkan pada combobox id=kawasan
                    }
                })
            });
         });

  $(document).ready(function () {
            $('#combo select').change(function () {
                var selkwsn = $(this).val();
                console.log(selkwsn);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
                $.ajax({
                    url: "./get_nmkwsn/", //memanggil function controller dari url
                    async: false,
                    type: "POST",     //jenis method yang dibawa ke function
                    data: "kawasann="+selkwsn,   //data yang akan dibawa di url
                    dataType: "html",
                    
                    success: function(data) {
                        $('#nm_kwsn').html(data);   //hasil ditampilkan pada combobox id=jupen
                    }
                })
            });
         });

       $(document).ready(function () {
            $('#combo select').change(function () {
                var selkwsn = $(this).val();
                console.log(selkwsn);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
                $.ajax({
                    url: "./get_jupen/", //memanggil function controller dari url
                    async: false,
                    type: "POST",     //jenis method yang dibawa ke function
                    data: "kawasann="+selkwsn,   //data yang akan dibawa di url
                    dataType: "html",
                    success: function(data) {
                        $('#jupen').html(data);   //hasil ditampilkan pada combobox id=jupen
                    }
                })
            });
         });

        $(document).ready(function () {
            $('#combo select').change(function () {
                var selkwsn = $(this).val();
                console.log(selkwsn);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
                $.ajax({
                    url: "./get_namakwsn/", //memanggil function controller dari url
                    async: false,
                    type: "POST",     //jenis method yang dibawa ke function
                    data: "kawasann="+selkwsn,   //data yang akan dibawa di url
                    dataType: "html",
                    
                    success: function(data) {
                        $('#nm_kawasann').html(data);   //hasil ditampilkan pada combobox id=jupen
                    }
                })
            });
         });


        $(document).ready(function () {
            $('#combo select').change(function () {
                var a = $(this).val();
                console.log(a);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
                $.ajax({
                    url: "./get_alamat/", //memanggil function controller dari url
                    async: false,
                    type: "POST",     //jenis method yang dibawa ke function
                    data: "kawasann="+a,   //data yang akan dibawa di url
                    dataType: "html",
                    
                    success: function(data) {
                        $('#alamat').html(data);   //hasil ditampilkan pada combobox id=jupen
                    }
                })
            });
         });

         $(document).ready(function () {
            $('#combo select').change(function () {
                var b = $(this).val();
                console.log(b);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
                $.ajax({
                    url: "./get_alamat/", //memanggil function controller dari url
                    async: false,
                    type: "POST",     //jenis method yang dibawa ke function
                    data: "kawasann="+b,   //data yang akan dibawa di url
                    dataType: "html",
                    
                    success: function(data) {
                        $('#almktr').html(data);   //hasil ditampilkan pada combobox id=jupen
                    }
                })
            });
         });
/*
$(document).ready(function() {
    //datatables
    table = $('#table').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": false, //Feature controfl DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('person/ajax_list')?>",
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
        

    });

    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        year: 1980,
        todayBtn: true,
        todayHighlight: true,  
    });

});
*/   

function tutup_guide()
{
      $('#pemakaians').on('hidden.bs.modal', function () {
      location.reload();
      });
}

function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Donatur Baru'); // Set Title to Bootstrap modal title
}

function edit_person(noid)
{
    save_method = 'update';
    $('#forms')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit/')?>/" + noid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
                $('[name="autoid1"]').val(data.noid);
                $('[name="nama1"]').val(data.nama);
                $('[name="tgllahir1"]').val(data.tgllahir);
                $('[name="tempatlahir1"]').val(data.tmplahir);
                $('[name="alamat1"]').val(data.alamat);
                $('[name="email1"]').val(data.email);
                $('[name="almktr1"]').val(data.almktr);
                $('[name="telepon1"]').val(data.telphp);
                $('[name="teleponktr1"]').val(data.tlpktr);
                $('[name="faxkantor1"]').val(data.faxktr);
                $('[name="telprmh1"]').val(data.tlprmh);
                $('[name="carabayar1"]').val(data.carabyr);
                $('[name="rekeningdonatur1"]').val(data.rekdonatur);
                $('[name="bank1"]').val(data.bank);
                $('[name="jk1"]').val(data.sex);
                $('[name="kawasann1"]').val(data.kwsn);
                $('[name="sts1"]').val(data.status);
                $('[name="jupen1"]').val(data.jupen);
                $('[name="info1"]').val(data.info);
                $('[name="worker1"]').val(data.pekerjaan);
                $('[name="jabatan1"]').val(data.jabatan);
                $('[name="hobi1"]').val(data.hobby);
                $('[name="salary1"]').val(data.gaji);                
                $('[name="tglmsk1"]').val(data.tglm); 
                $('[name="ketpas1"]').val(data.ketpasif);
                $('[name="tglap1"]').val(data.tglap);
                $('[name="kolektif1"]').val(data.kolektif);
                $('[name="pendidikan1"]').val(data.pendidikan);
                $('[name="waktutgh1"]').val(data.waktu_tagih);
                $('[name="npwp1"]').val(data.npwp);
                $('[name="nohp1"]').val(data.telphp2);
                $('[name="nohp31"]').val(data.tlphp3);
                $('[name="ket1"]').val(data.ket);
            //$('[name="address"]').val(data.address);
            //$('[name="dob"]').datepicker('update',data.dob);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-titles').text('Edit Donatur'); // Set title to Bootstrap modal title

            $('#dataold').val(JSON.stringify(data));

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ydsf');
        }
    });
}

function edit_programs(program)
{
    save_method = 'update';
    $('#prg')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    //Ajax Load data from ajax

    $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit_programs/')?>/" + program,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
                $('[name="progs"]').val(data.PROG);
                $('[name="statuss"]').val(data.status);
                $('[name="programs"]').val(data.NM_PROGRAM);
                $('[name="harga"]').val(data.HARGA);
                $('[name="kelompok"]').val(data.KELOMPOK);
            //$('[name="dob"]').datepicker('update',data.dob);
            $('#modalprograms').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-titles').text('Edit Program Master'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ydsf');
        }
    });
}

function edit_pdons(idacara)
{
    save_method = 'update';
    $('#pgls')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    //Ajax Load data from ajax

    $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit_pdn/')?>/" + idacara,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
                $('[name="idacara1"]').val(data.idacara);
                $('[name="acara1"]').val(data.acara);
                $('[name="tanggal_acara1"]').val(data.tanggal_acara);
                $('[name="dana_acara1"]').val(data.dana_acara);
                $('[name="dana_persetujuan1"]').val(data.dana_persetujuan);
                $('[name="pihak_pengajuan1"]').val(data.pihak_pengajuan);
            //$('[name="dob"]').datepicker('update',data.dob);
            $('#modalpengelolaandonasi').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-titles').text('Edit Transaksi Donasi'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ydsf');
        }
    });
}

function closer()
{
      $('#fo')[0].reset();
      $('#modalprogram').on('hidden.bs.modal', function () {
      location.reload();
      });
}

function show_program(noid)
{

  $(document).ready(function() {
     $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit_program/')?>/" + noid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

        //datatables
        table = $('#tabelprogram').DataTable({
        "bLengthChange": true,
        "bRetrieve": true, 
        "processing": true, //Feature control the processing indicator.
        "serverSide": false, //Feature controfl DataTables' server-side processing mode.
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ydsfku/list_prog/')?>/" + noid,
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

  }
 
 });
      $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit/')?>/"+noid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            if (data.status) {
                $('[name="autoid1"]').val(data.noid);
            //$('[name="address"]').val(data.address);
            //$('[name="dob"]').datepicker('update',data.dob);
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ydsf');
        }
    });
     
 });

}

function save_kgts()
{
    $('#btnidkgt').text('menyimpan...'); //change button text
    $('#btnidkgt').attr('disabled',false); //set button disable 
    var url;
    url = "<?php echo site_url('ydsfku/ajax_add_kegiatan')?>";
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#pkgt').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                
                alertify.success("Terima kasih."); 
                alertify.alert("Data telah tersimpan.", function (e) { 
                alertify.set({ buttonFocus: "ok" });                
                    if (e) {
                        $(location).attr('href','#pkgt');
                        location.reload();
                        $('#pkgt')[0].reset();
                    }

                });
                
                //$('#modal_donatur').modal('hide');
                //reload_table();
                //$(location).attr('href', 'formdonatur')

            }

            $('#btnidkgt').text('Simpan'); //change button text
            $('#btnidkgt').attr('disabled',false); //set button enable 

        },
        
        error: function (jqXHR, textStatus, errorThrown)
        {
        alertify.error("System menemukan nominal dana yang melebihi jumlah batas entrian anda, periksa kembali entrian anda.")
        alertify.alert("Gagal menyimpan kedalam database.", function (e) {
        alertify.set({ buttonReverse: true });
        alertify.set({ buttonFocus: "ok" });

            if (e) {
                //on click ok, href="?"
            } else{
                //on click cancel, href="?"
            }

        });
        
        $('#btnidkgt').text('Simpan'); //change button text
        $('#btnidkgt').attr('disabled',false); //set button enable 

        }

    });

}

function save_kgtsssg()
{

    $('#updatekgt').text('Mengupdate...'); //change button text
    $('#updatekgt').attr('disabled',true); //set button disable 
    var url;

    if(save_method =='update') {
        url = "<?php echo site_url('ydsfku/ajax_update_kegiatanku')?>";      
    } else {
       url = "<?php echo site_url('ydsfku/ajax_edit_kegiatan')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#kgre').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                              
                $('#modal_editkegiatan').modal('hide');
                //reload_table();
                location.reload();
            }

            $('#updatekgt').text('Update'); //change button text
            $('#updatekgt').attr('disabled',false); //set button enable 

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alertify.alert('Kode Acara Wajib diisi, tidak boleh kosong.');
            $('#updatekgt').text('Update'); //change button text
            $('#updatekgt').attr('disabled',false); //set button enable 

        }
    });
}


function edit_donasi(iddonaturitem)
{
    //save_method = 'update';
    $('#forms')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit_donasi/')?>/" + iddonaturitem,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {   
            $('[name="iddonaturitem"]').val(data.iddonaturitem);
            $('[name="status"]').val(data.ap);
            $('[name="progs"]').val(data.prog);
            $('[name="besar"]').val(data.besar);
            $('[name="bl"]').val(data.sampaiap);
            $('[name="pde"]').val(data.periode);
            $('[name="keterangans"]').val(data.keterangan);
            //$('[name="address"]').val(data.address);
            //$('[name="dob"]').datepicker('update',data.dob);
            $('#modal_donasi').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-titlee').text('Edit Donasi'); // Set title to Bootstrap modal title

            $('#datalama').val(JSON.stringify(data));

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ydsf');
        }
    });
}

function reload_table()
{   
    table.ajax.reload(null,false); //reload datatable ajax 
}


function save()
{
    $('#btnSave').text('menyimpan...'); //change button text
    $('#btnSave').attr('disabled',false); //set button disable 
    var url;
    var tempatlahir = $("#tempatlahir").val();
    var tgllahir = $("#tgllahir").val();
    var telepon = $("#telepon").val();
    var nohp = $("#nohp").val();
    var nohp3 = $("#nohp3").val();
    var teleponktr = $("#teleponktr").val();
    var faxktr = $("#faxktr").val();
    var tlprmh = $("#tlprmh").val();
    var email = $("#email").val();
    var carabayar = $("#carabayar").val();
    var rekeningdonatur = $("#rekeningdonatur").val();
    var bank = $("#bank").val();
    var kolektif = $("#kolektif").val();
    var waktutgh = $("#waktutgh").val();
    var npwp = $("#npwp").val();
    var info = $("#info").val();
    var worker = $("#worker").val();
    var jabatan = $("#jabatan").val();
    var hobi = $("#hobi").val();
    var pendidikan = $("#pendidikan").val();
    var salary = $("#salary").val();
    var keterangan = $("#keterangan").val();
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

/*if(tempatlahir != ' ' || tgllahir != ' ' || telepon != ' ' || nohp != ' ' || nohp3 != ' ' || teleponktr != ' ' || faxktr != ' ' || tlprmh != ' ' || email != ' ' || carabayar != ' ' || rekeningdonatur != ' ' || bank != ' ' || kolektif != ' ' || waktutgh != ' ' || npwp != ' ' || info != ' ' || worker != ' ' || jabatan != ' ' || hobi != ' ' || pendidikan != ' ' || salary != ' ' || keterangan != '')*/

    if (tempatlahir == '' || tgllahir == '' || telepon == '0' || nohp == '0' || nohp3 == '0' || teleponktr == '0' || faxktr == '0'|| tlprmh == '0' || email == '' || carabayar == '00' || rekeningdonatur == '0' || bank == '00' || kolektif == '' || waktutgh == '00' || npwp == '' || info == '00' || worker == '00' || jabatan == '00' || hobi == '00' || pendidikan == '00' || salary == '00' || keterangan == '') {
          alertify.alert('Form ini tidak ada yang boleh kosong, terima kasih.');
          //$('#form')[0].reset(); // reset form on modals
          $('#btnSave').text('Simpan'); //change button text{
          $('#btnSave').attr('disabled',false); //set button disable 
      } else if(atpos < 1 || dotpos < atpos+2 || dotpos+2 >= email.length) {
          alertify.alert("Email tidak valid.");
          $('#btnSave').text('Simpan'); //change button text
          $('#btnSave').attr('disabled',false); //set button disable 
      } else if(tgllahir >= '2006-1-1') {
         alertify.alert("Umur anda belum cukup untuk melakukan transaksi.");
          $('#btnSave').text('Simpan'); //change button text
          $('#btnSave').attr('disabled',false); //set button disable
      } else {
       url = "<?php echo site_url('ydsfku/ajax_add')?>";

         // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                
                alertify.success("Terima kasih."); 
                alertify.alert("Data telah tersimpan.", function (e) { 
                alertify.set({ buttonFocus: "ok" });                
                    if (e) {
                        $(location).attr('href','#tbhdonatur');
                        location.reload();
                        $('#form')[0].reset();
                    }

                });
                
                //$('#modal_donatur').modal('hide');
                //reload_table();
                //$(location).attr('href', 'formdonatur')

            }

            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        },
        
        error: function (jqXHR, textStatus, errorThrown)
        {
        alertify.error("Nama, Alamat Kantor, Kawasan, Jupen dan Nominal wajib diisi.")
        alertify.error("Periksa kembali entrian data anda, Kemungkinan adanya data double dalam database.");
        alertify.alert("Gagal menyimpan kedalam database, file detected error database.", function (e) {
        alertify.set({ buttonReverse: true });
        alertify.set({ buttonFocus: "ok" });

            if (e) {
                //on click ok, href="?"
            } else{
                //on click cancel, href="?"
            }

        });
        
        $('#btnSave').text('Simpan'); //change button text
        $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
  }

}

function save_progrm()
{
    $('#btnProg').text('menyimpan...'); //change button text
    $('#btnProg').attr('disabled',false); //set button disable 
    var url;
    url = "<?php echo site_url('ydsfkuydsfku')?>";
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#prgs').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                
                alertify.success("Terima kasih."); 
                alertify.alert("Data telah tersimpan.", function (e) { 
                alertify.set({ buttonFocus: "ok" });                
                    if (e) {
                        $(location).attr('href','#users');
                        location.reload();
                        $('#prgs')[0].reset();
                    }

                });
                
                //$('#modal_donatur').modal('hide');
                //reload_table();
                //$(location).attr('href', 'formdonatur')

            }

            $('#btnProg').text('Simpan'); //change button text
            $('#btnProg').attr('disabled',false); //set button enable 

        },
        
        error: function (jqXHR, textStatus, errorThrown)
        {
        alertify.error("Nama program, harga, dan kelompok wajib diisi.")
        alertify.error("Periksa kembali entrian data anda, Kemungkinan adanya data yang sama dalam database.");
        alertify.alert("Gagal menyimpan kedalam database.", function (e) {
        alertify.set({ buttonReverse: true });
        alertify.set({ buttonFocus: "ok" });

            if (e) {
                //on click ok, href="?"
            } else{
                //on click cancel, href="?"
            }

        });
        
        $('#btnProg').text('Simpan'); //change button text
        $('#btnProg').attr('disabled',false); //set button enable 

        }

    });

}

function save_secusers_updates()
{

    $('#ubahfusrs').text('Mengupdate...'); //change button text
    $('#ubahfusrs').attr('disabled',true); //set button disable 
    var url;

    if(save_method =='update') {
        url = "<?php echo site_url('ydsfkuydsfku')?>";      
    } else {
       url = "<?php echo site_url('ydsfkuydsfku')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#gfusrs').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                              
                $('#modal_editkaryawan').modal('hide');
                 alertify.alert("Data karyawan telah tersimpan.", function (e) { 
                alertify.set({ buttonFocus: "ok" });                
                    if (e) {
                        $(location).attr('href','#gfusrs');
                        location.reload();
                        $('#gfusrs')[0].reset();
                    }

                });
                //reload_table();
                //location.reload();
            }

            $('#ubahfusrs').text('Update'); //change button text
            $('#ubahfusrs').attr('disabled',false); //set button enable 

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            //alertify.alert('Kode Acara Wajib diisi, tidak boleh kosong.');
            $('#ubahfusrs').text('Update'); //change button text
            $('#ubahfusrs').attr('disabled',false); //set button enable 

        }
    });

}


function save_pdon()
{
    $('#btnidpdon').text('menyimpan...'); //change button text
    $('#btnidpdon').attr('disabled',false); //set button disable 
    var url;
    url = "<?php echo site_url('ydsfku/ajax_add_pdonasi')?>";
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#pdons').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                
                alertify.success("Terima kasih."); 
                alertify.alert("Data telah tersimpan.", function (e) { 
                alertify.set({ buttonFocus: "ok" });                
                    if (e) {
                        $(location).attr('href','#pgl');
                        location.reload();
                        $('#pdons')[0].reset();
                    }

                });
                
                //$('#modal_donatur').modal('hide');
                //reload_table();
                //$(location).attr('href', 'formdonatur')

            }

            $('#btnidpdon').text('Simpan'); //change button text
            $('#btnidpdon').attr('disabled',false); //set button enable 

        },
        
        error: function (jqXHR, textStatus, errorThrown)
        {
        alertify.error("Tanggal acara, Dana persetujuan, Dana Persetujuan, dan Pihak Pengajuan wajib diisi.")
        alertify.error("Kemungkinan ada acara dan tanggal acara yang sama, periksa kembali inputan anda.")
        alertify.error("System menemukan nominal dana yang melebihi jumlah batas entrian anda, periksa kembali entrian anda.")
        alertify.alert("Gagal menyimpan kedalam database.", function (e) {
        alertify.set({ buttonReverse: true });
        alertify.set({ buttonFocus: "ok" });

            if (e) {
                //on click ok, href="?"
            } else{
                //on click cancel, href="?"
            }

        });
        
        $('#btnidpdon').text('Simpan'); //change button text
        $('#btnidpdon').attr('disabled',false); //set button enable 

        }

    });

}

function save_secusers()
{
   $('#btnsecusrs').text('menyimpan...'); //change button text
    $('#btnsecusrs').attr('disabled',false); //set button disable 
    var emails = $("#emaild").val();
    var url;
    var atposs = emails.indexOf("@");
    var dotposs = emails.lastIndexOf(".");
  

    if(atposs < 1 || dotposs < atposs+2 || dotposs+2 >= emails.length) {
          alertify.alert("Email tidak valid.");
          $('#btnsecusrs').text('Simpan'); //change button text
          $('#btnsecusrs').attr('disabled',false); //set button disable
    } else {
    url = "<?php echo site_url('ydsfku/ajax_add_secusers_cabang')?>";

    $.ajax({
        url : url,
        type: "POST",
        data: $('#fusrs').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                
                alertify.success("Terima kasih."); 
                alertify.alert("Data telah tersimpan.", function (e) { 
                alertify.set({ buttonFocus: "ok" });                
                    if (e) {
                        $(location).attr('href','#fusrs');
                        location.reload();
                        $('#fusrs')[0].reset();
                    }

                });
                
                //$('#modal_donatur').modal('hide');
                //reload_table();
                //$(location).attr('href', 'formdonatur')

            }

            $('#btnsecusrs').text('Simpan'); //change button text
            $('#btnsecusrs').attr('disabled',false); //set button enable 

        },
        
        error: function (jqXHR, textStatus, errorThrown)
        {
        alertify.alert("Gagal menyimpan kedalam database.", function (e) {
        alertify.set({ buttonReverse: true });
        alertify.set({ buttonFocus: "ok" });

            if (e) {
               alertify.alert("Peringatan!!! <br> Maaf!!! Anda tidak punya hak akses untuk menjadikan user tersebut menjadi admin cabang.")
                //on click ok, href="?"
            } else{
                //on click cancel, href="?"
            }

        });
        
        $('#btnsecusrs').text('Simpan'); //change button text
        $('#btnsecusrs').attr('disabled',false); //set button enable 

        }

    });
  }
}

function tambah_()
{
    swal({
    title: "Apakah anda yakin?",
    text: "Pastikan program yang anda tambahkan belum ada pada list anda!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Tambahkan!",
    cancelButtonText: "Tidak, Batalkan!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) { 
    $('#btn').text('Menambahkan...'); //change button text
    $('#btn').attr('disabled',true); //set button disable 
    var url;
    var nominal = $("#nominal1").val();

    if(save_method =='add') {
        url = "<?php echo site_url('ydsfku/donasi_update')?>";
    } else {
        url = "<?php echo site_url('ydsfku/add_program')?>";
    } 

    if (nominal == '0' || nominal == '00' || nominal == '000' || nominal == '0000' || nominal == '00000' || nominal == '000000' || nominal == '0000000' || nominal == '000000000' || nominal == '00000000' || nominal == '0000000000' || nominal == '00000000000' || nominal == '00000000000' || nominal == '00000000000' || nominal == '000000000000' || nominal == '0000000000000' || nominal == '00000000000000' || nominal == '000000000000000' )  {
          alertify.alert('Nominal tidak boleh 0.');
          $('#fo')[0].reset(); // reset form on modals
          $('#btn').text('program'); //change button text
          $('#btn').attr('disabled',false); //set button disable 
      } else if( nominal == '') {
          alertify.alert('Nominal tidak boleh kosong.');
          $('#fo')[0].reset(); // reset form on modals
          $('#btn').text('program'); //change button text
          $('#btn').attr('disabled',false); //set button disable 
        } else {
          
          // ajax adding data to database
          $.ajax({
              url : url,
              type: "POST",
              data: $('#fo').serialize(),
              dataType: "JSON",
              success: function(data)
              {
                  if(data.status) //if success close modal and reload ajax table
                  {   
                      //alertify.alert("Program telah ditambahkan.");
                      swal("Berhasil!", "Proses menambahkan program selesai.", "success");
                      reload_table();
                      $('#fo')[0].reset(); // reset form on modals

                  }

                  $('#btn').text('Program'); //change button text
                  $('#btn').attr('disabled',false); //set button enable 

              },
              
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alertify.alert("Sistem menemukan program yang sama. Silakan update ulang program sebelumnya, Terima kasih.", function (e) {
                  alertify.set({ buttonReverse: true });
                  alertify.set({ buttonFocus: "ok" });

                  if (e) {
                      //on click ok, href="?"
                  } else{
                      //on click cancel, href="?"
                  }

              });
                  $('#btn').text('Tambah'); //change button text
                  $('#btn').attr('disabled',false); //set button enable 

              }

          });
    
    }

  } else {
        swal("Batal", "Proses telah dibatalkan.", "error");
    }
  });

}

function save_donasi()
{

    swal({
    title: "Apakah anda yakin?",
    text: "Proses transaksi akan diupdate, perubahan harus disetujui oleh pihak terkait?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#A78C8F",
    closeButtonColor: "#FA0521",
    confirmButtonText: "Ya, Alihkan!",
    cancelButtonText: "Tidak, Batalkan!",
    closeOnConfirm: false,
    closeOnCancel: false
  },

   function(isConfirm){
    if (isConfirm) { 

    $('#btnSavee').text('menyimpan...'); //change button text
    $('#btnSavee').attr('disabled',true); //set button disable 
    var url;

    url = "<?php echo site_url('ydsfku/donasi_update')?>";

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#kjhfnn').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                
                $('#kjhfnn').modal('hide');
                //$('#modal_donasi').modal('hide');
                reload_table();
                swal("Berhasil", "Proses program pendonatur telah diupdate.", "success");
            }

            $('#btnSavee').text('Simpan'); //change button text
            $('#btnSavee').attr('disabled',false); //set button enable 

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSavee').text('Save'); //change button text
            $('#btnSavee').attr('disabled',false); //set button enable 

        }
    });

    } else {
        swal("Batal", "Transaksi telah dibatalkan.", "error");
    }

  });
}

function edit_karyawan(log)
{
     save_method = 'update';
    $('#gfusrs')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    //Ajax Load data from ajax

    $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit_secusers/')?>/" + log,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
                $('[name="login1"]').val(data.login);
                $('[name="pswd1"]').val(data.pswd);
                $('[name="nama1"]').val(data.name);
                $('[name="email1"]').val(data.email);
                $('[name="active1"]').val(data.active);
                $('[name="priv_admin1"]').val(data.priv_admin);
                $('[name="idcabang1"]').val(data.idcabang);
                $('[name="idpusat1"]').val(data.idpusat);
                $('[name="kodej1"]').val(data.kodej);
            //$('[name="dob"]').datepicker('update',data.dob);
            $('#modalfusrs').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-titles').text('Edit Karyawan'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ydsf');
        }
    });
}

function edit_kgtsnt(noidne)
{
    save_method = 'update';
    $('#kgre')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    //Ajax Load data from ajax

    $.ajax({
        url : "<?php echo site_url('ydsfku/ajax_edit_kegiatan/')?>/" + noidne,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
                $('[name="idkgt1"]').val(data.id_kegiatan);
                $('[name="kdacara"]').val(data.idacara);
                $('[name="namcar"]').val(data.nama_acara);
                $('[name="kplk1"]').val(data.ketua_pelaksana);
                $('[name="almktr2"]').val(data.alamat_kegiatan);
                $('[name="tonts"]').val(data.total_donasi);
            //$('[name="dob"]').datepicker('update',data.dob);
            $('#modalkegiatan').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-titles').text('Edit kegiatan Acara'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ydsf');
        }
    });
}

function save_donatur()
{

    $('#update').text('Mengupdate...'); //change button text
    $('#update').attr('disabled',true); //set button disable 
    var url;

    if(save_method =='update') {
        url = "<?php echo site_url('ydsfku/ajax_update')?>";
    } else {
        url = "<?php echo site_url('ydsfku/ajax_edit')?>";


    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#forms').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            { 
                location.reload();
                $('#modal_form').modal('hide');
                //reload_table();
            }

            $('#update').text('Update'); //change button text
            $('#update').attr('disabled',false); //set button enable 

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#update').text('Update'); //change button text
            $('#update').attr('disabled',false); //set button enable 

        }
    });
}

function save_programs()
{

    $('#updatep').text('Mengupdate...'); //change button text
    $('#updatep').attr('disabled',true); //set button disable 
    var url;

    if(save_method =='updatep') {
       url = "<?php echo site_url('ydsfku/edit_programs')?>";
    } else {
        url = "<?php echo site_url('ydsfku/ajax_update_programs')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#prg').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                
                $('#modalprograms').modal('hide');
                reload_table();
            }

            $('#updatep').text('Update'); //change button text
            $('#updatep').attr('disabled',false); //set button enable 

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#updatep').text('Update'); //change button text
            $('#updatep').attr('disabled',false); //set button enable 

        }
    });
}


function save_pdonss()
{

    $('#updatepdon').text('Mengupdate...'); //change button text
    $('#updatepdon').attr('disabled',true); //set button disable 
    var url;

    if(save_method =='update') {
        url = "<?php echo site_url('ydsfku/ajax_update_pdonss')?>";      
    } else {
       url = "<?php echo site_url('ydsfku/ajax_edit_pdn')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#pgls').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {                              
                $('#modalpengelolaandonasi').modal('hide');
                //reload_table();
                location.reload();
            }

            $('#updatepdon').text('Update'); //change button text
            $('#updatepdon').attr('disabled',false); //set button enable 

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#updatepdon').text('Update'); //change button text
            $('#updatepdon').attr('disabled',false); //set button enable 

        }
    });
}

function delete_person(id)
{
    alertify.confirm("Apakah anda ingin menghapus program ini?", function (e) {
      alertify.set({ buttonFocus: "ok" });                
        if (e) {
        $.ajax({
            url : "<?php echo site_url('ydsfku/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
                alertify.success("Program "+id+" Berhasil dihapus");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
         } else{
              reload_table();
              //on click cancel. alihkan link;
          }

    });
}

function delete_program(iddonaturitem)
{
    alertify.confirm("Apakah anda ingin menghapus program ini?", function (e) {
      alertify.set({ buttonFocus: "ok" });                
        if (e) {
        $.ajax({
            url : "<?php echo site_url('ydsfku/ajax_deleteone')?>/"+iddonaturitem,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_donasi').modal('hide');
                reload_table();
                alertify.success("Program "+iddonaturitem+" Berhasil dihapus");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
         } else{
              reload_table();
              //on click cancel. alihkan link;
          }

    });
   
}

function delete_programs(prog)
{
    alertify.confirm("Apakah anda ingin menghapus program id "+prog+"?", function (e) {
      alertify.set({ buttonFocus: "ok" });                
        if (e) {
        $.ajax({
            url : "<?php echo site_url('ydsfku/ajax_delete_programs')?>/"+prog,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
              if (data.status) {
                //reload_table();
                location.reload();
                $(location).attr('href','#users');
                //if success reload ajax table
                //$('#modal_editsecusers').modal('hide');
                //alertify.success("Id program "+prog+" Berhasil dihapus");
              }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
         } else{
              reload_table();
              //on click cancel. alihkan link;
          }

    });
   
}
</script>
<?php $this->load->view('modal_editdonatur'); ?>  
<?php $this->load->view('modal_editpengelolaandonasi'); ?>  
<?php $this->load->view('modal_editsecusers'); ?>  
<?php $this->load->view('modal_program'); ?>
<?php $this->load->view('modal_editkaryawan'); ?>  
<?php $this->load->view('grafik_view'); ?>  
<?php $this->load->view('gpndon'); ?>  
<?php $this->load->view('modal_editkegiatancabang'); ?> 
<?php $this->load->view('pemakaian'); ?>  
<?php $this->load->view('modal_donasi'); ?> 
</body>
<div class="copyright pull-center">
    <img style="padding-bottom:100px;margin-left:600px;" src="<?php echo base_url('/assets/logo.png')?>">
</div>
<hr>
<center>
<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-middle">
                    
                </nav>
                <p class="copyright pull-center">
                   Copy Right &copy; 2016 - 2017, PT. Inosoft Transistem Corporation. all rights reserved.
                </p>
                <p class="copyright pull-center">
                    Development by 14390100012 DIII Manajemen Informatika STIKOM SURABAYA.
                </p>
            </div>
        </footer>
        </center>
        <hr />
</html>