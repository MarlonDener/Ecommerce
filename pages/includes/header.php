<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php echo INCLUDE_PATH?>pages/images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
  <link rel="stylesheet" href="<?php INCLUDE_PATH?>pages/styleLoja/styles.css" />
  <title>marlonStore</title>
</head>
<nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="#home">@<strong>MarlonStore</strong></a></div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="<?php echo INCLUDE_PATH?>">Início</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li>
          <a href="#shop" class="desktop-item">Loja</a>
        </li>
        <li><a href="">Meu Blog</a></li>
        <li>
          <a href="" class="desktop-item">Vendas <span><i class="fas fa-chevron-down"></i></span></a>
          <ul class="drop-menu1">
            <li><a href="#principais">Principais vendas</a></li>
            <li><a href="#detalhes">Detalhes</a></li>
          </ul>
        </li>
        <li class="icons">

        	<?php
        		$quantidadeCompras = 0;
        		if(isset($_SESSION['carrinho'])){
        		foreach ($_SESSION['carrinho'] as $key => $value) {
        			$quantidadeCompras = $quantidadeCompras += $value;
        		}
        		}

        	 ?>
           <a href="<?php echo INCLUDE_PATH?>finalizar">
            <span>
              <img src="<?php echo INCLUDE_PATH?>pages/images/shoppingBag.svg" alt="" />
              <small id="totalCart" class="count d-flex"><?php echo $_SESSION['totalCart'] ?></small>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </nav>