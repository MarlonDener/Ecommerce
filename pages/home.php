
  <!--alerta do ajax aqui -->
  <div class="alerta open"><i class="fa fa-check"></i>Parabéns, o produto foi adicionado ao seu carrinho</div>
  <div class="cobrir">.</div>

  <div class="hero">
    <div class="left">
      <span>Promoções</span>
      <h1>MarlonStore, preços incríveis</h1>
      <small>e ofertas exclusivas para andar na moda, você só encontra aqui !</small>
      <a href="">Ver coleção </a>
    </div>
    <div class="right">
      <img class="woman_logo" src="<?php echo INCLUDE_PATH?>pages/images/womanred.png" alt="" />
    </div>
  </div>

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
          <a class="button_product" href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/look.jpg" alt="" />
        <div class="promotion-content">
          <h3>CONJUNTO</h3>
          <a class="button_product" href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/imagemlook.jpg" alt="" />
        <div class="promotion-content">
          <h3>MULHER</h3>
           <a class="button_product" href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img style="width: 260px;" src="<?php echo INCLUDE_PATH?>pages/images/mochila.jpg" alt="" />
        <div class="promotion-content">
          <h3>BOLSA</h3>
           <a class="button_product" href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo5.jpg" alt="" />
        <div class="promotion-content">
          <h3>MODHILA</h3>
          <a class="button_product" href="">COMPRAR</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo INCLUDE_PATH?>pages/images/promo6.jpg" alt="" />
        <div class="promotion-content">
          <h3>RELÓGIOS</h3>
          <a class="button_product" href="">COMPRAR</a>
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

        <div class="product_name">
          <img src="<?php INCLUDE_PATH?>pages/images/backpack.png">
          <a class="name_product" href="#"><?php echo $value['nome']?></a>
        </div>

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
          <p><?php echo $value['descricao'];?></p>

 
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

  <div class="paginator">

    <?php 
    $i = 1;
    $calculate = \models\homeModel::Calculate();

    while($i <= $calculate)
    { 
      echo "<a href='?page=$i' class='btn-bg'>$i</a>";
      $i++;
    }
    ?>

  </div>


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

    <section class="contact" id="contact">

    <div class="image">
        <img src="<?php echo INCLUDE_PATH?>pages/images/contato.svg" alt="">
    </div>

    <form action="">

        <h1 class="heading">Entre em contato</h1>

        <div class="inputBox">
            <input type="text" required>
            <label>Nome</label>
        </div>

        <div class="inputBox">
            <input type="text" required>
            <label>Email</label>
        </div>

        <div class="inputBox">
            <input type="number" required>
            <label>Telefone</label>
        </div>

        <div class="inputBox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label>Mensagem</label>
        </div>

        <input type="submit" class="btn" value="Enviar mensagem">

        </form>

    </section>