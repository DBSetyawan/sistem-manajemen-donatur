<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_values extends CI_Controller {

        public function uangkan($angka,$eks='$'){
                return $eks.' '.number_format($angka,2,',','.').'-';
        }

	public function index()
	{
        $dari = $this->input->post('tanggalawal');
        $sampai = $this->input->post('tanggalakhir');
	$lap = $this->db->query('SELECT dnt.tglm as tanggal, dnt.noid, left(dnt.nama,14) as nama, prg.NM_PROGRAM as program, di.besar as jumlah from donaturbaru td
        left join donaturbaru dnt on dnt.noid=td.noid 
        left join donatur_item di on di.noid=td.autoid 
        left join program prg on prg.PROG=di.prog 
        where td.entri_pegawai="'.$this->session->userdata('login').'"
        and isnull(dnt.tglm)');
	if($lap->num_rows==0){
		$lap = $this->db->query('SELECT dnt.tglm as tanggal, dnt.noid, left(dnt.nama,14) as nama, prg.NM_PROGRAM as program, di.besar as jumlah from donaturbaru td
        left join donaturbaru dnt on dnt.noid=td.noid
        left join donatur_item di on di.noid=td.autoid 
        left join program prg on prg.PROG=di.prog 
        where dnt.tglm between "'.$dari.'" and "'.$sampai.'"');
	}

    //var_dump($dari);
    //var_dump($sampai);
    //var_dump($nama);

        $total = 0;
	$js = $lap->result();
     if ($js == null) {
        echo "<script>alert('Mohon maaf data kosong.');history.go(-1);</script>";
    } else {
       //do something
    }
	?>
        <head>
        <title>Laporan Periode Donasi Donatur YDSF</title>
         <img style="margin-right:1070px" src="<?php echo base_url('/assets/logo.png')?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/zas.png')?>">
        </head>
        <div style="text-align:center;font-size:22pt;">LAPORAN DONATUR YAYASAN DONASI SOSIAL AL-FALAH SURABAYA</div>
        <div style="text-align:center;font-size:22pt;margin-bottom:20px">REKAPTULASI DATA DONASI PROGRAM DONATUR 2017</div>
        <table border="border-bottom">
        <thead>
                <tr>
                        <th class="nomer" style="font-size: 17pt">No.</th>
                        <th class="tanggal" style="text-align: center;font-size: 17pt">Tgl Transaksi</th>
                        <th class="noid" style="text-align: center;font-size: 17pt">Noid</th>
                        <th class="nama" style="text-align: center;font-size: 17pt">Nama</th>
                        <th class="program" style="text-align: center;font-size: 17pt">Program</th>
                        <th class="jumlah" style=";font-size: 17pt">Jumlah</th>
                </tr>
        </thead>
                <tbody>
                        <!-- <tr>
                                <td style="border-top:none;border-bottom:none" class="nomer">12</td>
                                <td style="border-top:none;border-bottom:none" class="tanggal">12-juni-13</td>
                                <td style="border-top:none;border-bottom:none" class="tanggal">11028</td>
                                <td style="border-top:none;border-bottom:none" class="nama">Ginro Chiepvo</td>
                                <td style="border-top:none;border-bottom:none" class="tanggal">Berkatan</td>
                                <td style="border-top:none;border-bottom:none" class="jumlah">1.000.000</td>
                        </tr>
                        <tr>
                                <td style="border-top:none;border-bottom:none" class="nomer">12</td>
                                <td style="border-top:none;border-bottom:none" class="tanggal">12-juni-13</td>
                                <td style="border-top:none;border-bottom:none" class="tanggal">11028</td>
                                <td style="border-top:none;border-bottom:none" class="nama">Ginro</td>
                                <td style="border-top:none;border-bottom:none" class="tanggal">Berkatan</td>
                                <td style="border-top:none;border-bottom:none" class="jumlah">1.000.000</td>
                        </tr> -->
        <?php $no = 1; foreach ($js as $key => $val): ?>
                <tr>
                        <td style="border-top:none;border-bottom:none;font-size: 17pt" class="nomer"><?php echo $no; ?></td>
                        <td style="border-top:none;border-bottom:none;font-size: 17pt" class="tanggal"><?php echo $val->tanggal; ?></td>
                        <td style="border-top:none;border-bottom:none;font-size: 17pt" class="noid"><?php echo $val->noid; ?></td>
                        <td style="border-top:none;border-bottom:none;font-size: 17pt" class="nama"><?php echo $val->nama; ?></td>
                        <td style="border-top:none;border-bottom:none;font-size: 17pt" class="program"><?php echo $val->program; ?></td>
                        <td style="border-top:none;border-bottom:none;font-size: 17pt" class="jumlah"><?php echo $this->uangkan($val->jumlah,'Rp.'); ?></td>
                </tr>
        <?php 
        $total += $val->jumlah;
        $no++; 
        endforeach ?>
                <tr>
                <td colspan="6" style="text-align:right; font-size: 19pt;"><b>TOTAL = <?php echo $this->uangkan($total,'Rp.'); ?></b></td>
                </tr>
                </tbody>
        </table>
        <b>
       <div style="font-size: 15pt;">user : <?php echo $this->session->userdata('login'); ?></div><br>
       <div style="font-size: 15pt;">tanggal cetak : <?php echo date('d-M-Y'); ?><br></div>   
        </b> 
        <b>
        <div style="font-size: 15pt" class="ttd">Diketahui<br><br><br><br><br><br><hr width="50%" align="center">&nbsp</div>
        <div style="font-size: 15pt" class="ttd">Diperiksa<br><br><br><br><br><br><hr width="50%" align="center">&nbsp</div>
        <div style="font-size: 15pt" class="ttd">Dibuat<br><br><br><br><br><br><hr width="50%" align="center">&nbsp<?php echo $this->session->userdata('login'); ?></div></b>
        <style type="text/css">
                body{
                        font-family: monospace;
                }    
                table{
                        width:1340px;
                        border: solid black 1px;
                        border-radius: 10px;
                        border-collapse: collapse;
                        font-size: 8pt;
                }
                table th{
                        background: #CCF;
                        font-weight: bold;
                        font-size: 11pt;
                        padding-top: 12px!important;
                }
                table th, table td{
                        border-top : solid black 1px;
                        border-bottom : solid black 1px;
                        padding-top: 4px;
                        padding-bottom: 4px;
                        border-collapse: collapse;
                }
                .nomer{
                        width: 20px;
                        text-align: center;
                }
                .tanggal{
                        width: 10px;
                        text-align: center;
                }
                .jumlah{
                        width: 100px;
                        text-align: right;
                        padding-right: 10px;
                }
                .nama{
                        text-align: left;
                        width: 100px;
                }
                .program{
                        text-align: left;
                        width: 100px;
                }
                .noid{
                        text-align: center;
                        width: 50px;
                }
                .ttd{
                        display: inline-block;
                        width: 430px;
                        padding-top: 116px;
                        text-align: center;
                        font-weight: bold;
                        font-size: 12pt;
                }
        </style>
        <script type="text/javascript">
                window.print();
        </script>
        <?php
                $this->db->query('update laporan_donatur set tanggal = "'.date('Y-m-d').'" where isnull(tanggal) and petugas="'.$this->session->userdata('login').'"');
	}

}

/* End of file laporan.php */
/* Location: .//F/X-Programmer/WEB/xampp/htdocs/ydsfsurabaya/sys/modules/laporan/controllers/laporan.php */