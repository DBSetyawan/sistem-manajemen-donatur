<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person_model extends CI_Model {

	var $table = 'donaturbaru';
	var $itemdon = 'donatur_item';
	var $kwssn = 'kawasan';
	var $column_order = array('kwsn','noid','nama','almktr','status','kodejgt',null);
	var $column_order1 = array('prog','besar','keterangan','iddonaturitem',null);
    var $column_search = array('noid','nama','almktr','kodejgt','status','kwsn');
    var $column_search1 = array('prog','besar','keterangan','iddonaturitem');
	var $order = array('noid' => 'asc');
	var $order1 = array('iddonaturitem' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	/*
	public function get_donaturbaru($id)
	{
		$result = '';
		$this->db->select('ap, iddonaturbaruitem, program.PROG, NM_PROGRAM, besar, keterangan');
        $this->db->from('donaturbaru_item');
     	$this->db->join('program', 'program.PROG = donaturbaru_item.PROG','left');
        $this->db->where('program.status','A');
        $this->db->where('noid', $id);

        $queryy = $this->db->get();
        if ($queryy->num_rows() > -1) {
            return $queryy->result();
        } else {
            return false;
        }

	}
	*/

	 function  get_cara_byr() {  
        $this->db->select('*');
        $this->db->from('cara_byr');
        $this->db->where('CARABYR is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

     function  get_ketpas() {  
        $this->db->select('*');
        $this->db->from('ket_ap');
        $this->db->where('KETPASIF is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

	 function  get_jabatan() {  
        $this->db->select('*');
        $this->db->from('jabatan');
        $this->db->where('jabatan is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

	 function  get_gaji() {  
        $this->db->select('*');
        $this->db->from('gaji');
        $this->db->where('GAJI is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

     function  get_pendidikan() {  
        $this->db->select('*');
        $this->db->from('pendidikan');
        $this->db->where('PENDIDIKAN is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }
 
     function  get_hobby() { 
        $this->db->select('*');
        $this->db->from('hobby');
        $this->db->where('hobby is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

     function  get_pekerjaan() {  
        $this->db->select('*');
        $this->db->from('pekerjaan');
        $this->db->where('PEKERJAAN is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

	public function check_data_already_exists($nama,$almktr)
	{
        $this->db->where('nama',$nama);
        $this->db->where('almktr',$almktr);
        $this->db->from($this->table);
        $query = $this->db->get();

        if ($query->num_rows() > -1) {
        	return $query->result();
        } else{
        	return $query->result();
        }

	}

	private function _get_datatables_query($where=null)
	{
		if(!$where){
		$this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, almktr, status, kodejgt');
		$this->db->from($this->table);
		$this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
		$this->db->where('status','A');
		$this->db->order_by('donaturbaru.lastupdate','DESC');
		}else {
			$this->db->select('donaturbaru.kwsn, noid, nama, almktr, status, kodejgt');
			$this->db->from($this->table);
			$this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
			$this->db->where('status','A');
			$this->db->where('donaturbaru.kwsn', $where);
			$this->db->order_by('donaturbaru.lastupdate','DESC');
			
		}

		//$sql = "SELECT * FROM donaturbaru d inner join kawasan k on (d.kwsn = k.kwsn) WHERE status = ? AND author = ?";
		//$this->db->query($sql, $param1, $param2));
		
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	private function _get_datatables_query_prog($noid)
	{	
		$this->db->select('prog, besar, keterangan, iddonaturitem');
		$this->db->from('donatur_item');
		$this->db->where('noid', $noid);
		$this->db->order_by('noid', 'DESC');

		$i = 0;
	
		foreach ($this->column_search1 as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search1) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order1), $order1[key($order1)]);
		}
		
	}
	
	public function get_bank() {  //funtion menampilkan semua bank
        $this->db->select('*');
        $this->db->from('bank');
        $this->db->where('BANK is not null');

        $queryy = $this->db->get();
        if ($queryy->num_rows() > -1) {
            return $queryy->result();
        } else {
            return false;
        }
    }

	public function get_jenis() {  //funtion menampilkan semua program
        $this->db->select('*');
        $this->db->from('program');
        $this->db->where('prog is not null');
        $this->db->where('status','A');

        $queryy = $this->db->get();
        if ($queryy->num_rows() > -1) {
            return $queryy->result();
        } else {
            return false;
        }

    }

	function get_datatables($where)
	{
		//$where = '001511';
		$this->_get_datatables_query($where);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function get_datatables_prog($noid)
	{
		$this->_get_datatables_query_prog($noid);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function count_filtered1()
	{
		$this->_get_datatables_query_prog();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all1()
	{
		$this->db->from($this->itemdon);
		return $this->db->count_all_results();
	}
	/*
	public function insert_ignore($table,array $data) {
        $_prepared = array();
        
        foreach ($data as $col => $val)
        $_prepared[$this->db->escape_str($col)] = $this->db->escape($val); 
        $this->db->query('INSERT IGNORE INTO '.$table.' ('.implode(',',array_keys($_prepared)).') VALUES('.implode(',',array_values($_prepared)).');');
    }
    */
    /*
    public function getkawasanlogin($user)
    {
    	$this->db->select('nama')->from($this->table);
		$sub = $this->subquery->start_subquery('where_in');
		$sub->select('kwsn')->from($this->kwssn)->where('kodejgt', $user);
		$this->subquery->end_subquery('kwsn');
		
    }
    */
/*
     function getkawasanlogin($state){  //funtion menampilkan kawasan berdasarkan jungut
        $this->db->select('a.kwsn');
        $this->db->from('kawasan a');
        $this->db->join('sec_users b','b.kodej = a.kodejgt','left');
        $this->db->where('b.kodej',$state);
        $this->db->order_by('a.kwsn');

        $querys = $this->db->get();
        if($querys->num_rows() > -1){
            return $querys->result();
        } else {
            return false;
        }
    }
*/
    public function get_by_iddonaturitem($iddon)
	{
		$this->db->from($this->itemdon); 
		$this->db->where('iddonaturitem',$iddon);
		$queryxyz = $this->db->get();

		return $queryxyz->row();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('noid',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_idprog($id)
	{
		$this->db->from($this->itemdon);
		$this->db->where('iddonaturitem',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{	
		$prog = $this->input->post('prog');
		$noid = $this->input->post('autoid');
		$besar = $this->input->post('nominal');
		$pegawai = $this->session->userdata('login');
		$keterangan = $this->input->post('keterangan');

			if(count($data) > -1)
			{
				$this->db->set('prog',$prog);
				$this->db->set('entri_pegawai',$pegawai);
				$this->db->set('noid',$noid);
				$this->db->set('besar', $besar);
				$this->db->set('keterangan', $keterangan);
				$this->db->set('AP', 'A');
				$this->db->insert('donatur_item');
			}
				$this->db->set('nomor',$noid);
				$this->db->set('tanggal', date('Y-m-d'));
				$this->db->set('kolom','donatur_item');
				$this->db->set('dari', 'data baru');
				$this->db->set('ENTRI_PEGAWAI', $this->session->userdata('login'));
				$this->db->insert('prbh_dnt_item');
			

		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
			
	}

	public function donasi_simpan($vals)
	{	

		$pegawai = $this->session->userdata('login');
		$noid =  $this->input->post('autoid1');
		$prog =  $this->input->post('prog1');
		$besar = $this->input->post('nominal1');
		$keterangan = $this->input->post('keterangan1');

		if(count($vals) > -1)
			{
				$this->db->set('prog',$prog);
				$this->db->set('entri_pegawai',$pegawai);
				$this->db->set('noid',$noid);
				$this->db->set('besar',$besar);
				$this->db->set('keterangan',$keterangan);
				$this->db->set('AP', 'A');
				$this->db->insert('donatur_item');
			}

	}
/*
	public function data_fetch(){
		$df = array(
		'ketpasif'		=> 			$this->input->post('ketpas1'),
		'status'		=> 			$this->input->post('sts1'),
		'kwsn'			=> 			$this->input->post('kawasann1'),
		'nama'			=> 			$this->input->post('nama1'),
		'sex'			=> 			$this->input->post('jk1'),
		'tmplahir'		=> 			$this->input->post('tempatlahir1'),
		'tgllahir'		=> 			$this->input->post('tgllahir1'),
		'almktr'		=> 			$this->input->post('almktr1'),
		'alamat'		=> 			$this->input->post('alamat1'),
		'tlprmh'		=> 			$this->input->post('telprmh1'),
		'tlpktr'		=> 			$this->input->post('teleponktr1'),
		'faxktr'		=> 			$this->input->post('faxkantor1'),
		'telphp'		=> 			$this->input->post('telepon1'),
		'telphp2'		=> 			$this->input->post('nohp1'),
		'tlphp3'		=> 			$this->input->post('nohp31'),
		'jupen'			=> 			$this->input->post('jupen1'),
		'email'			=> 			$this->input->post('email1'),
		'carabyr'		=> 			$this->input->post('carabayar1'),
		'rekdonatur'	=> 			$this->input->post('rekeningdonatur1'),
		'bank'			=> 			$this->input->post('bank1'),
		'kolektif'		=> 			$this->input->post('kolektif1'),
		'waktu_tagih'	=> 			$this->input->post('waktutgh1'),
		'npwp'			=> 			$this->input->post('npwp1'),
		'info'			=> 			$this->input->post('info1'),
		'pekerjaan'		=> 			$this->input->post('worker1'),
		'jabatan'		=> 			$this->input->post('jabatan1'),
		'hobby'			=> 			$this->input->post('hobi1')
		'pendidikan'	=> 			$this->input->post('pendidikan1'),
		'gaji'			=> 			$this->input->post('salary1')
		);
		$rem_gi = array(
				'info',
				'pekerjaan',
				'jabatan',
				'hobby',
				'pendidikan',
				'gaji',
				'jupen',
				'carabyr',
				'waktu_tagih',
				);
		$change = array();
		foreach ($df as $key => $val) {
			$value = '';
			$dataval = $val.'_data';
			global $$dataval;		
			if($$dataval!=$this->input->post($val)){
				if(in_array($key, $rem_gi)){
					$value = substr($$dataval, 2);
				}else{
					$value = $$dataval;
				}
				array_push($change, array(
					'tabel' 	=> 			'donaturbaru.'.$key,
					'history' 	=> 			$value,
				));
			}
		}
		return $change;
	}

	function write_change($id,$data){
		$noid = $this->input->post('autoid1');
		
		foreach ($data as $key => $val) {
			$this->db->insert('prbh_dnt', array(
			'noid' 				=> 			$noid,
			'tanggal' 			=> 			date('Y-m-d'),
			'kolom' 			=> 			$val['tabel'],
			'dari' 				=> 			$val['history'],
			'ENTRI_PEGAWAI' 	=> 			$this->session->userdata('login'),
			));
		}
	}
*/
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function donasi_update($where, $data)
	{
		$this->db->update($this->itemdon, $data, $where);
		return $this->db->affected_rows();
	}	

	public function delete_by_id($id)
	{
		$this->db->where('noid', $id);
		$this->db->delete($this->table);
	}
	
	public function delete_by_idone($id)
	{
		$this->db->where('iddonaturitem', $id);
		$this->db->delete($this->itemdon);
	}

}