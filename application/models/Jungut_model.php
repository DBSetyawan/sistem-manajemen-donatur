<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jungut_model extends CI_Model {

    var $tabelj = 'sec_users';    //nama tabel
 
    function __construct() {
        parent::__construct();
    }

    function  get_jungut() {  //funtion menampilkan semua jungut
        $this->db->select('*');
        $this->db->from($this->tabelj);
        $this->db->where('kodej is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }
    
    function  get_cabang($idcabang) {  //funtion menampilkan semua jungut
        $this->db->select('*');
        $this->db->from($this->tabelj);
        $this->db->where('idcabang', $idcabang);
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

    function getautoid($table) { 
            $q = $this->db->query("SELECT MAX(noid) AS autoid FROM donaturbaru");
            $noid = ""; //kode awal
            if($q->num_rows()> -1){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = $k->autoid+1;
                    $noid = (str_repeat('0', 10-strlen($tmp))).$tmp; 
                }
                
            }else { //jika data kosong diset ke kode awal
                $noid = $this->autoid;
             }

        //$kar = "0000"; //karakter depan kodenya
        $gen = $noid;
        return $gen;
   }

    function getautoid_karyawan() { 
            $q = $this->db->query("SELECT MAX(kodej) AS autoid FROM sec_users");
            $noid = ""; //kode awal
            if($q->num_rows()> -1){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = $k->autoid+1;
                    $noid = $tmp; 
                }
                
            }else { //jika data kosong diset ke kode awal
                $noid = $this->autoid;
             }

        //$kar = "0000"; //karakter depan kodenya
        $gen = $noid;
        return $gen;
   }

    function getprogram($table) { 
            $q = $this->db->query("SELECT MAX(PROG) AS autoid FROM ".$table);
            $noid = ""; //kode awal
            if($q->num_rows()> -1){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = $k->autoid+1;
                    $noid = (str_repeat('0', 4-strlen($tmp))).$tmp; 
                }
                
            }else { //jika data kosong diset ke kode awal
                $noid = $this->autoid;
             }

        //$kar = "0000"; //karakter depan kodenya
        $gen = $noid;
        return $gen;
   }

    function getkegiatan($table) { 
            $q = $this->db->query("SELECT MAX(id_kegiatan) AS idkgtn FROM ".$table);
            $idkgt = ""; //kode awal
            if($q->num_rows()> -1){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = $k->idkgtn+1;
                    $idkgt = (str_repeat('0', 4-strlen($tmp))).$tmp; 
                }
                
            }else { //jika data kosong diset ke kode awal
                $idkgt = $this->idkgtn;
             }

        //$kar = "0000"; //karakter depan kodenya
        $gen = $idkgt;
        return $gen;
   }

    function getiddonasi($table) { 
            $q = $this->db->query("SELECT MAX(idacara) AS autoid FROM ".$table);
            $noid = ""; //kode awal
            if($q->num_rows()> -1){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = $k->autoid+1;
                    $noid = (str_repeat('0', 6-strlen($tmp))).$tmp; 
                }
                
            }else { //jika data kosong diset ke kode awal
                $noid = $this->autoid;
             }

        //$kar = "0000"; //karakter depan kodenya
        $gen = $noid;
        return $gen;
   }

    function getautoids($table) { 
            $q = $this->db->query("SELECT MAX(report_id) AS autoid FROM ".$table);
            $noid = ""; //kode awal
            if($q->num_rows()> -1){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = $k->autoid+1;
                    $noid = (str_repeat('0', 10-strlen($tmp))).$tmp; 
                }
                
            }else { //jika data kosong diset ke kode awal
                $noid = $this->autoid;
             }

        //$kar = "0000"; //karakter depan kodenya
        $gen = $noid;
        return $gen;
   }



     function  get_perod() {  //funtion menampilkan semua jungut
        $this->db->select('*');
        $this->db->from('periode');
        $this->db->where('PERIODE is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

     function  get_jupen($idcabang) {  //funtion menampilkan semua jungut
        $this->db->select('*');
        $this->db->from('sec_users');
        $this->db->where('kodej is not null');
        $this->db->where('idcabang', $idcabang);
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }

     function  get_jupens() {  //funtion menampilkan semua jungut
        $this->db->select('*');
        $this->db->from('sec_users');
        $this->db->where('kodej is not null');
        $queryj = $this->db->get();
        if ($queryj->num_rows() > -1) {
            return $queryj->result();
        } else {
            return false;
        }
    }
     
    function get_kawasanby($state){  //funtion menampilkan kawasan berdasarkan jungut
        $this->db->select('a.*');
        $this->db->from('kawasan a');
        $this->db->join('sec_users b','b.kodej = a.kodejgt','left');
        $this->db->where('b.kodej',$state);
        $this->db->where('a.nm_kawasan is not null');
        $this->db->where('a.ins_pk is not null');
        $this->db->group_by('a.nm_kawasan, a.ins_pk');
        $this->db->order_by('a.kwsn');

        $querys = $this->db->get();
        if($querys->num_rows() > -1){
            return $querys->result();
        } else {
            return false;
        }
    }

    function get_kawasan() {  //funtion menampilkan semua kawasan
        $this->db->select('*');
        $this->db->from('kawasan');
        $this->db->where('kwsn is not null');
        $this->db->order_by('kwsn','asc');
        $this->db->limit(1000, 0);
        $que = $this->db->get();
        if ($que->num_rows() > -1) {
            return $que->result();
        } else {
            return false;
        }
    }

    function get_jupenby($kwsn){  //funtion menampilkan jupen berdasarkan kawasan
        $this->db->select('a.*,b.*');
        $this->db->from('sec_users a');
        $this->db->join('kawasan b','b.kodejgt = a.kodej','left');
        $this->db->where('b.kwsn', $kwsn);
        $this->db->where('b.kwsn is not null');
        $this->db->where('a.kodej is not null');
        $this->db->where('a.name is not null');
        $this->db->group_by('a.name');
        $this->db->order_by('a.kodej');

        $query = $this->db->get();
        if($query->num_rows() > -1){
            return $query->result();
        } else {
            return false;
        }
    }

     function get_kwsnby($kwsn){  //funtion menampilkan jupen berdasarkan kawasan
        $this->db->select('b.*,a.*');
        $this->db->from('sec_users a');
        $this->db->join('kawasan b','b.kodejgt = a.kodej','left');
        $this->db->where('b.kwsn', $kwsn);
        $this->db->where('b.kwsn is not null');
        $this->db->where('a.kodej is not null');
        $this->db->where('a.name is not null');
        $this->db->group_by('a.name');
        $this->db->order_by('a.kodej');

        $query = $this->db->get();
        if($query->num_rows() > -1){
            return $query->result();
        } else {
            return false;
        }
    }

     function get_namakwsnby($kwsn){  //funtion menampilkan jupen berdasarkan kawasan
        $this->db->select('*');
        $this->db->from('kawasan');
        $this->db->where('kwsn', $kwsn);

        $query = $this->db->get();
        if($query->num_rows() > -1){
            return $query->result();
        } else {
            return false;
        }
    }
}

/* End of file  */
/* Location: ./application/models/ */