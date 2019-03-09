<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person_model extends CI_Model {

var $table = 'donaturbaru';
var $kaget = 'kegiatan_acara';
var $donasi = 'pengelolaan_donasi';
var $users = 'program';
var $pbhdnt = 'prbh_dnt_item';
var $montdnt = 'prbh_dnt';
var $tables = 'donatur';
var $itemdon = 'donatur_item';
var $sec_users = 'sec_users';
var $kwssn = 'kawasan';
var $column_order = array('donaturbaru.kwsn','noid','nama','status','kodejgt',null);
var $column_order_prbh = array('nomor','tanggal','kolom','dari','entri_pegawai',null);
var $column_order_monitoring = array('kolom','noid','dari','entri_pegawai',null);
var $column_order_secusers = array('login','pswd','name','email','active','priv_admin','idcabang','idpusat','kodej',null);
var $column_order_kegiatan = array('idacara','nama_acara','ketua_pelaksana','alamat_kegiatan','total_donasi','id_kegiatan',null);
var $column_order2 = array('idcara',null);
var $column_order1 = array('ap', 'prog', 'besar', 'keterangan', 'iddonaturitem','entri_tgl',null);
var $column_search = array('noid','nama','kodejgt','status','donaturbaru.kwsn');
var $column_search_prbh = array('nomor','tanggal','kolom','dari','entri_pegawai');
var $column_search_secusers = array('login','email','idcabang','idpusat','kodej');
var $column_search_monitoring = array('noid','entri_pegawai','kolom','dari');
var $column_search_kegiatan = array('id_kegiatan','idacara','nama_acara','ketua_pelaksana','alamat_kegiatan','total_donasi');
var $column_search2 = array('idacara');
var $column_search1 = array('ap', 'prog', 'besar', 'keterangan', 'iddonaturitem', 'entri_tgl');
var $orderx = array('noid' => 'asc');
var $order_prbh = array('nomor' => 'asc');
var $order_monitoring = array('noid' => 'asc');
var $order_secusers = array('idpusat' => 'asc');
var $orders = array('id_kegiatan' => 'asc');
var $order1 = array('iddonaturitem' => 'desc');
var $order2 = array('idacara' => 'ASC');
var $kolomcari = array('prog','harga','KELOMPOK','status');
var $kolomurutan = array('prog','harga','KELOMPOK','status',null);
var $urut = array('prog' => 'asc');
var $column_order_dnt = array('nomor', 'tanggal', 'kolom', 'dari', 'menjadi', 'entri_pegawai',null);
var $column_search_dnt = array('nomor', 'tanggal', 'kolom', 'dari', 'menjadi', 'entri_pegawai');
var $orders_dnt = array('nomor' => 'asc');


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

    function  get_namas() {  
        $this->db->select('*');
        $this->db->from('kegiatan_acara');
        $this->db->where('id_kegiatan is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

    function  get_nama_acara() {  
        $this->db->select('*');
        $this->db->from('program');
        $this->db->where('PROG is not null');
        $this->db->order_by('PROG','ASC');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    } 

    function  get_nama_donaturs() {  
        $this->db->select('nama');
        $this->db->from('donaturbaru');
        $this->db->where('noid is not null');
        $query = $this->db->get();
        if ($query->num_rows() > -1) {
            return $query->result();
        } else {
            return false;
        }
    }

     function  get_info() {  
        $this->db->select('*');
        $this->db->from('info');
        $this->db->where('INFO is not null');
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
        $this->db->order_by('jabatan','ASC');
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
        $this->db->order_by('GAJI','ASC');
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
        $this->db->order_by('PENDIDIKAN','ASC');

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
        $this->db->order_by('HOBBY','ASC');

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
        $this->db->order_by('PEKERJAAN','ASC');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

      function  get_cabangs() {  
        $this->db->select('idcabang');
        $this->db->from('sec_users');
        $this->db->where('login is not null');
        $this->db->group_by('idcabang','ASC');
        $this->db->limit(6,1);
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

     function  get_pusat() {  
        $this->db->select('idpusat');
        $this->db->from('sec_users');
        $this->db->where('login is not null');
        $this->db->group_by('idpusat','ASC');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

    function  get_wkt() {  
        $this->db->select('*');
        $this->db->from('waktu_penagihan');
        $this->db->where('waktu_tagih is not null');
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
        $this->db->where('alamat',$almktr);
        $this->db->from($this->table);
        $query = $this->db->get();

        if ($query->num_rows() > -1) {
        	return $query->result();
        } else{
        	return $query->result();
        }

	}

	public function check_data_already_exists_karyawan($logged,$email)
	{
        $this->db->where('login',$logged);
        $this->db->where('email',$email);
        $this->db->from($this->sec_users);
        $query = $this->db->get();

        if ($query->num_rows() > -1) {
        	return $query->result();
        } else{
        	return $query->result();
        }

	}

	public function check_data_already_exists_programs($prgs)
    {
        $this->db->where('NM_PROGRAM',$prgs);
        $this->db->from($this->users);
        $query = $this->db->get();

        if ($query->num_rows() > -1) {
            return $query->result();
        } else{
            return $query->result();
        }

    }

    public function cek_kegiatan($m)
	{
        $this->db->where('name',$m);
        $this->db->from($this->sec_users);
        $query = $this->db->get();

        if ($query->num_rows() > -1) {
        	return $query->result();
        } else{
        	return $query->result();
        }

	}

	public function check_data_already_exists_program_donasi($prog,$id)
	{
        $this->db->where('noid',$id);
        $this->db->where('prog',$prog);
        $this->db->from($this->itemdon);
        $query = $this->db->get();

        if ($query->num_rows() > -1) {
        	return $query->result();
        } else{
        	return $query->result();
        }

	}

	public function check_data_already_exists_pengajuan_acara($acara,$tanggal_acara)
	{
        $this->db->where('acara',$acara);
        $this->db->where('tanggal_acara',$tanggal_acara);
        $this->db->from($this->donasi);
        $query = $this->db->get();

        if ($query->num_rows() > -1) {
        	return $query->result();
        } else{
        	return $query->result();
        }

	}

	public function check_akuntibilitas_donasi($prog)
	{
        $this->db->select('SUM(besar) as total');
		$this->db->from($this->itemdon);
		$this->db->where('prog', $prog);
		return $this->db->get()->row()->total;

	}

	public function check_akuntibilitas_pengelolaan($acara)
	{
        $this->db->select('SUM(dana_persetujuan) as total');
		$this->db->from($this->donasi);
		$this->db->where('idacara', $acara);
		return $this->db->get()->row()->total;

	}

	public function graph()
	{
		$this->db->select('NM_PROGRAM, sum(besar) as besar');
		$this->db->from('donatur_item');
		$this->db->join('program','program.prog = donatur_item.prog');
		$this->db->group_by('NM_PROGRAM');
		//$this->db->order_by('besar','DESC');
		$sri = $this->db->get();
		if ($sri->num_rows() > -1){
			return $sri->result();
		}else{
			return $sri->result();
		}
	}

    public function pendonasian()
    {
        $this->db->select('donaturbaru.nama as nama, sum(donatur_item.besar) as besar');
        $this->db->from('donatur_item');
        $this->db->join('program','program.prog = donatur_item.prog');
        $this->db->join('donaturbaru','donaturbaru.autoid = donatur_item.noid');
        $this->db->group_by('donaturbaru.nama');
        //$this->db->order_by('besar','DESC');
        $sri = $this->db->get();
        if ($sri->num_rows() > -1){
            return $sri->result();
        }else{
            return $sri->result();
        }
    } 

	private function _get_datatables_query($where=null, $login, $priv_admin, $idcabang)
    {   
        if($login == 'admin' && $idcabang == '0'){
            $this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, donaturbaru.alamat, status, kawasan.kodejgt');
            $this->db->from($this->table);
            $this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
            //$this->db->where('donaturbaru.cabang',$idcabang);
            $this->db->order_by('donaturbaru.lastupdate','DESC');
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '1') {
            $this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, donaturbaru.alamat, status, kawasan.kodejgt');
            $this->db->from($this->table);
            $this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
            $this->db->join('sec_users','sec_users.kodej = kawasan.kodejgt');
            //$this->db->where('status','A');
            $this->db->where('donaturbaru.cabang', $idcabang);
            $this->db->order_by('donaturbaru.lastupdate','DESC');
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '2') {
            $this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, donaturbaru.alamat, status, kawasan.kodejgt');
            $this->db->from($this->table);
            $this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
            $this->db->join('sec_users','sec_users.kodej = kawasan.kodejgt');
            //$this->db->where('status','A');
            $this->db->where('donaturbaru.cabang', $idcabang);
            $this->db->order_by('donaturbaru.lastupdate','DESC');
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '3') {
            $this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, donaturbaru.alamat, status, kawasan.kodejgt');
            $this->db->from($this->table);
            $this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
            $this->db->join('sec_users','sec_users.kodej = kawasan.kodejgt');
            //$this->db->where('status','A');
            $this->db->where('donaturbaru.cabang', $idcabang);
            $this->db->order_by('donaturbaru.lastupdate','DESC');
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '5') {
            $this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, donaturbaru.alamat, status, kawasan.kodejgt');
            $this->db->from($this->table);
            $this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
            $this->db->join('sec_users','sec_users.kodej = kawasan.kodejgt');
            //$this->db->where('status','A');
            $this->db->where('donaturbaru.cabang', $idcabang);
            $this->db->order_by('donaturbaru.lastupdate','DESC');
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '6') {
            $this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, donaturbaru.alamat, status, kawasan.kodejgt');
            $this->db->from($this->table);
            $this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
            $this->db->join('sec_users','sec_users.kodej = kawasan.kodejgt');
            //$this->db->where('status','A');
            $this->db->where('donaturbaru.cabang', $idcabang);
            $this->db->order_by('donaturbaru.lastupdate','DESC');
            $this->db->limit(9950,0);
        }else {
            $this->db->select('donaturbaru.kwsn, donaturbaru.noid, nama, donaturbaru.alamat, status, kawasan.kodejgt');
            $this->db->from($this->table);
            $this->db->join('kawasan','kawasan.kwsn = donaturbaru.kwsn');
            $this->db->join('sec_users','sec_users.kodej = kawasan.kodejgt');
            //$this->db->where('status','A');
            $this->db->where('donaturbaru.entri_pegawai', $login);
            $this->db->order_by('donaturbaru.lastupdate','DESC');
            //$this->db->limit(9950,0);
        }

        //$sql = "SELECT * FROM donaturbaru d inner join kawasan k on (d.kwsn = k.kwsn) WHERE status = ? AND author = ?";
        //$this->db->query($sql, $param1, $param2));
        
        $i = 0;
    
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
            $this->db->order_by($orderx);
        }
    }

    private function _get_datatables_query_monitoring($where=null, $login, $priv_admin, $idcabang)
    {   
        if($login == 'admin' && $idcabang == '0'){
            $this->db->select('noid, tanggal, kolom, dari, menjadi, entri_pegawai, autotime');
            $this->db->from($this->montdnt);
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '1') {
            $this->db->select('noid, tanggal, kolom, dari, menjadi, entri_pegawai, autotime');
            $this->db->from($this->montdnt);
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '2') {
            $this->db->select('noid, tanggal, kolom, dari, menjadi, entri_pegawai, autotime');
            $this->db->from($this->montdnt);
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '3') {
            $this->db->select('noid, tanggal, kolom, dari, menjadi, entri_pegawai, autotime');
            $this->db->from($this->montdnt);
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '5') {
            $this->db->select('noid, tanggal, kolom, dari, menjadi, entri_pegawai, autotime');
            $this->db->from($this->montdnt);
            $this->db->limit(9950,0);
        }elseif($priv_admin == 'Y' && $idcabang == '6') {
            $this->db->select('noid, tanggal, kolom, dari, menjadi, entri_pegawai, autotime');;
            $this->db->from($this->montdnt);
            $this->db->limit(9950,0);
        }else {
            $this->db->select('noid, tanggal, kolom, dari, menjadi, entri_pegawai, autotime');
            $this->db->from($this->montdnt);
            $this->db->limit(9950,0);
        }

        //$sql = "SELECT * FROM donaturbaru d inner join kawasan k on (d.kwsn = k.kwsn) WHERE status = ? AND author = ?";
        //$this->db->query($sql, $param1, $param2));
        
        $i = 0;
    
        foreach ($this->column_search_monitoring as $item) // loop column 
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

                if(count($this->column_search_monitoring) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order_monitoring[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by($order_monitoring);
        }
    }

    private function _get_datatables_query_monitoring_dntitm($where=null, $login, $priv_admin, $idcabang)
	{	
		if($login == 'admin' && $idcabang == '0'){
			$this->db->select('nomor, tanggal, kolom, dari, menjadi, entri_pegawai');
            $this->db->from($this->pbhdnt);
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '1') {
			$this->db->select('nomor, tanggal, kolom, dari, menjadi, entri_pegawai');
			$this->db->from($this->pbhdnt);
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '2') {
			$this->db->select('nomor, tanggal, kolom, dari, menjadi, entri_pegawai');
			$this->db->from($this->pbhdnt);
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '3') {
			$this->db->select('nomor, tanggal, kolom, dari, menjadi, entri_pegawai');
			$this->db->from($this->pbhdnt);
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '5') {
			$this->db->select('nomor, tanggal, kolom, dari, menjadi, entri_pegawai');
			$this->db->from($this->pbhdnt);
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '6') {
			$this->db->select('nomor, tanggal, kolom, dari, menjadi, entri_pegawai');;
			$this->db->from($this->pbhdnt);
			$this->db->limit(9950,0);
		}else {
			$this->db->select('nomor, tanggal, kolom, dari, menjadi, entri_pegawai');
			$this->db->from($this->pbhdnt);
			$this->db->limit(9950,0);
		}

		//$sql = "SELECT * FROM donaturbaru d inner join kawasan k on (d.kwsn = k.kwsn) WHERE status = ? AND author = ?";
		//$this->db->query($sql, $param1, $param2));
		
		$i = 0;
    
        foreach ($this->column_search_dnt as $item) // loop column 
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

                if(count($this->column_search_dnt) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order_dnt[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by($orders_dnt);
        }
	}


	private function _get_datatables_query_donasi($where=null, $login, $priv_admin, $idcabang)
	{	
		if($login == 'admin' && $idcabang == '0'){
			$this->db->select('idacara, acara, tanggal_acara, dana_acara, dana_persetujuan, pihak_pengajuan');
			$this->db->from($this->donasi);
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		} else if($priv_admin == 'Y' && $idcabang == '1'){
			$this->db->select('idacara, acara, tanggal_acara, dana_acara, dana_persetujuan, pihak_pengajuan');
			$this->db->from($this->donasi);
			$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '2'){
			$this->db->select('idacara, acara, tanggal_acara, dana_acara, dana_persetujuan, pihak_pengajuan');
			$this->db->from($this->donasi);
			$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '3'){
			$this->db->select('idacara, acara, tanggal_acara, dana_acara, dana_persetujuan, pihak_pengajuan');
			$this->db->from($this->donasi);
			$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '5'){
			$this->db->select('idacara, acara, tanggal_acara, dana_acara, dana_persetujuan, pihak_pengajuan');
			$this->db->from($this->donasi);
			$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '6'){
			$this->db->select('idacara, acara, tanggal_acara, dana_acara, dana_persetujuan, pihak_pengajuan');
			$this->db->from($this->donasi);
			$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else{
			$this->db->select('idacara, acara, tanggal_acara, dana_acara, dana_persetujuan, pihak_pengajuan');
			$this->db->from($this->donasi);
			$this->db->limit(9950,0);
		}
		

		//$sql = "SELECT * FROM donaturbaru d inner join kawasan k on (d.kwsn = k.kwsn) WHERE status = ? AND author = ?";
		//$this->db->query($sql, $param1, $param2));
		$i = 0;
    
        foreach ($this->column_search2 as $item) // loop column 
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

                if(count($this->column_search2) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by($order2);
        }
	}



	private function _get_datatables_query_prog($noid)
	{	
		$this->db->select('ap, prog, besar, keterangan, iddonaturitem, entri_tgl');
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
			$this->db->order_by($order1);
		}
		
	}

	private function _get_datatables_query_kegiatan($where=null,$login,$priv_admin,$idcabang)
	{	
		if($login == 'admin' && $idcabang == '0'){
			$this->db->select('id_kegiatan,idacara,nama_acara,ketua_pelaksana,alamat_kegiatan,total_donasi');
			$this->db->from($this->kaget);
			$this->db->order_by('id_kegiatan', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		} else if($priv_admin == 'Y' && $idcabang == '1'){
			$this->db->select('id_kegiatan,idacara,nama_acara,ketua_pelaksana,alamat_kegiatan,total_donasi');
			$this->db->from($this->kaget);
			$this->db->order_by('id_kegiatan', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '2'){
			$this->db->select('id_kegiatan,idacara,nama_acara,ketua_pelaksana,alamat_kegiatan,total_donasi');
			$this->db->from($this->kaget);
			$this->db->order_by('id_kegiatan', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '3'){
			$this->db->select('id_kegiatan,idacara,nama_acara,ketua_pelaksana,alamat_kegiatan,total_donasi');
			$this->db->from($this->kaget);
			$this->db->order_by('id_kegiatan', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '5'){
			$this->db->select('id_kegiatan,idacara,nama_acara,ketua_pelaksana,alamat_kegiatan,total_donasi');
			$this->db->from($this->kaget);
			$this->db->order_by('id_kegiatan', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '6'){
			$this->db->select('id_kegiatan,idacara,nama_acara,ketua_pelaksana,alamat_kegiatan,total_donasi');
			$this->db->from($this->kaget);
			$this->db->order_by('id_kegiatan', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else{
			$this->db->select('id_kegiatan,idacara,nama_acara,ketua_pelaksana,alamat_kegiatan,total_donasi');
			$this->db->from($this->kaget);
			$this->db->limit(9950,0);
		}

		$i = 0;
	
		foreach ($this->column_search_kegiatan as $item) // loop column 
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

				if(count($this->column_search_kegiatan) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order_kegiatan[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by($orders);
		}
		
	}

	//karyawan

	private function _get_datatables_query_secusers($where=null,$login,$priv_admin,$idcabang)
	{	
		if($login == 'admin' && $idcabang == '0'){
			$this->db->select('login,pswd,name,email,active,priv_admin,idcabang,idpusat,kodej');
			$this->db->from($this->sec_users);
			$this->db->order_by('idcabang', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		} else if($priv_admin == 'Y' && $idcabang == '1'){
			$this->db->select('login,pswd,name,email,active,priv_admin,idcabang,idpusat,kodej');
			$this->db->from($this->sec_users);
            $this->db->where('idcabang', $idcabang);
            $this->db->where_not_in('priv_admin', 'Y');
			$this->db->order_by('idcabang', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '2'){
			$this->db->select('login,pswd,name,email,active,priv_admin,idcabang,idpusat,kodej');
			$this->db->from($this->sec_users);
            $this->db->where('idcabang', $idcabang);
            $this->db->where_not_in('priv_admin', 'Y');
			$this->db->order_by('idcabang', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '3'){
			$this->db->select('login,pswd,name,email,active,priv_admin,idcabang,idpusat,kodej');
			$this->db->from($this->sec_users);
            $this->db->where('idcabang', $idcabang);
            $this->db->where_not_in('priv_admin', 'Y');
			$this->db->order_by('idcabang', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '5'){
			$this->db->select('login,pswd,name,email,active,priv_admin,idcabang,idpusat,kodej');
			$this->db->from($this->sec_users);
            $this->db->where('idcabang', $idcabang);
            $this->db->where_not_in('priv_admin', 'Y');
			$this->db->order_by('idcabang', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else if($priv_admin == 'Y' && $idcabang == '6'){
			$this->db->select('login,pswd,name,email,active,priv_admin,idcabang,idpusat,kodej');
			$this->db->from($this->sec_users);
            $this->db->where('idcabang', $idcabang);
            $this->db->where_not_in('priv_admin', 'Y');
			$this->db->order_by('idcabang', 'DESC');
			//$this->db->where('idcabang', $idcabang);
			$this->db->limit(9950,0);
		}else{
			$this->db->select('login,pswd,name,email,active,priv_admin,idcabang,idpusat,kodej');
			$this->db->from($this->sec_users);
			$this->db->limit(9950,0);
		}

		$i = 0;
	
		foreach ($this->column_search_secusers as $item) // loop column 
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

				if(count($this->column_search_secusers) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order_secusers[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by($order_secusers);
		}
		
	}

	private function _get_datatables_query_program($where=null,$login,$priv_admin,$idcabang)
	{	
		
		if($login == 'admin' && $idcabang == '0'){
			$this->db->select('PROG, status, NM_PROGRAM, HARGA, KELOMPOK');
			$this->db->from($this->users);
			$this->db->order_by('PROG', 'ASC');
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '1') {
			$this->db->select('PROG, status, NM_PROGRAM, HARGA, KELOMPOK');
			$this->db->from($this->users);
			$this->db->order_by('PROG', 'ASC');
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '2') {
			$this->db->select('PROG, status, NM_PROGRAM, HARGA, KELOMPOK');
			$this->db->from($this->users);
			$this->db->order_by('PROG', 'ASC');
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '3') {
			$this->db->select('PROG, status, NM_PROGRAM, HARGA, KELOMPOK');
			$this->db->from($this->users);
			$this->db->order_by('PROG', 'ASC');
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '5') {
			$this->db->select('PROG, status, NM_PROGRAM, HARGA, KELOMPOK');
			$this->db->from($this->users);
			$this->db->order_by('PROG', 'ASC');
			$this->db->limit(9950,0);
		}elseif($priv_admin == 'Y' && $idcabang == '6') {
			$this->db->select('PROG, status, NM_PROGRAM, HARGA, KELOMPOK');
			$this->db->from($this->users);
			$this->db->order_by('PROG', 'ASC');
			$this->db->limit(9950,0);
		}else {
			$this->db->select('PROG, status, NM_PROGRAM, HARGA, KELOMPOK');
			$this->db->from($this->users);
			$this->db->order_by('PROG', 'ASC');
			$this->db->limit(9950,0);
		}


		$i = 0;
	
		foreach ($this->kolomcari as $item) // loop column 
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

				if(count($this->kolomcari) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->kolomurutan[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by($urut);
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

    public function get_jenis_acara($cabang) {
        $this->db->select('*');
        $this->db->from('pengelolaan_donasi');
        $this->db->join('program', 'program.PROG = pengelolaan_donasi.acara');
        $this->db->where('idcabang',$cabang);
        
        $queryy = $this->db->get();
        if ($queryy->num_rows() > -1) {
            return $queryy->result();
        } else {
            return false;
        }

    }

	function get_datatables($where,$login,$priv_admin,$idcabang)
    {
        //$where = '001511';
        $this->_get_datatables_query($where,$login,$priv_admin,$idcabang);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function get_datatables_prbh($where,$login,$priv_admin,$idcabang)
    {
        //$where = '001511';
        $this->_get_datatables_query_monitoring_dntitm($where,$login,$priv_admin,$idcabang);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function get_datatables_monitoring($where,$login,$priv_admin,$idcabang)
	{
		$this->_get_datatables_query_monitoring($where,$login,$priv_admin,$idcabang);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function get_datatables_donasi($where,$login,$priv_admin,$idcabang)
	{
		//$where = '001511';
		$this->_get_datatables_query_donasi($where,$login,$priv_admin,$idcabang);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered_donasi($login,$priv_admin,$idcabang)
	{
		$this->_get_datatables_query_donasi(null,$login,$priv_admin,$idcabang);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_donasi()
    {
        $this->db->from($this->donasi);
        return $this->db->count_all_results();
    }

    public function count_all_prbh()
    {
        $this->db->from($this->pbhdnt);
        return $this->db->count_all_results();
    }

    public function count_all_monitoring()
	{
		$this->db->from($this->montdnt);
		return $this->db->count_all_results();
	}

	function get_datatables_prog($noid,$login, $priv_admin, $idcabang)
	{
		$this->_get_datatables_query_prog($noid);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered($login,$priv_admin,$idcabang)
    {
        $this->_get_datatables_query(null,$login,$priv_admin,$idcabang);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_filtered_prbh($login,$priv_admin,$idcabang)
    {
        $this->_get_datatables_query_monitoring_dntitm(null,$login,$priv_admin,$idcabang);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_filtered_monitoring($login,$priv_admin,$idcabang)
	{
		$this->_get_datatables_query_monitoring(null,$login,$priv_admin,$idcabang);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function get_datatables_program($where,$login, $priv_admin, $idcabang)
	{
		$this->_get_datatables_query_program($where,$login,$priv_admin,$idcabang);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function get_datatables_kegiatan($where, $login, $priv_admin, $idcabang)
	{
		$this->_get_datatables_query_kegiatan($where,$login,$priv_admin,$idcabang);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function get_datatables_secusers($where, $login, $priv_admin, $idcabang)
	{
		$this->_get_datatables_query_secusers($where,$login,$priv_admin,$idcabang);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtereds($login,$priv_admin,$idcabang)
	{
		$this->_get_datatables_query_program(null,$login,$priv_admin,$idcabang);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_filtered_kegiatan($login,$priv_admin,$idcabang)
	{
		$this->_get_datatables_query_kegiatan(null,$login,$priv_admin,$idcabang);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_filtered_secusers($login,$priv_admin,$idcabang)
	{
		$this->_get_datatables_query_secusers(null,$login,$priv_admin,$idcabang);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_alls()
	{
		$this->db->from($this->users);
		return $this->db->count_all_results();
	}

	public function count_all_kegiatan()
	{
		$this->db->from($this->kaget);
		return $this->db->count_all_results();
	}

	public function count_all_secusers()
	{
		$this->db->from($this->sec_users);
		return $this->db->count_all_results();
	}

	function count_filtered1($login,$priv_admin,$idcabang)
	{
		$this->_get_datatables_query_prog(null,$login,$priv_admin,$idcabang);
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

	public function get_by_idkegiatan($idkgt)
	{
		$this->db->from($this->kaget); 
		$this->db->where('id_kegiatan',$idkgt);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_idsecusers($logged)
	{
		$this->db->from($this->sec_users); 
		$this->db->where('login',$logged);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_idprogram($id)
	{
		$this->db->from($this->users);
		$this->db->where('PROG',$id);
		$queryxyz = $this->db->get();

		return $queryxyz->row();
	}

	public function get_by_donasiid($idacara)
	{
		$this->db->from($this->donasi);
		$this->db->where('idacara', $idacara);
		$queas = $this->db->get();

		return $queas->row();
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

	public function save($data, $prog, $noid, $besar, $pegawai, $keterangan)
	{	

		if (count($data> -1)) 
			{
				$this->db->set('prog',$prog);
				$this->db->set('entri_tgl', date('Y-m-d'));
				$this->db->set('entri_pegawai',$pegawai);
				$this->db->set('noid',$noid);
				$this->db->set('besar', $besar);
				$this->db->set('keterangan', $keterangan);
				$this->db->set('AP', 'A');
				$this->db->insert('donatur_item');
			}

			if (count($noid> -1)) 
			{
				$this->db->set('noid',$noid);
				$this->db->set('tanggal', date('Y-m-d'));
				$this->db->set('petugas',$pegawai);
				$this->db->set('program',$prog);
				$this->db->set('jumlah', $besar);
				$this->db->insert('laporan_donatur');
			}

		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
			
	}

	public function save_programs($data)
	{	

		$this->db->insert($this->users, $data);
		return $this->db->insert_id();
			
	}

	public function save_pdon($data)
	{	

		$this->db->insert($this->donasi, $data);
		return $this->db->insert_id();
			
	}

	public function save_kgts($data)
	{	

		$this->db->insert($this->kaget, $data);
		return $this->db->insert_id();
			
	}

	public function save_secusers($data)
	{	

		$this->db->insert($this->sec_users, $data);
		return $this->db->insert_id();
			
	}

    public function save_secusers_cabang($data)
    {   

        $this->db->insert($this->sec_users, $data);
        return $this->db->insert_id();
            
    }


	public function donasi_simpan($vals, $pegawai, $noid, $prog, $besar, $keterangan, $date)
	{	

		if(count($vals) > -1)
			{
				$this->db->set('prog',$prog);
				$this->db->set('entri_pegawai',$pegawai);
				$this->db->set('noid',$noid);
				$this->db->set('entri_tgl',$date);
				$this->db->set('besar',$besar);
				$this->db->set('keterangan',$keterangan);
				$this->db->set('AP', 'A');
				$this->db->insert('donatur_item');
			}

			if (count($noid> -1)) 
			{
				$this->db->set('noid',$noid);
				$this->db->set('tanggal', date('Y-m-d'));
				$this->db->set('petugas',$pegawai);
				$this->db->set('program',$prog);
				$this->db->set('jumlah', $besar);
				$this->db->insert('laporan_donatur');
			}

	}

	public function ambil_data_item($data,$datalama){ 
	
		$df = array(
			
			'prog'			=> 			'progs',
			'besar'			=> 			'besar',
			'ap'			=> 			'statuss',
			'periode'		=> 			'pde',
			'sampaiap'		=> 			'bl',
			'keterangan'	=> 			'keterangans'

		);

		$change = array();
		foreach ($df as $keys => $vals) {
			if($datalama[$keys]!=$data[$keys]) {
				array_push($change, array(
					'tabel' 	=> 			'donatur_item.'.$keys,
					'history' 	=> 			$data[$keys],
					'dari' 	=> 			$datalama[$keys]
				));
			}
		}

		return $change;

	}

	function perubahan_donatur_item($id, $data){

		foreach ($data as $key => $val) {			
			$this->db->set('nomor', $id);
			$this->db->set('tanggal', date('Y-m-d'));
			$this->db->set('kolom', $val['tabel']);
			$this->db->set('dari', $val['dari']);
			$this->db->set('menjadi', $val['history']);
			$this->db->set('entri_pegawai', $this->session->userdata('login'));
			$this->db->insert('prbh_dnt_item');
		}

		return $data;

	}

	public function ambil_data($data, $dataold){
		$dfs = array(
		'ketpasif'		=> 			'ketpas1',
		'status'		=> 			'sts1',
		'kwsn'			=> 			'kawasann1',
		'nama'			=> 			'nama1',
		'sex'			=> 			'jk1',
		//'tmplahir'		=> 			'tempatlahir1',
		'tgllahir'		=> 			'tgllahir1',
		//'almktr'		=> 			'almktr1',
		'alamat'		=> 			'alamat1',
		//'tlprmh'		=> 			'telprmh1',
		//'tlpktr'		=> 			'teleponktr1',
		//'faxktr'		=> 			'faxkantor1',
		//'telphp'		=> 			'telepon1',
		//'telphp2'		=> 			'nohp1',
		//'tlphp3'		=> 			'nohp31',
		'jupen'			=> 			'jupen1',
		'email'			=> 			'email1',
		'carabyr'		=> 			'carabayar1',
		//'rekdonatur'	=> 			'rekeningdonatur1',
		'bank'			=> 			'bank1',
		//'kolektif'		=> 			'kolektif1',
		'waktu_tagih'	=> 			'waktutgh1',
		//'npwp'			=> 			'npwp1',
		'info'			=> 			'info1',
		'pekerjaan'		=> 			'worker1',
		'jabatan'		=> 			'jabatan1',
		'hobby'			=> 			'hobi1',
		'pendidikan'	=> 			'pendidikan1',
		'gaji'			=> 			'salary1'
		);
		
		$change = array();
		foreach ($dfs as $keys => $vals) {
			if($dataold[$keys]!=$data[$keys]) {
				array_push($change, array(
					'tabel' 	=> 			'donaturbaru.'.$keys,
					'history' 	=> 			$data[$keys],
					'dari' 		=> 			$dataold[$keys]
				));
			}
		}

		return $change;

		/*
		$change = array();
		foreach ($df as $keys => $vals) {
			$values = '';
			$dataval = $vals.'_data';
			global $$dataval;
			if($$dataval =	 $this->input->post($vals)){
				if(in_array($keys, $rem_gi)){
					$values = $$dataval;
				}else{
					$values = $$dataval;
				}
				array_push($change, array(
					'tabel' 	=> 			'donaturbaru.'.$keys,
					'history' 	=> 			$values
				));
			}
		}
		return $change;
		*/
	}

	function perubahan_donatur($id, $data){

		foreach ($data as $key => $val) {
			$this->db->set('noid', $id);
			$this->db->set('tanggal', date('Y-m-d'));
			$this->db->set('kolom', $val['tabel']);
			$this->db->set('dari', $val['dari']);
			$this->db->set('menjadi', $val['history']);
			$this->db->set('entri_pegawai', $this->session->userdata('login'));
			$this->db->insert('prbh_dnt');
		}

		return $data;

	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function update_programs($where, $data)
	{
		$this->db->update($this->users, $data, $where);
		return $this->db->affected_rows();
	}

	public function update_pdonss($where, $data)
	{
		$this->db->update($this->donasi, $data, $where);
		return $this->db->affected_rows();
	}

	public function update_kegiatanku($where, $data)
	{
		$this->db->update($this->kaget, $data, $where);
		return $this->db->affected_rows();
	}

	public function update_secusers($where, $data)
	{
		$this->db->update($this->sec_users, $data, $where);
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

	public function delete_by_idprogram($id)
	{
		$this->db->where('PROG', $id);
		$this->db->delete($this->users);
	}
	/*
	 public function getautoid($table) { 
	        $c = $this->db->query("SELECT * from donaturbaru");

	        if ($c->num_rows()>0) {
	        	$q = $this->db->query("SELECT MAX(noid) AS autoid FROM donaturbaru");
		        $noid = ""; //kode awal
		        if($q->num_rows()> -1){ //jika data ada
		            foreach($q->result() as $k){
		                $tmp = $k->autoid+1;
		                $noid = (str_repeat('0', 10-strlen($tmp))).$tmp; 
		            }
		        }else { //jika data kosong diset ke kode awal
		            $noid = $this->autoidd;
		         }

	        }else { //JIKA BELUM ADA ID
	        	$q = $this->db->query("SELECT MAX(noid) AS autoidd FROM donatur");
		        $noid = ""; //kode awal
		        if($q->num_rows()> -1){ //jika data ada
		            foreach($q->result() as $k){
		                $tmp = $k->autoidd+1;
		                $noid = (str_repeat('0', 10-strlen($tmp))).$tmp; 
		            }
		        }else { //jika data kosong diset ke kode awal
		            $noid = $this->autoidd;
		         }
        }

        //$kar = "0000"; //karakter depan kodenya
        $gen = $noid;
        return $gen;
   }

   public function getautoid2($table) { 
	        $c = $this->db->query("SELECT * from donaturbaru");

	        if ($c->num_rows()>0) {
	        	$q = $this->db->query("SELECT MAX(autoid) AS autoi FROM donaturbaru");
		        $noid = ""; //kode awal
		        if($q->num_rows()> -1){ //jika data ada
		            foreach($q->result() as $k){
		                $tmp = $k->autoi+1;
		                //$noid = (str_repeat('0', 10-strlen($tmp))).$tmp; 
		            }
		        }else { //jika data kosong diset ke kode awal
		            $noid = $this->autoid;
		         }

	        }else { //JIKA BELUM ADA ID
	        	$q = $this->db->query("SELECT MAX(autoid) AS autoii FROM donatur");
		        $noid = ""; //kode awal
		        if($q->num_rows()> -1){ //jika data ada
		            foreach($q->result() as $k){
		                $tmp = $k->autoii+1;
		                //$noid = (str_repeat('0', 10-strlen($tmp))).$tmp; 
		            }
		        }else { //jika data kosong diset ke kode awal
		            $noid = $this->autoid;
		         }
        }

        //$kar = "0000"; //karakter depan kodenya
        $aut = $tmp;
        return $aut;
   } 
	*/
}