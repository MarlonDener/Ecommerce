<?php
	namespace controller;
	use \views\mainView;

	class homeController
	{
		public function index(){
			if(!isset($_SESSION['totalCart'])){
				$_SESSION['totalCart'] = 0;
			}

			if(isset($_GET['addCart'])){
				$idProduto = (int)$_GET['addCart'];
				if(isset($_SESSION['carrinho']) == false){
					$_SESSION['carrinho'] = array();
				}

				\Painel::redirect(INCLUDE_PATH);
				
			}
			mainView::render('home.php');
		}
	}
?>