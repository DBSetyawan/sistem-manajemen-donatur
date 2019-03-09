<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_kegiatan_acara extends CI_Controller {

    public function uangkan($angka,$eks='$'){
            return $eks.' '.number_format($angka,2,',','.').'-';
    }

	public function index()
	{
    $sampai = $this->input->post('tglkgak');
    $names = $this->input->post('namkegs');
    $dari = $this->input->post('tglkga');
    $idprivilages = $this->session->userdata('idcabang');
	$lap = $this->db->query('SELECT nama_acara as a, ketua_pelaksana as b, alamat_kegiatan as c, total_donasi as d 
       from kegiatan_acara where id_cabang ="'.$idprivilages.'"');
	if($lap->num_rows==0){
		$lap = $this->db->query('SELECT nama_acara as a, ketua_pelaksana as b, alamat_kegiatan as c, total_donasi as d from kegiatan_acara where tanggal between "'.$dari.'" and "'.$sampai.'"');
	}


    //var_dump($names); q 
        $total = 0;
	$js = $lap->result();
     if ($js == null) {
        echo "<script>alert('Mohon maaf data kosong.');history.go(-1);</script>";
    } else {
       //do something
    }
    
	?>
        <head>
        <title>Laporan Kegiatan Acara YDSF</title>
         <img style="margin-right:1070px" src="<?php echo base_url('/assets/logo.png')?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/zas.png')?>">
        </head>
        <div style="text-align:center;font-size:22pt;">LAPORAN DETAIL KEGIATAN PROGRAM AMAL YAYASAN DANA SOSIAL AL-FALAH SURABAYA</div>
        <div style="text-align:center;font-size:22pt;margin-bottom:20px">ACARA PROGRAM AMAL DONATUR 2017</div>
        <table border="border-bottom">
        <thead>
                <tr>
                        <th class="nomer" style=";font-size: 17pt">No.</th>
                        <th class="nama_acara" style="text-align: center;font-size: 17pt">Nama Acara</th>
                        <th class="ketua_pelaksana" style="text-align: center;font-size: 17pt">Ketua Pelaksana</th>
                        <th class="alamat_kegiatan" style="text-align: center;font-size: 17pt">Alamat Kegiatan</th>
                        <th class="jumlah_donasi" style="text-align: center;font-size: 17pt">Jumlah Donasi</th>
                        <th class="jumlahsz" style=";font-size: 17pt">Biaya Akhir</th>
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
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="nama_acara"><?php echo $val->a;?></td>
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="ketua_pelaksana"><?php echo $val->b;?></td>
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="alamat_kegiatan"><?php echo $val->c; ?></td>
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="jumlah_donasi"><?php echo $this->uangkan($val->d,'Rp.'); ?></td>
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="jumlahsz"><?php echo $this->uangkan($val->d,'Rp.'); ?></td>
                </tr>
        <?php 
        $total += $val->d;
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
        <div style="font-size: 15pt" class="ttd">Diketahui<br><br><br><br><br><br><hr width="50%" align="center">&nbsp</div>
        <div style="font-size: 15pt" class="ttd">Diperiksa<br><br><br><br><br><br><hr width="50%" align="center">&nbsp</div>
        <div style="font-size: 15pt" class="ttd">Dibuat<br><br><br><br><br><br><hr width="50%" align="center">&nbsp<?php echo $this->session->userdata('login'); ?></div>
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
                        width: 2px;
                        text-align: center;
                }
                .nama_acara{
                        width: 100px;
                        text-align: left;
                }
                .jumlahsz{
                        width: 5px;
                        text-align: right;
                        padding-right: 10px;
                }
                .ketua_pelaksana{
                        text-align: left;
                        width: 100px;
                }
                .alamat_kegiatan{
                        text-align: left;
                        width: 100px;
                }
                .jumlah_donasi{
                        text-align: right;
                        width: 10px;
                }

                .pihak_persetujuan{
                        text-align: right;
                        width: 100px;
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
        return $this->db->affected_rows();
	}

}

/* End of file laporan.php */
/* Location: .//F/X-Programmer/WEB/xampp/htdocs/ydsfsurabaya/sys/modules/laporan/controllers/laporan.php */