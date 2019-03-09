<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_pengajuanacara extends CI_Controller {

    public function uangkan($angka,$eks='$'){
            return $eks.' '.number_format($angka,2,',','.').'-';
    }

	public function index()
	{
    $sampai = $this->input->post('tanggalak');
    $names = $this->input->post('namaprog');
    $dari = $this->input->post('tanggala');
    $idprivilages = $this->session->userdata('idcabang');
	$lap = $this->db->query('SELECT acara as nama_acara, tanggal_acara as tanggal, dana_acara as biaya_acara, dana_persetujuan as approved_dana, pihak_pengajuan as diacc from pengelolaan_donasi 
        where idcabang="'.$idprivilages.'"');
	if($lap->num_rows==0){
		$lap = $this->db->query('SELECT acara as nama_acara, tanggal_acara as tanggal, dana_acara as biaya_acara, dana_persetujuan as approved_dana, pihak_pengajuan as diacc from pengelolaan_donasi 
        where tanggal_acara between "'.$dari.'" and "'.$sampai.'"');
	}

    //var_dump($names);
        $total = 0;
	$js = $lap->result();
     if ($js == null) {
        echo "<script>alert('Mohon maaf data kosong.');history.go(-1);</script>";
    } else {
       //do something
    }
    
	?>
        <head>
        <title>Laporan Pengajuan Acara YDSF</title>
         <img style="margin-right:1070px" src="<?php echo base_url('/assets/logo.png')?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/zas.png')?>">
        </head>
        <div style="text-align:center;font-size:22pt;">LAPORAN ACARA YAYASAN DANA SOSIAL AL-FALAH SURABAYA</div>
        <div style="text-align:center;font-size:22pt;margin-bottom:20px">PENGELOLAAN DONASI PROGRAM DONATUR 2017</div>
        <table border="border-bottom">
        <thead>
                <tr>
                        <th class="nomer" style="font-size: 17pt">No.</th>
                        <th class="tanggal_acara" style="text-align: center;font-size: 17pt">Tanggal Acara</th>
                        <th class="acara" style="text-align: center;font-size: 17pt">Kode Acara</th>
                        <th class="pihak_persetujuan" style="text-align: center;font-size: 17pt">Pihak Pengajuan</th>
                        <th class="dana_persetujuan" style="text-align: center;font-size: 17pt">Dana Persetujuan</th>
                        <th class="jumlahs" style="font-size: 17pt">Biaya Akhir</th>
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
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="tanggal_acara"><?php echo $val->tanggal;?></td>
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="acara"><?php echo $val->nama_acara; ?></td>
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="pihak_persetujuan"><?php echo $val->diacc; ?></td>
                     <td style="border-top:none;border-bottom:none;font-size: 17pt" class="dana_persetujuan"><?php echo $this->uangkan($val->approved_dana, 'Rp.'); ?></td>
                    <td style="border-top:none;border-bottom:none;font-size: 17pt" class="jumlahs"><?php echo $this->uangkan($val->approved_dana,'Rp.'); ?></td>
                </tr>
        <?php 
        $total += $val->approved_dana;
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
        <div style="font-size: 15pt" class="ttd">Dibuat<br><br><br><br><br><br><hr width="50%" align="center"><?php echo $this->session->userdata('login'); ?></div>
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
                        width: 12px;
                        text-align: center;
                }
                .tanggal_acara{
                        width: 10px;
                        text-align: center;
                }
                .jumlahs{
                        width: 2px;
                        text-align: right;
                        padding-right: 10px;
                }
                .dana_acara{
                        text-align: right;
                        width: 10px;
                }
                .dana_persetujuan{
                        text-align: right;
                        width: 10px;
                }
                .acara{
                        text-align: center;
                        width: 10px;
                }

                .pihak_persetujuan{
                        text-align: left;
                        width: 10px;
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