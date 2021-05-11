
        <div class="container cart">
          <table style="text-align: left;">
            <tr>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Valor</th>
            </tr>

           <?php $itemsCarrinho = $_SESSION['carrinho'];
              $total = 0;
              foreach ($itemsCarrinho as $key => $value) {
              $idProduto = $key;
              $Produto = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque` WHERE id = $idProduto");
              $Produto->execute();
              $produto = $Produto->fetch();
              $valor = $value * $produto['preco'];
              $total+= $valor;

              $imagemProduto = \MySql::conectar()->prepare("SELECT imagem FROM `tb_admin.estoque_imagens` WHERE produto_id = ?");
              $imagemProduto->execute(array($idProduto));
              $imagem = $imagemProduto->fetch();

                    ?> 
          <tr class="product_vend">
            <td>
              <div class="cart-info">
                <img src="<?php echo INCLUDE_PATH?>painel/uploads/<?php echo $imagem['imagem']?>" alt="" />
                <div>
                  <p><?php echo $produto['nome']?></p>
                  <span></span>
                  <br />
                </div>
              </div>
            </td>
            <td><?php echo $value?></td>
            <td>R$<?php echo Painel::convertMoney($valor) ?></td>
          </tr>
          <?php 
        
         }
        ?>
          <tr>
          
        </table>

        <div class="total-price">
          <table>
            <tr>
              <td>Valor total:</td>
              <td><strong><?php echo Painel::convertMoney($total)?></strong></td>
            </tr>
          </table>
        </div>

          <a href="#" id="btn-pagamento">Pagar agora</a>
      </div>
<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
<script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<script>

  $(function(){
  

  $('a#btn-pagamento').click(function(e){
    e.preventDefault();
    $.ajax({
      url:'http://localhost:70/loja/ajax/finalizarPagamento.php'
    }).done(function(data){
        
        
        
        var isOpenLightBox = PagSeguroLightbox({
          code:data
        },{
          success: function(transactionCode){
            location.href=include_path;
          },
          abort:function(){
            location.href=include_path;
          }
        });

        console.log(isOpenLightBox);
        
    })

    
  })
  
})
  
</script>