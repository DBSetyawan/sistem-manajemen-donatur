<?php
  if($priv_admin == "Y"  && $idcabang == "0"){
  	$this->load->view('person_view');
 }elseif($idcabang == "1" && $priv_admin == "Y"){
  	$this->load->view('cabang_view');
  }elseif($idcabang == "2" && $priv_admin == "Y"){
  	$this->load->view('cabang_view');
  }elseif($idcabang == "3" && $priv_admin == "Y"){
  	$this->load->view('cabang_view');
  }elseif($idcabang == "5" && $priv_admin == "Y"){
  	$this->load->view('cabang_view');
  }elseif($idcabang == "6" && $priv_admin == "Y"){
  	$this->load->view('cabang_view');
  }elseif($priv_admin == ""){
 	$kodekawasan =  $pengguna->kodej;
  	$this->load->view('user_view');
  }
 ?>