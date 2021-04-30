<?php
	
	class Painel
	{

		
		public static $cargos = [
		'0' => 'Normal',
		'1' => 'Sub Administrador',
		'2' => 'Administrador'];
		
		public static function loadJS($files,$page){
			$url = explode('/',@$_GET['url'])[0];
			if($page == $url){
				foreach ($files as $key => $value) {
					echo '<script src="'.INCLUDE_PATH_PAINEL.'js/'.$value.'"></script>';
				}
			}
		}

		public static function convertMoney($valor){
			return number_format($valor, 2, ',', '.');
		}

		public static function formatarMoedaBd($valor){
			$valor = str_replace('.', '', $valor);
			$valor = str_replace(',', '.', $valor);
			return $valor;
		}

		public static function logado(){
			return isset($_SESSION['login']) ? true : false;
		}

		public static function loggout(){
			setcookie('lembrar','true',time()-1,'/');
			session_destroy();
			header('Location: '.INCLUDE_PATH_PAINEL);
		}

		public static function carregarPagina(){
			if(isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				if(file_exists('pages/'.$url[0].'.php')){
					include('pages/'.$url[0].'.php');
				}else{
						header('Location: '.INCLUDE_PATH_PAINEL);
				
					
				}
			}else{
				include('pages/home.php');
			}
		}

		public static function listarUsuariosOnline(){
			self::limparUsuariosOnline();
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
			$sql->execute();
			return $sql->fetchAll();
		}

		public static function limparUsuariosOnline(){
			$date = date('Y-m-d H:i:s');
			$sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
		}

		public static function alert($tipo,$mensagem){
			if($tipo == 'sucesso'){
				echo '<div class="box-alert sucesso"><i class="fa fa-check"></i> '.$mensagem.'</div>';
			}else if($tipo == 'erro'){
				echo '<div class="box-alert erro"><i class="fa fa-times"></i> '.$mensagem.'</div>';
			}else if($tipo == 'atencao'){
				echo '<div class="box-alert atencao"><i class="fa fa-warning"></i> '.$mensagem.'</div>';
			}
		}

		public static function alertJS($msg){
			echo '<script>alert("'.$msg.'")</script>';
		}

		public static function uploadFile($file){
			$formatoArquivo = explode('.',$file['name']);
			$imagemNome = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
			if(move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/uploads/'.$imagemNome))
				return $imagemNome;
			else
				return false;
		}

		public static function deleteFile($file){
			@unlink('uploads/'.$file);
		}

		public static function redirect($url){
			echo '<script>location.href="'.$url.'"</script>';
			die();
		}


	}

?>