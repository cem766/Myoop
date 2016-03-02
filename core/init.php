<?php
session_start();

$GLOBALS['config']=array('mysql'=>array(
																				'host' 						=> '127.0.0.1',
																				'db'							=> 'oop',
																				'kullanici_adi' 	=> 'root',
																				'sifre' 					=> '1234'),
													'hatirla'=>array(
																				'cookie_ismi' 		=> 'hash',
																				'cookie_bitis'		=> 604800 ),
													'session'=>array(
																				'session_ismi'		=> 'kullanici',
																				'token_ismi'			=> 'token')
																				);

spl_autoload_register(function ($class){
	
	require_once 'class/'.$class.'.php';
	
});

require_once 'fonksiyon/filtrele.php';







?>