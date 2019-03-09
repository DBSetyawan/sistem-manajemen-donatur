<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin_autentikasi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function cek_login($id,$pass) {

			$this->db->select('login, pswd, active, priv_admin, kodej, idcabang');
			$this->db->where('active', 'Y');
			$query = $this->db->get_where('sec_users',array('login' => $id, 'pswd' => $pass));
			return $query;
	}

	 public function datapengguna($login){
        $this->db->select('a.login, a.kodej, b.kwsn, a.idcabang');
        $this->db->from('sec_users a');
        $this->db->join('kawasan b','a.kodej = b.kodejgt','left');
        $this->db->where('a.login', $login);
        $query = $this->db->get();
         
        return $query->row();
    }

    public function datakawasan($login){
        $this->db->select('b.kwsn');
        $this->db->from('sec_users a');
        $this->db->join('kawasan b','a.kodej = b.kodejgt','left');
        $this->db->where('a.login', $login);
        $query = $this->db->get();
         		
        return $query->result_array();	
    }

}

/* End of file  */
/* Location: ./models/M_admin_autentikasi/ */