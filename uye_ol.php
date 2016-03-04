<?php
	require_once 'core/init.php';
	
	if(Input::varsa()){
		
		$onaylama = new Onaylama();
		$onaylama = $onaylama->kontrol($_POST, array(
				
			'kullanici_adi' => array(
				'zorunlu' 	=> true, 
				'min' 			=> 2,
				'max' 			=> 20,
				'benzersiz'	=> 'uye'
				),
			'sifre' 				=> array(
				'zorunlu' 	=>  true,
				'min' 			=> 6
				),
			'sifre_tekrar' 	=> array(
				'zorunlu'		=> true,
				'eslesme' 	=> 'sifre'
				),
			'isim' 					=> array(
				'zorunlu' 	=> true,
				'min' 			=> 2,
				'max' 			=> 50,
				)			
			));
			
			if($onaylama -> tamam()){
				echo 'tamam';
			}else{
				foreach($onaylama->hatalar() as $hata){
					echo $hata, "<br />";
				}
				}
				
				
				
			}



?>
<br /><br /><br /><br />
<form action="" method="post">
	<div class="alan">
		<label for="kullanici_adi">Kullanıcı adı</label>
		<input type="text" name="kullanici_adi" id="kullanici_adi" value="<?php echo filtrele(Input::getir('kullanici_adi')); ?>">
	</div><br />
	<div class="alan">
		<label for="sifre">Şifre</label>
		<input type="password" name="sifre" id="sifre">
	</div><br />
	<div class="alan">
		<label for="sifre_tekrar">Şifre tekrar</label>
		<input type="password" name="sifre_tekrar" id="sifre_tekrar">
	</div><br />
	<div class="alan">
		<label for="isim">İsim</label>
		<input type="text" name="isim" id="isim" value="<?php echo filtrele(Input::getir('isim')); ?>">
	</div><br /><br />
	<input type="submit" value="Üye ol">
</form>