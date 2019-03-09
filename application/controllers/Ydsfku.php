<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Ydsfku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->set_header("Expires: ".gmdate("D, d M Y H:i:s", time())." GMT");  
		$this->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
		$this->output->set_header("Cache-Control: no-cache, must-revalidate");  
		$this->output->set_header("Pragma: no-cache");
		$this->load->model('person_model','ydsfku');
		$this->load->model('jungut_model');
		$this->load->model('person_model');
		$this->load->helper('form','url');
		$this->load->helper('date');
		$this->load->library('form_validation');
		$this->load->model('m_admin_autentikasi');
		$this->load->model('m_admin_autentikasi','ydsfku');
	}
	
	public function index()
	{
		$table = 'donaturbaru';
		$donasi = 'pengelolaan_donasi';
		$prog = 'program';
		$data['exists'] = 'Data sudah ada.';
		$data['nama'] = $this->jungut_model->get_namakwsnby($kwsn);
		$data['qbank'] = $this->person_model->get_bank();
		$data['qpas'] = $this->person_model->get_ketpas();
		$data['qcar'] = $this->person_model->get_cara_byr();
		$data['qjab'] = $this->person_model->get_jabatan();
		$data['qgaji'] = $this->person_model->get_gaji();
		$data['qpend'] = $this->person_model->get_pendidikan();
		$data['qhob'] = $this->person_model->get_hobby();
		$data['qwork'] = $this->person_model->get_pekerjaan();
		$data['qkwsn'] = $this->jungut_model->get_kawasan();
		$data['autoid'] = $this->jungut_model->getautoid($table);
		$data['idpdon'] = $this->jungut_model->getiddonasi($donasi);
		$data['progs'] = $this->jungut_model->getprogram($prog);
		$data['qjenis'] = $this->person_model->get_jenis();
        $data['qjungut'] = $this->jungut_model->get_jungut();
        $data['priv_admin'] = $this->session->userdata('priv_admin');        
		$data['pengguna'] = $this->m_admin_autentikasi->datapengguna($login);
        $this->load->helper('url');
        $this->load->view('loginv', $data);

		$kwsn = $this->session->userdata('kwsn');
		$login = $this->session->userdata('login');
 		
 		if($login) {
			redirect('ydsfku/ahlusunnahwaljamaah');
			return;
		}

	}

	public function ahlusunnahwaljamaah()
	{	
		$kwsn = $this->session->userdata('kwsn');
		$table = 'donaturbaru';
		$kaget = 'kegiatan_acara';
		$prog = 'program';
		$donasi = 'pengelolaan_donasi';
		$tables = 'laporan_donatur';
		$login = $this->session->userdata('login');
		$idcabang = $this->session->userdata('idcabang');
		$data['exists'] = 'Data sudah ada.';
		$data['nama'] = $this->jungut_model->get_namakwsnby($kwsn);
		$data['qbank'] = $this->person_model->get_bank();
		$data['graph'] = $this->person_model->graph();
		$data['pendonasian'] = $this->person_model->pendonasian();
		$data['qprogac'] = $this->person_model->get_nama_acara();
		$data['qin'] = $this->person_model->get_info();
		$data['qdnsrow'] = $this->person_model->get_nama_donaturs();
		$data['qcab'] = $this->jungut_model->get_cabang($idcabang);
		$data['qpr'] = $this->jungut_model->get_perod();
		$data['qwk'] = $this->person_model->get_wkt();
		$data['qjup'] = $this->jungut_model->get_jupen($idcabang);
		$data['qjups'] = $this->jungut_model->get_jupens();
		$data['qpas'] = $this->person_model->get_ketpas();
		$data['qkegs'] = $this->person_model->get_namas();
		$data['qcar'] = $this->person_model->get_cara_byr();
		$data['qjab'] = $this->person_model->get_jabatan();
		$data['qgaji'] = $this->person_model->get_gaji();
		$data['qpend'] = $this->person_model->get_pendidikan();
		$data['qhob'] = $this->person_model->get_hobby();
		$data['qwork'] = $this->person_model->get_pekerjaan();
		$data['qkwsn'] = $this->jungut_model->get_kawasan();
		$data['autoid'] = $this->jungut_model->getautoid($table);
		$data['kodj'] = $this->jungut_model->getautoid_karyawan();
		$data['progs'] = $this->jungut_model->getprogram($prog);
		$data['idpdon'] = $this->jungut_model->getiddonasi($donasi);
		$data['idlap'] = $this->jungut_model->getautoids($tables);
		$data['idkgt'] = $this->jungut_model->getkegiatan($kaget);
		$data['cbs'] = $this->person_model->get_cabangs();
		$data['pst'] = $this->person_model->get_pusat();
		$data['qjenis'] = $this->person_model->get_jenis();
		$data['qjenisacara'] = $this->person_model->get_jenis_acara($idcabang);
        $data['qjungut'] = $this->jungut_model->get_jungut();
        $data['priv_admin'] = $this->session->userdata('priv_admin');        
        $data['idcabang'] = $this->session->userdata('idcabang');        
		$data['pengguna'] = $this->m_admin_autentikasi->datapengguna($login);
		$kawasanid = $this->m_admin_autentikasi->datakawasan($login);
		for($i=0,$n=count($kawasanid);$i<$n;$i++) $idk .= $kawasanid[$i]['kwsn'].'<br>'; 
		$data['idk'] = $idk;


		//var_dump($data['priv_admin']);
		$qkwsn = $this->db->from('kawasan')->where('kwsn',$data['pengguna']->kwsn)->get();	
		$data['datakawasan'] = $qkwsn->result_array();

        $this->load->helper('url');		
		$this->load->view('user', $data);

		if($this->session->userdata('logged_in')) {
		 		//deteksi user yang wes login.
                $session_data = $this->session->userdata('logged_in');
//     $data['login'] = $session_data['login'];
            }else {
                //REFRESH PAGE, REDIRECTING LOG IN.
                redirect('/ydsfku/index');
            }

	}

	public function searchs()
	{
	$keyword = $this->uri->segment(3);
	$data = $this->db->from('kawasan')->join('sec_users','sec_users.kodej = kawasan.kodejgt','left')->like('kwsn',$keyword)->limit(1,0)->get();	
	foreach($data->result() as $row)
	{
		$arr['query'] = $keyword;
		$arr['suggestions'][] = array(
			'value'			=>$row->kwsn,
			'nm_kawasan'	=>$row->nm_kawasan,
			'alamat'		=>$row->alamat,
			'kodejgt'		=>$row->kodejgt,
			'name'			=>$row->name
		);

	}

	echo json_encode($arr);
	}

	public function cariketua() {

	$keyword = $this->uri->segment(3);
	$data = $this->db->from('sec_users')->like('name',$keyword)->limit(1,0)->get();	
	foreach($data->result() as $row)
	{
		$arr['query'] = $keyword;
		$arr['suggestions'][] = array(
			'value'	=>$row->name,
			'name'	=>$row->name,
		);

	}

	echo json_encode($arr);
	}

	public function search()
	{
        $priv_admin = $this->session->userdata('priv_admin');        
        $idcabang = $this->session->userdata('idcabang');        
		$pengguna = $this->m_admin_autentikasi->datapengguna($this->session->userdata('login'));
		$keyword = $this->uri->segment(3);
		$data = $this->db->from('kawasan')->join('sec_users','sec_users.kodej = kawasan.kodejgt','left')->where('idcabang',$idcabang)->like('kwsn', $keyword);
		if(!$priv_admin) $data = $data->where('kodejgt',$pengguna->kodej);
			$data = $data->limit(1,0)->get(); //menampilkan value kawasan dari setiap user secara dinamis.
		//var_dump($data->result());
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'			=>$row->kwsn,
				'nm_kawasan'	=>$row->nm_kawasan,
				'alamat'		=>$row->alamat,
				'kodejgt'		=>$row->kodejgt,
				'name'			=>$row->name
			);

		}

		echo json_encode($arr);
	}

	public function searchz()
	{
        $priv_admin = $this->session->userdata('priv_admin');        
		$pengguna = $this->m_admin_autentikasi->datapengguna($this->session->userdata('login'));
		$keyword = $this->uri->segment(3);
		$data = $this->db->from('kawasan')->join('sec_users','sec_users.kodej = kawasan.kodejgt','left')->like('kwsn', $keyword);
		if(!$priv_admin) $data = $data->where('kodejgt',$pengguna->kodej);
			$data = $data->limit(1,0)->get(); //menampilkan value kawasan dari setiap user secara dinamis.
		//var_dump($data->result());
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'			=>$row->kwsn,
				'nm_kawasan'	=>$row->nm_kawasan,
				'alamat'		=>$row->alamat,
				'kodejgt'		=>$row->kodejgt,
				'name'			=>$row->name
			);

		}

		echo json_encode($arr);
	}

	public function get_kawasan()
    {
            $jgt = $this->input->post('jungut'); 
            $arrKwsn = $this->jungut_model->get_kawasanby($jgt);
            foreach ($arrKwsn as $nkwsn) {
                $arrKwsn[$nkwsn->kwsn] =$nkwsn->kwsn .'/'. $nkwsn->kwsn_lm .' - '.  $nkwsn->nm_kawasan;
            }
            print form_dropdown('kawasan',$arrKwsn);
    }

    public function get_data()
    {
            $jgt = $this->input->post('kodej'); 
            $arrKwsn = $this->jungut_model->get_kawasanby($jgt);
            foreach ($arrKwsn as $nkwsn) {
                $arrKwsn[$nkwsn->kwsn] =$nkwsn->kwsn;
            }
            print form_dropdown('kawasan',$arrKwsn);
    }


    public function get_jupen()
    {
            $kwsn = $this->input->post('kawasann');
            $arrJupen = $this->jungut_model->get_jupenby($kwsn);
            foreach ($arrJupen as $nJPN) {
                $arrJupen[$nJPN->kodej] =$nJPN->kodej . ' - ' . $nJPN->name;

            }
            print form_dropdown('jupen',$arrJupen); 
    }

    public function get_nmkwsn()
    {
            $asd = $this->input->post('kawasann');
            $reyn = $this->jungut_model->get_kwsnby($asd);
            foreach ($reyn as $nilai) {
                $reyn[$nilai->kodej] =$nilai->name;

            }
            print form_dropdown('nm_kwsn',$reyn); 
    }


    public function get_namakwsn()
    {
            $kwsn = $this->input->post('kawasann');
            $array = $this->jungut_model->get_namakwsnby($kwsn);
            foreach ($array as $nama) {
                $array[$nama->kwsn] =$nama->nm_kawasan;

            }
            print form_dropdown('nm_kawasann',$array);
    }

    public function get_alamat()
    {
            $ws = $this->input->post('kawasann');
            $arrlm = $this->jungut_model->get_jupenby($ws);
            foreach ($arrlm as $a) {
                $arrlm[$a->alamat] =$a->alamat;

            }
            print form_dropdown('alamat',$arrlm); 
    } /*

    public function get_alamat()
    {
            $ws = $this->input->post('kawasann');
            $arrlm = $this->jungut_model->get_jupenby($ws);
            foreach ($arrlm as $a) {
                $arrlm[$a->alamat] =$a->alamat;

            }
            print form_dropdown('alamat',$arrlm); 
    } */

	public function Asynchronous() {

		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
		$this->form_validation->run();

		$secure_code = md5($this->input->post('password'));
		$pass = $this->input->post('password');
		$id = $this->input->post('username');
		

		if ($id && md5($pass)===$secure_code) {
			$this->load->model('m_admin_autentikasi'); // load model
			$hasil = $this->m_admin_autentikasi->cek_login($id,$secure_code);
	

		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['login'] = $sess->login;
				$sess_data['active'] = $sess->active;
				$sess_data['idcabang'] = $sess->idcabang;
				$sess_data['priv_admin'] = $sess->priv_admin;
				$this->session->set_userdata($sess_data);
			}
			
			if ($this->session->userdata('priv_admin')=='Y') {
				 $login = $this->session->userdata('login');
			      //mengambil level saat di session
			      $data['priv_admin'] = $this->session->userdata('priv_admin');        
			      $data['pengguna'] = $this->m_admin_autentikasi->datapengguna($login);
				  redirect('/ydsfku/ahlusunnahwaljamaah');
				} elseif ($this->session->userdata('priv_admin')=='') {
					 $login = $this->session->userdata('login');
				      //mengambil level saat di sesssion
				      $data['priv_admin'] = $this->session->userdata('priv_admin');        
				      $data['pengguna'] = $this->m_admin_autentikasi->datapengguna($login);
				      $data['kawasanid'] = $this->m_admin_autentikasi->datakawasan($login);
					  redirect('/ydsfku/ahlusunnahwaljamaah');
				} 
				$cabangid = array('1','2','3','5','6');
				if ($this->session->userdata('priv_admin')=='Y' && $this->session->userdata('idcabang')== $cabangid) {
					 $login = $this->session->userdata('login');
				      //mengambil level saat di sesssion
				      $data['priv_admin'] = $this->session->userdata('priv_admin');        
				      $data['idcabang'] = $this->session->userdata('idcabang');        
				      $data['pengguna'] = $this->m_admin_autentikasi->datapengguna($login);
				      $data['kawasanid'] = $this->m_admin_autentikasi->datakawasan($login);
					  redirect('/ydsfku/ahlusunnahwaljamaah');
				}	

		} else {		
				echo "<script>alert('Mohon maaf user tidak aktif atau belum terdaftar, Silahkan hubungi admin pusat.');history.go(-1);</script>";
		}
 	  
 	  } 

	}

	public function logout()
	{	
			$dlogin = array('login' => '',
							'pswd' => '',
							'active' => '',
							'priv_admin' => '',
							'logged_in' => FALSE,
		);

		$this->session->unset_userdata($dlogin);
		$this->session->sess_destroy();
		redirect('ydsfku/');
		
	}

	public function ajax_list()	
	{
		//$where = '000003';
		//$where = "'<?=$pengguna->kwsn?
		$login = $this->session->userdata('login');
		$priv_admin = $this->session->userdata('priv_admin');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables($where,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = '<a class="btn btn-sm" href="javascript:void(0)" title="Klik edit untuk mengupdate data." onclick="edit_person('."'".$person->noid."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
	<a id="btns" class="btn btn-sm" data-toggle="modal" data-target="#modalprogram" title="Klik Program untuk menambahkan program." onclick="show_program('."'".$person->noid."'".')"><i class="glyphicon glyphicon-credit-card"></i></a>';
			$row[] = $person->kwsn;
			$row[] = $person->noid;
			$row[] = $person->nama;
			$row[] = $person->alamat;
			$row[] = $person->status;
			$row[] = $person->kodejgt;

			//add html for action
			$data[] = $row;

		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_all($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtered($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function monitoring_ajax()	
	{
		$login = $this->session->userdata('login');
		$priv_admin = $this->session->userdata('priv_admin');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables_monitoring($where,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->noid;
			$row[] = $person->tanggal;
			$row[] = $person->kolom;
			$row[] = $person->dari;
			$row[] = $person->menjadi;
			$row[] = $person->entri_pegawai;
			$row[] = $person->autotime;

			$data[] = $row;

		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_all_monitoring($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtered_monitoring($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function monitoring_ajax_dnt()	
	{
		$login = $this->session->userdata('login');
		$priv_admin = $this->session->userdata('priv_admin');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables_prbh($where,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->nomor;
			$row[] = $person->tanggal;
			$row[] = $person->kolom;
			$row[] = $person->dari;
			$row[] = $person->menjadi;
			$row[] = $person->entri_pegawai;

			$data[] = $row;

		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_all_prbh($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtered_prbh($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_programs()	
	{
		//$where = '000003';`
		//$where = "'<?=$pengguna->kwsn?
		$login = $this->session->userdata('login');
		$priv_admin = $this->session->userdata('priv_admin');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables_program($where,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $scc) {
			$no++;
			$row = array();
			$row[] = '<a id="btnss" class="btn btn-sm" data-toggle="modal" data-target="#modalprograms" title="Klik Program untuk menambahkan program." onclick="edit_programs('."'".$scc->PROG."'".')"><i class="glyphicon glyphicon-pencil"></i></a><a class="btn btn-sm" href="javascript:void(0)" onclick="delete_programs('."'".$scc->PROG."'".')"><i class="glyphicon glyphicon"></i>X</a>';
			$row[] = $scc->PROG;
			$row[] = $scc->status;
			$row[] = $scc->NM_PROGRAM;
			$row[] = $scc->HARGA;
			$row[] = $scc->KELOMPOK;

			//add html for action
			$data[] = $row;

		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_alls($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtereds($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kegiatan()	
	{
		//$where = '000003';`
		//$where = "'<?=$pengguna->kwsn?
		$login = $this->session->userdata('login');
		$priv_admin = $this->session->userdata('priv_admin');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables_kegiatan($where,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $kgt) {
			$no++;
			$row = array();
			$row[] = '<a id="btnss" class="btn btn-sm" data-toggle="modal" data-target="#modalkegiatan" title="Klik Acara untuk mengupdate acara." onclick="edit_kgtsnt('."'".$kgt->id_kegiatan."'".')"><i class="glyphicon glyphicon-pencil"></i></a>';
			$row[] = $kgt->id_kegiatan;
			$row[] = $kgt->idacara;
			$row[] = $kgt->nama_acara;
			$row[] = $kgt->ketua_pelaksana;
			$row[] = $kgt->alamat_kegiatan;
			$row[] = $kgt->total_donasi;

			//add html for action
			$data[] = $row;

		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_all_kegiatan($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtered_kegiatan($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_secusers()	
	{
		//$where = '000003';`
		//$where = "'<?=$pengguna->kwsn?
		$login = $this->session->userdata('login');
		$priv_admin = $this->session->userdata('priv_admin');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables_secusers($where,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $scusrs) {
			$no++;
			$row = array();
			$row[] = '<a id="btnss" class="btn btn-sm" data-toggle="modal" data-target="#modalfusrs" title="Klik Acara untuk mengupdate karyawan." onclick="edit_karyawan('."'".$scusrs->login."'".')"><i class="glyphicon glyphicon-pencil"></i></a>';
			$row[] = $scusrs->login;
			$row[] = $scusrs->pswd;
			$row[] = $scusrs->name;
			$row[] = $scusrs->email;
			$row[] = $scusrs->active;
			$row[] = $scusrs->priv_admin;
			$row[] = $scusrs->idcabang;
			$row[] = $scusrs->idpusat;
			$row[] = $scusrs->kodej;

			//add html for action
			$data[] = $row;

		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_all_secusers($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtered_secusers($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function list_prog($noid)
	{
		$login = $this->session->userdata('login');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables_prog($noid,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $prog) {
			$no++;
			$row = array();
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_donasi('."'".$prog->iddonaturitem."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
					  <!--<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Delete" onclick="delete_program('."'".$prog->iddonaturitem."'".')"><i class="glyphicon glyphicon-pencil"></i> Delete</a>-->';
			$row[] = $prog->entri_tgl;
			$row[] = $prog->ap;
			$row[] = $prog->prog;
			$row[] = $prog->besar;
			$row[] = $prog->keterangan;

			//add html for action
			$data[] = $row;
			
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_all1($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtered1($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_donasi()	
	{
		//$where = '000003';
		//$where = "'<?=$pengguna->kwsn?
		$login = $this->session->userdata('login');
		$priv_admin = $this->session->userdata('priv_admin');
		$idcabang = $this->session->userdata('idcabang');
		$list = $this->ydsfku->get_datatables_donasi($where,$login,$priv_admin,$idcabang);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $pdons) {
			$no++;
			$row = array();
			$row[] = '<a class="btn btn-sm" href="javascript:void(0)" title="Klik edit untuk mengupdate data." onclick="edit_pdons('."'".$pdons->idacara."'".')"><i class="glyphicon glyphicon-pencil"></i></a>';
			$row[] = $pdons->idacara;
			$row[] = $pdons->acara;
			$row[] = $pdons->tanggal_acara;
			$row[] = $pdons->dana_acara;
			$row[] = $pdons->dana_persetujuan;
			$row[] = $pdons->pihak_pengajuan;

			//add html for action
			$data[] = $row;

		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ydsfku->count_all_donasi($login,$priv_admin,$idcabang),
						"recordsFiltered" => $this->ydsfku->count_filtered_donasi($login,$priv_admin,$idcabang),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}


	public function ajax_edit($noid)
	{
		$data = $this->ydsfku->get_by_id($noid);
		echo json_encode($data);
	}

	public function ajax_edit_programs($prog)
	{
		$data = $this->ydsfku->get_by_idprogram($prog);
		echo json_encode($data);
	}

	public function ajax_edit_kegiatan($noidne)
	{
		$data = $this->ydsfku->get_by_idkegiatan($noidne);
		echo json_encode($data);
	}

	public function ajax_edit_pdn($idacara)
	{
		$data = $this->ydsfku->get_by_donasiid($idacara);
		echo json_encode($data);
	}

	public function ajax_edit_program($iddonaturitem)
	{
		$data = $this->ydsfku->get_by_idprog($iddonaturitem);
		echo json_encode($data);
	}

	public function ajax_edit_secusers($log)
	{
		$data = $this->ydsfku->get_by_idsecusers($log);
		echo json_encode($data);
	}

	public function ajax_edit_donasi($iddonaturitem)
	{
		$data = $this->ydsfku->get_by_iddonaturitem($iddonaturitem);
		echo json_encode($data);
	}

	public function ajax_add()
	{	

			$datetime = date('Y-m-d', now());
			$valid = 'T';

			$data = array(
					'entri_pegawai' => $this->session->userdata('login'),
				    'noid' => $this->input->post('autoid'),
				    'lastupdate' => date('Y-m-d H:i:s'),
				    'nama' 	 => $this->input->post('nama'),
				    'tgllahir' => $this->input->post('tgllahir'),
					//'tmplahir' => $this->input->post('tempatlahir'),
					'alamat' => $this->input->post('alamat'),
					//'iddesa' => $this->input->post('jungut'),
					'email' => $this->input->post('email'),
					//'almktr' => $this->input->post('almktr'),
					//'iddesa2' => $this->input->post('alamat'),
					//'tlprmh' => $this->input->post('telprmh'),
					//'telphp' => $this->input->post('telepon'),
					//'tlpktr' 	 => $this->input->post('teleponktr'),
					//'faxktr' 	 => $this->input->post('faxkantor'),
					'carabyr' 	 => $this->input->post('carabayar'),
					//'rekdonatur' 	 => $this->input->post('rekeningdonatur'),
					'bank' 	 => $this->input->post('bank'),
					'sex' 	 => $this->input->post('jk'),
					'kwsn' => $this->input->post('kawasann'),		
					'status' => $this->input->post('sts'),
					'hobby' => $this->input->post('hobi'),
					'jabatan' => $this->input->post('jabatan'),
					'jupen' => $this->input->post('jupen'),
					'info' => $this->input->post('info'),
					'valid' => $valid,
					//'koderk' => $this->input->post('sts'),
					//'kolektif' => $this->input->post('sts'),
					'pekerjaan' => $this->input->post('worker'),
					'gaji' => $this->input->post('salary'),
					//'kolektif' => $this->input->post('kolektif'),
					//'entri_pegawai' => $this->input->post('sts'),
					'tglm' => $datetime, //now
					//'ketpasif' => $this->input->post('ketpas'),
					//'tglap' => $this->input->post('tglap'),
					'pendidikan' => $this->input->post('pendidikan'),
					'waktu_tagih' => $this->input->post('waktutgh'),
					//'npwp' => $this->input->post('npwp'),
					//'telphp2' => $this->input->post('nohp'),
					//'tlphp3' => $this->input->post('nohp3'),
					//'ket' => $this->input->post('keterangan'),
					'autoid' => $this->input->post('autoid1'),
					'report_id' => $this->input->post('idlap'),
					'cabang' => $this->session->userdata('idcabang')
				);

		$prog = $this->input->post('prog');
		$noid = $this->input->post('autoid');
		$besar = $this->input->post('nominal');
		$pegawai = $this->session->userdata('login');
		$keterangan = $this->input->post('keterangan');

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('alamat','Alamat Rumah','trim|required');
		$this->form_validation->set_rules('nominal','Nominal','trim|required');

			if ($this->form_validation->run() == FALSE) {
				 $this->load->view('modal_donatur');
			} else {

					$nama = $this->input->post('nama');
					$almktr = $this->input->post('alamat');
					$nominalp = $this->input->post('nominal');

						$this->load->model('person_model');	
						if ($this->person_model->check_data_already_exists($nama, $almktr) || $nominalp = '0') {
							//echo "Data is already exists for now, Please try again.";
							echo "Gagal menyimpan data, data terdeteksi adanya data yang sama.";
						}else { 
							$insert = $this->ydsfku->save($data, $prog, $noid, $besar, $pegawai, $keterangan);
							echo json_encode(array("status" => TRUE));
						}
			
					}
			//$insert = $this->person->save($data, $noeid);
			//echo json_encode(array("status" => TRUE));
	}

	public function ajax_add_pdonasi()
	{	
		$stats = 'A';
		$idcabangs = $this->session->userdata('idcabang');
			$data = array(
				    'idacara' => $this->input->post('idacara'),
				    'acara' => $this->input->post('acara'),
				    'tanggal_acara' => $this->input->post('tanggal_acara'),
					'dana_acara' => $this->input->post('dana_acara'),
					'dana_persetujuan' => $this->input->post('dana_persetujuan'),
					'idcabang' =>$idcabangs,
					'pihak_pengajuan' => $this->input->post('pihak_pengajuan')
				);

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('acara','Acara','trim|required');
		$this->form_validation->set_rules('dana_persetujuan','Disetujui','trim|required');

			if ($this->form_validation->run() == FALSE) {
				 $this->load->view('modal_pengelolaandonasi');
			} else {
					$prog = $this->input->post('acara');
					$tanggal_acara = $this->input->post('tanggal_acara');
					$dana_persetujuan = $this->input->post('dana_persetujuan');
					$datetime = date('Y-m-d', now());

						$this->load->model('person_model');	
						$nominal = $this->person_model->check_akuntibilitas_donasi($prog);
						$pengajuan_acara = $this->person_model->check_data_already_exists_pengajuan_acara($prog,$tanggal_acara);
						if ($dana_persetujuan > $nominal || $pengajuan_acara) {
							//echo "Data is already exists for now, Please try again.";
							echo "Gagal menyimpan data, karena jumlah donasi tidak mencukupi.";
						}else if($tanggal_acara < $datetime) {
							echo "Gagal menyimpan data, karena pengajuan acara tidak teridentifikasi.";
						}else { 
							$insert = $this->ydsfku->save_pdon($data);
							echo json_encode(array("status" => TRUE));
						}
			
					}

			// $insert = $this->person->save_pdon($data);
		// echo json_encode(array("status" => TRUE));
	}

	public function ajax_add_kegiatan()
	{	
	
	$datetimess = date('Y-m-d', now());
	$idcabang = $this->session->userdata('idcabang');

	$data = array(
		    'id_kegiatan' => $this->input->post('idkgt'),
		    'idacara' => $this->input->post('kkgt'),
		    'nama_acara' => $this->input->post('nama_acara'),
			'ketua_pelaksana' => $this->input->post('kplk'),
			'alamat_kegiatan' => $this->input->post('almtkgt'),
			'total_donasi' => $this->input->post('tot_don'),
			'id_cabang' => $idcabang,
			'tanggal' => $datetimess
		);

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tot_don','Disetujui','trim|required');

			if ($this->form_validation->run() == FALSE) {
				 $this->load->view('modal_kegiatanacara');
			} else {
					
					$id = $this->input->post('kkgt');
					$nama = $this->input->post('kplk');
					$dana = $this->input->post('tot_don');
					$datetime = date('Y-m-d', now());

						$this->load->model('person_model');	
						$donasi = $this->person_model->check_akuntibilitas_pengelolaan($id);
						
						
						if ($dana > $donasi) {
							echo "Gagal menyimpan data, karena jumlah donasi tidak mencukupi.";

						} elseif ($this->person_model->cek_kegiatan($nama)){
							$insert = $this->ydsfku->save_kgts($data);
							echo json_encode(array("status" => TRUE));
						}else { 
							echo "error_reporting()";							
						}
			
					}

			// $insert = $this->person->save_pdon($data);
		// echo json_encode(array("status" => TRUE));
	}

	public function ajax_add_secusers()
	{	

	$data = array(
		    'login' => $this->input->post('login'),
		    'pswd' => md5($this->input->post('pswd')),
		    'name' => $this->input->post('nama'),
			'email' => $this->input->post('emaild'),
			'priv_admin' => $this->input->post('priv_admin'),
			'active' => $this->input->post('active'),
			'idcabang' => $this->input->post('idcabang'),
			'idpusat' => $this->input->post('idpusat'),
			'kodej' => $this->input->post('kodej')
		);

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login','Username','trim|required');
		$this->form_validation->set_rules('emaild','Email','trim|required');

			if ($this->form_validation->run() == FALSE) {
				 $this->load->view('modal_users');
			} else {
				$login = $this->input->post('login');
				$priv_admin = $this->input->post('priv_admin');
				$email = $this->input->post('emaild');
				$cabangid = array('1','2','3','5','6');
					if ($this->person_model->check_data_already_exists_karyawan($login, $email)) {
						echo "Gagal menyimpan data, data terdeteksi adanya data yang sama.";
					}else { 
							$insert = $this->ydsfku->save_secusers($data);
							echo json_encode(array("status" => TRUE));
					}

			}

			// $insert = $this->person->save_pdon($data);
		// echo json_encode(array("status" => TRUE));
	}

	public function ajax_add_secusers_cabang()
	{	

	$data = array(
		    'login' => $this->input->post('login'),
		    'pswd' => md5($this->input->post('pswd')),
		    'name' => $this->input->post('nama'),
			'email' => $this->input->post('emaild'),
			'priv_admin' => $this->input->post('priv_admin'),
			'active' => $this->input->post('active'),
			'idcabang' => $this->input->post('idcabang'),
			'idpusat' => $this->input->post('idpusat'),
			'kodej' => $this->input->post('kodej')
		);

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login','Username','trim|required');
		$this->form_validation->set_rules('emaild','Email','trim|required');

			if ($this->form_validation->run() == FALSE) {
				 $this->load->view('modal_users');
			} else {
				$login = $this->input->post('login');
				$priv_admin = $this->input->post('priv_admin');
				$email = $this->input->post('emaild');
				$cabangid = array('1','2','3','5','6');
					if ($this->person_model->check_data_already_exists_karyawan($login, $email)) {
						echo "Gagal menyimpan data, data terdeteksi adanya data yang sama.";
					}else if($this->session->userdata('idcabang') == $cabangid || $priv_admin == 'Y') {
						echo "Maaf user ini tidak ada hak akses menjadikan administrator.";
					}else { 
							$insert = $this->ydsfku->save_secusers_cabang($data);
							echo json_encode(array("status" => TRUE));
					}

			}

			// $insert = $this->person->save_pdon($data);
		// echo json_encode(array("status" => TRUE));
	}


	public function ajax_add_programs()
	{	
		$stats = 'A';
			$data = array(
				    'PROG' => $this->input->post('progs1'),
				    'status' => $stats,
				    'NM_PROGRAM' => $this->input->post('programs1'),
					'HARGA' => $this->input->post('harga1'),
					'KELOMPOK' => $this->input->post('kelompok1')
				);

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('programs1','Nama Program','trim|required');
		$this->form_validation->set_rules('harga1','Harga','trim|required');
		$this->form_validation->set_rules('kelompok1','Kelompok','trim|required');

			if ($this->form_validation->run() == FALSE) {
				 $this->load->view('modal_secusers');
			} else {

					$programs1 = $this->input->post('programs1');
					$harga1 = $this->input->post('harga1');
					$kelompok1 = $this->input->post('kelompok1');

						$this->load->model('person_model');	
						if ($programs1 == '' || $harga1 = '' || $kelompok1 = '' || $this->person_model->check_data_already_exists_programs($programs1)) {
							//echo "Data is already exists for now, Please try again.";
							echo "Gagal menyimpan data, data terdeteksi adanya data yang sama.";
						}else { 
							$insert = $this->ydsfku->save_programs($data);
							echo json_encode(array("status" => TRUE));
						}
			
					}
			//$insert = $this->person->save($data, $noeid);
			//echo json_encode(array("status" => TRUE));
		
	}

	public function add_program()
	{
/*
		$data = array(
					'noid' => $this->input->post('autoid1'),
					'prog' => $this->input->post('prog1'),
				    'besar' => $this->input->post('nominal1'),
				    'keterangan' => $this->input->post('keterangan1'),
				   );

		$pegawai = $this->session->userdata('login');
		$noid =  $this->input->post('autoid1');
		$prog =  $this->input->post('prog1');
		$besar = $this->input->post('nominal1');
		$keterangan = $this->input->post('keterangan1');
		$date = date('Y-m-d');
		
		$insert = $this->person->donasi_simpan($data, $pegawai, $noid, $prog, $besar, $keterangan, $date);
		echo json_encode(array("status" => TRUE));
*/
		$data = array(
					'noid' => $this->input->post('autoid1'),
					'prog' => $this->input->post('prog1'),
				    'besar' => $this->input->post('nominal1'),
				    'keterangan' => $this->input->post('keterangan1'),
				   );

		$pegawai = $this->session->userdata('login');
		$noid =  $this->input->post('autoid1');
		$prog =  $this->input->post('prog1');
		$besar = $this->input->post('nominal1');
		$keterangan = $this->input->post('keterangan1');
		$date = date('Y-m-d');

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('prog1','Program','trim|required');

			if ($this->form_validation->run() == FALSE) {
				 $this->load->view('modal_program');
			} else {
						$this->load->model('person_model');	
						if ($this->person_model->check_data_already_exists_program_donasi($prog, $noid)) {
							//echo "Data is already exists for now, Please try again.";
							echo "Gagal menyimpan data, data terdeteksi adanya data yang sama.";
						}else { 
						$insert = $this->ydsfku->donasi_simpan($data, $pegawai, $noid, $prog, $besar, $keterangan, $date);
						echo json_encode(array("status" => TRUE));
					}
			
				}

	}

	public function ajax_update()
	{
		$data = array(
				'noid' => $this->input->post('autoid1'),
			    'nama' 	 => $this->input->post('nama1'),
			    'tgllahir' => $this->input->post('tgllahir1'),
				//'tmplahir' => $this->input->post('tempatlahir1'),
				'alamat' => $this->input->post('alamat1'),
				//'iddesa' => $this->input->post('jungut'),
				'email' => $this->input->post('email1'),
				//'almktr' => $this->input->post('almktr1'),
				//'iddesa2' => $this->input->post('alamat'),
				//'tlprmh' => $this->input->post('telprmh1'),
				//'telphp' => $this->input->post('telepon1'),
				//'tlpktr' 	 => $this->input->post('teleponktr1'),
				//'faxktr' 	 => $this->input->post('faxkantor1'),
				'carabyr' 	 => $this->input->post('carabayar1'),
				//'rekdonatur' 	 => $this->input->post('rekeningdonatur1'),
				'bank' 	 => $this->input->post('bank1'),
				'sex' 	 => $this->input->post('jk1'),
				'kwsn' => $this->input->post('kawasann1'),
				'status' => $this->input->post('sts1'),
				'jupen' => $this->input->post('jupen1'),
				'info' => $this->input->post('info1'),
				//'koderk' => $this->input->post('sts'),
				//'kolektif' => $this->input->post('kolektif1'),
				'jabatan' => $this->input->post('jabatan1'),
				'pekerjaan' => $this->input->post('worker1'),
				'gaji' => $this->input->post('salary1'),
				//'entri_pegawai' => $this->input->post('sts'),
				//'tglm' => $this->input->post('tglmsk1'), //now
				//'ketpasif' => $this->input->post('ketpas1'),
				'tglap' => $this->input->post('tglap1'),
				'pendidikan' => $this->input->post('pendidikan1'),
				'waktu_tagih' => $this->input->post('waktutgh1'),
				//'npwp' => $this->input->post('npwp1'),
				//'telphp2' => $this->input->post('nohp1'),
				//'tlphp3' => $this->input->post('nohp31'),
				//'ket' => $this->input->post('ket1'),
				'hobby' => $this->input->post('hobi1')
			);
		$this->load->model('person_model');

		$dataold = json_decode($this->input->post('dataold'),true);
		$prbh = $this->person_model->ambil_data($data,$dataold);

		$this->ydsfku->update(array('noid' => $this->input->post('autoid1')), $data);
		$this->ydsfku->perubahan_donatur($this->input->post('autoid1'), $prbh);
		echo json_encode(array("status" => TRUE));

	}

	public function ajax_update_programs()
	{
		$data = array(
				'PROG' => $this->input->post('progs'),
				'status' => $this->input->post('statuss'),
				'NM_PROGRAM' => $this->input->post('programs'),
				'HARGA' => $this->input->post('harga'),
				'KELOMPOK' => $this->input->post('kelompok')
			);
		$this->load->model('person_model');

		$this->ydsfku->update_programs(array('PROG' => $this->input->post('progs')), $data);
		echo json_encode(array("status" => TRUE));

	}

	public function ajax_update_secusers()
	{
		$data = array(
		    'login' => $this->input->post('login1'),
		    'pswd' => md5($this->input->post('pswd1')),
		    'name' => $this->input->post('nama1'),
			'email' => $this->input->post('email1'),
			'priv_admin' => $this->input->post('priv_admin1'),
			'active' => $this->input->post('active1'),
			'idcabang' => $this->input->post('idcabang1'),
			'idpusat' => $this->input->post('idpusat1'),
			'kodej' => $this->input->post('kodej1')
			);
		$this->load->model('person_model');

		$this->ydsfku->update_secusers(array('login' => $this->input->post('login1')), $data);
		echo json_encode(array("status" => TRUE));

	}

	public function ajax_update_pdonss()
	{
		$data = array(
				    'idacara' => $this->input->post('idacara1'),
				    'acara' => $this->input->post('acara1'),
				    'tanggal_acara' => $this->input->post('tanggal_acara1'),
					'dana_acara' => $this->input->post('dana_acara1'),
					'dana_persetujuan' => $this->input->post('dana_persetujuan1'),
					'pihak_pengajuan' => $this->input->post('pihak_pengajuan1')
				);
		$this->load->model('person_model');

		$this->ydsfku->update_pdonss(array('idacara' => $this->input->post('idacara1')), $data);
		echo json_encode(array("status" => TRUE));

	}

	public function ajax_update_kegiatanku()
	{
		$datetimez = date('Y-m-d', now());
		$idcabang = $this->session->userdata('idcabang');

		$data = array(
				    'id_kegiatan' => $this->input->post('idkgt1'),
				    'idacara' => $this->input->post('kdacara'),
				    'nama_acara' => $this->input->post('namcar'),
					'ketua_pelaksana' => $this->input->post('kplk1'),
					'alamat_kegiatan' => $this->input->post('almktr2'),
					'total_donasi' => $this->input->post('tonts'),
					'id_cabang' => $idcabang,
					'tanggal' => $datetimez
				);
		
				$this->load->model('person_model');

				$this->ydsfku->update_kegiatanku(array('id_kegiatan' => $this->input->post('idkgt1')), $data);
				echo json_encode(array("status" => TRUE));

	}

	public function donasi_update()
	{
		$data = array(
		      	'iddonaturitem'  => $this->input->post('iddonaturitem'),
		      	'ap'  => $this->input->post('statuss'),
			    'prog'  => $this->input->post('progs'),
				'besar' => $this->input->post('besar'),
				'keterangan' => $this->input->post('keterangans'),
				'periode' => $this->input->post('pde'),
				'sampaiap' => $this->input->post('bl')
			);
		$this->load->model('person_model');

		$datalama = json_decode($this->input->post('datalama'),true);
		$prbh = $this->person_model->ambil_data_item($data,$datalama);

		$this->ydsfku->donasi_update(array('iddonaturitem' => $this->input->post('iddonaturitem')), $data);
		$this->ydsfku->perubahan_donatur_item($this->input->post('iddonaturitem'), $prbh);
		echo json_encode(array("status" => TRUE));
	}
	
	public function ajax_delete($noid)
	{
		$this->ydsfku->delete_by_id($noid);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_deleteone($iddonaturitem)
	{
		$this->ydsfku->delete_by_idone($iddonaturitem);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete_programs($prog)
	{
		$this->ydsfku->delete_by_idprogram($prog);
		echo json_encode(array("status" => TRUE));
	}

}