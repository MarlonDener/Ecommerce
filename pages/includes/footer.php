
  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Certificados</a>
          <a href="#">Afiliados</a>
          <a href="#">Especial</a>
          <a href="#">Mapa</a>
        </div>
        <div class="footer-center">
          <h3>Informações</h3>
          <a href="#">Sobre</a>
          <a href="#">Privacidade</a>
          <a href="#">Termos & Condições</a>
          <a href="#">Contato</a>
        </div>
        <div class="footer-center">
          <h3>Minha conta</h3>
          <a href="#">Conta</a>
          <a href="#">Lista de desejos</a>
          <a href="#">Noticia</a>
          <a href="#">Retornar</a>
        </div>
        <div class="footer-center">
          <h3>CONTATO</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
           Rua das Palmeiras - São Paulo
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            m.dener01@hotmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            11-972443359
          </div>
          <div class="payment-methods">
            <img src="<?php echo INCLUDE_PATH?>pages/images/payment.png" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
   <script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
  <script src="<?php echo INCLUDE_PATH?>pages/js/products.js"></script>
  <script src="<?php echo INCLUDE_PATH?>pages/js/slider.js"></script>
  <script src="<?php echo INCLUDE_PATH?>pages/js/index.js"></script>
  <script type="text/javascript">
  
 $('.addCart').click(function(e){
   var valor = $(this).attr('data-value');


     $.ajax({
        method: "POST",
        url: "http://localhost:70/loja/ajax/addCart.php",
        data: { 
            valor: valor
        }
    })
    .done(function(msg) {
        $('#totalCart').text(msg);
        $('.alerta').css('opacity','1');
        $('.cobrir').css('display','block');

        $('.nav').css('opacity','0.1');
        setTimeout(function(){ 

        $('.alerta').css('opacity','0');

        $('.cobrir').css('display','none');

        $('.nav').css('opacity','1');
         }, 2000);
    });

})
</script>
</body>


</html>