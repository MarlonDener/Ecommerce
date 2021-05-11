<?php

	include('includeConstants.php');					


	function pegaCargo($indice){
		return Painel::$cargos[$indice];
	}

	function selecionadoMenu($par){

		$url = explode('/',@$_GET['url'])[0];
		
		if($url == $par){
			echo 'class="menu-active"';
		}
	}

	function verificaPermissaoMenu($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			echo 'style="display:none;"';
		}
	}

	function verificaPermissaoPagina($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			include('painel/pages/permissao_negada.php');
			die();
		}
	}

	function recoverPost($post){
		if(isset($_POST[$post])){
			echo $_POST[$post];
		}
	}
?>