<?php
	session_start();

	if(isset($_POST['valor'])){
		$idProduto = $_POST['valor'];
	}else
	{
		echo $_SESSION['totalCart'];
	}

	if(isset($_SESSION['carrinho'][$idProduto]) == false){
	$_SESSION['carrinho'][$idProduto] = 1;}
	else
	{
        $_SESSION['carrinho'][$idProduto]++;
	}
  		$quantidadeCompras = 0;
        if(isset($_SESSION['carrinho'])){
        foreach ($_SESSION['carrinho'] as $key => $value) {
        $quantidadeCompras = $quantidadeCompras += $value;
        $_SESSION['totalCart'] = $quantidadeCompras;
	}

 	   echo $_SESSION['totalCart'];        		

}

?>