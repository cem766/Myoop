<?php

class kisi{

	var $isim;
	public $yas;
	protected $tc_no;
	private $tel;
	
	function __construct($kisi_ismi){
		
		$this->isim = $kisi_ismi;
	}
	
	protected function set_isim($yeni_isim){
		if( isim != "Yavuz Sultan Selim"){
		$this->isim = strtoupper($yeni_isim);	
		}
		
	}
	
	function get_isim(){
		
		return $this->isim;
		
	}
		
}

class isci extends kisi{
	protected function set_isim($yeni_isim){
		if($yeni_isim == "phpcem"){
			$this->isim = strtolower($yeni_isim);
		}else if($yeni_isim == "Cem Kemal Kaderoğlu"){
			parent::set_isim($yeni_isim);
		}
	}
	
	function __construct($yeni_isci){
		
		$this->set_isim($yeni_isci);
		
	}
}















?>