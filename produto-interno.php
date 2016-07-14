<?php require_once("topo.php"); ?>



<br>



  <!-- NAVEGACAO -->
<div class="row">
  <div class="small-12 columns">
    <a href="produtos.php" title="Voltar para Produtos" class="color-azul font20">< Voltar para produtos</a>
  </div>    
</div> 






<br><br>






  <!-- NOME DO PRODUTO -->
<div class="row">
  <div class="small-12 columns config-produto">
    <h4 class="color-laranja2 titillium_regular">Papel Bolha</h4>
    <h6 class="color-sinza titillium_regular"><i>Codigo: 5465</i></h6>
  </div>    
</div>




<br><br>





<div class="row">
  <!-- IMAGENS DO PRODUTO -->
  <div class="small-12 medium-9 large-6 columns galeria-produto">
    <div class="" data-width="100%" data-ratio="450/300" data-max-width="100%" data-allowfullscreen="true"  data-nav="thumbs" data-autoplay="true" data-fit="contain" data-arrows="true" data-swipe="true"  data-keyboard="true">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
        <img src="assets/img/img.png">
    </div>
  
  <br><br><br>

  <h5 class="color-azul titillium_bdbold">Descrição:</h5>
  <p class="color-sinza-fraco">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non consectetur diam, a imperdiet nisi. Suspendisse facilisis fermentum orci. Duis blandit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non consectetur diam, a imperdiet nisi. Suspendisse facilisis fermentum orci. Duis blandit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non consectetur diam, a imperdiet nisi. Suspendisse facilisis fermentum orci. Duis blandit.</p>

  </div>

 




  <!-- MANDE SUA PROPOSTA DESKTOP -->
  <div class="show-for-large medium-12 large-4 columns">
    <br class="hide-for-large">
    <div class="formulario-proposta">
      <div class="peça-orçamento">
        <p class="text-center"><span>Peça o orçamento</span></p>
      </div>

      <br><br>
      <form action="" method="post" accept-charset="utf-8" class="form-proposta">
        
        <label>NOME<input type="text" name="nome" class="inputs-formularios" placeholder="Seu nome"></label>
        <label>EMAIL<input type="email" name="email" class="inputs-formularios" placeholder="nome@email.com.br"></label>
        <label>TELEFONE<input type="tel" name="telefone" class="inputs-formularios" placeholder="(00) 0000 0000"></label>
        <label>MENSAGEM<textarea name="msg" rows="3" class="inputs-formularios" placeholder="Deixe seu recado aqui...."></textarea></label>
        
        <input type="submit" name="enviar" value="ENVIAR" class="btn-enviar-contato float-center">

      </form>

    </div>
  </div>
</div>

<br><br><br>

<div class="row hide-for-large">
  <div class="small-12 columns">
    <button class="btn-enviar-contato float-center" data-open="formPropostaMobile">ENVIAR PROPOSTA</button> 
  </div>
</div>

<div class="reveal formulario-proposta" id="formPropostaMobile" data-reveal>
  <form action="" method="post" accept-charset="utf-8" class="form-proposta">
    <label>NOME<input type="text" name="nome" class="inputs-formularios" placeholder="Seu nome"></label>
    <label>EMAIL<input type="email" name="email" class="inputs-formularios" placeholder="nome@email.com.br"></label>
    <label>TELEFONE<input type="tel" name="telefone" class="inputs-formularios" placeholder="(00) 0000 0000"></label>
    <label>MENSAGEM<textarea name="msg" rows="3" class="inputs-formularios" placeholder="Deixe seu recado aqui...."></textarea></label>

    <input type="submit" name="enviar" value="ENVIAR" class="btn-enviar-contato inputs-formularios float-center">

  </form>

  <button class="close-button text-center" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
</div>









<?php require_once("rodape.php"); ?>