<?php
	namespace models;

	class homeModel{

		public static function getLojaItems(){

			if(isset($_GET["page"])){
				$url = $_GET["page"];
				$mody = $url * 12 - 12;
			
			$sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque` LIMIT 12 OFFSET $mody");
			$sql->execute();
			return $sql->fetchAll();
			}else{

			$sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque` LIMIT 12");
			$sql->execute();
			return $sql->fetchAll();
			}
		}
		public static function Calculate()
		{
			$query_pg = \MySql::conectar()->query("SELECT * FROM `tb_admin.estoque`");
			$count = $query_pg->rowCount();
			$calculate = ceil(($count / 120) * 12);
			return $calculate;

		}

		public static function getPage(){
			$sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque` LIMIT 3");
			$sql->execute();
			return $sql->fetchAll();
		}
		

		public static function getTotalItemsCarrinho(){
			if(isset($_SESSION['carrinho'])){
			$amount = 0;
			foreach ($_SESSION['carrinho'] as $key => $value) {
				$amount+=$value;
			}
			}else{
				
				return 0;
			}
			return $amount;
		}

	}
?>