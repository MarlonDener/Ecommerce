
<?php
    include('../includeConstants.php');	
	$data['token'] = 'Coloque seu token aqui, criando a sua conta na Sandbox PagSeguro';
	$data['email'] = 'Coloque seu email aqui, criando a sua conta na Sandbox PagSeguro';
	$data['currency'] = 'BRL';
	$data['reference'] = uniqid();
	$index = 1;
	if(isset($_SESSION['carrinho'])){
	$itemsCarrinho = $_SESSION['carrinho'];
	foreach ($itemsCarrinho as $key => $value) {
			$idProduto = $key;
			$sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque` WHERE id = ?");
			$sql->execute(array($idProduto));
			$produto = $sql->fetch();
			$Valor = $produto['preco'];
			$data["itemId$index"] = $index;
			$data["itemQuantity$index"] = $value;
			$data["itemDescription$index"] = $produto['nome'];
			$data["itemAmount$index"] = number_format($produto['preco'], 2,'.','');
			$index++;	
		}

		$url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout";
		$data = http_build_query($data);

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		$xml = curl_exec($curl);

		curl_close($curl);
		$xml = simplexml_load_string($xml);

		echo $xml->code;
}else{
	echo 'voce nao comprou nada';
}
?>