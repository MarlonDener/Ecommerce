
  <div class="hero">
    <div class="left">
      <span>Promoção</span>
      <h1>50% de desconto</h1>
      <small>e ofertas exclusivas</small>
      <a href="">Ver coleção </a>
    </div>
    <div class="right">
      <img src="<?php echo INCLUDE_PATH?>pages/images/hero.png" alt="" />
    </div>
  </div>

  <!-- Promotion -->

  <section class="section promotion">
    <div class="title">
      <h2>Nossas coleções</h2>
      <span>Não perca nossas coleções, compre já.</span>
    </div>

    <div class="promotion-layout container" id="#shop">
      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo1.jpg" alt="" />
        <div class="promotion-content">
          <h3>HOMEM</h3>
          <a href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo2.jpg" alt="" />
        <div class="promotion-content">
          <h3>CASUAL SHOES</h3>
          <a href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo3.jpg" alt="" />
        <div class="promotion-content">
          <h3>HOMEM</h3>
          <a href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo4.jpg" alt="" />
        <div class="promotion-content">
          <h3>CINTOS</h3>
          <a href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo5.jpg" alt="" />
        <div class="promotion-content">
          <h3>BOLSAS</h3>
          <a href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo6.jpg" alt="" />
        <div class="promotion-content">
          <h3>RELÓGIOS</h3>
          <a href="">COMPRAR</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section products">
    <div class="title">
      <h2>Nossos produtos</h2>
      <span>Nossos produtos de qualidade, não perca essa oportunidade, compre já.</span>
    </div>

    <div class="product-layout" id="produtos">

<?php $items = \models\homeModel::getLojaItems();

  foreach ($items as $key => $value) {

    $sql = \MySql::conectar()->prepare("SELECT imagem FROM `tb_admin.estoque_imagens` WHERE produto_id = ?" );
    $sql->execute(array($value['id']));
    $imagem = $sql->fetch()['imagem'];
    $valor = $value['id']
 ?>
      <div class="product">
        <div class="img-container">
          <img src="<?php echo INCLUDE_PATH?>painel/uploads/<?php echo $imagem?>" alt="" />
          <div class="addCart" id="botaoadd" data-value='<?php echo $valor ?>'>
            <a><i class="fas fa-shopping-cart"></i></a>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href=""><?php echo $value['nome']?></a>
          <div class="price">
            <span>R$ <?php echo \Painel::convertMoney($value['preco'])?></span>
          </div>
        </div>
      </div>
      <?php 
        }
      ?>

    </div>
  </section>

  <div class="alerta open"><i class="fa fa-check"></i>Produto foi adicionado ao seu carrinho</div>

  <section class="section advert">
    <div class="advert-layout container">
      <div class="item ">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo7.jpg" alt="">
        <div class="content left">
          <span>Exclusivos</span>
          <h3>Coleções de primavera</h3>
          <a href="">Ver coleções</a>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo8.jpg" alt="">
        <div class="content  right">
          <span>Novas tendências</span>
          <h3>Bolsas</h3>
          <a href="">COMPRAR </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section brands">
    <div class="title">
      <h2>Marcas</h2>
      <span>Selecione uma das marcas de produtos premium e economize muito dinheiro</span>
    </div>

    <div class="brand-layout container">
      <div class="glide" id="glide1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <img src="<?php echo INCLUDE_PATH?>pages/images/brand1.png" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo INCLUDE_PATH?>pages/images/brand2.png" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo INCLUDE_PATH?>pages/images/brand3.png" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo INCLUDE_PATH?>pages/images/brand4.png" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo INCLUDE_PATH?>pages/images/brand5.png" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo INCLUDE_PATH?>pages/images/brand6.png" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo INCLUDE_PATH?>pages/images/brand7.png" alt="">
            </li>
            
            
          </ul>
        </div>
      </div>

    </div>
  </section>

