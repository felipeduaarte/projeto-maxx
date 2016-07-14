<?php require_once("topo.php"); ?>

	<!-- BANNER DESKTOP -->
<div class="container-full show-for-medium">
	<div class="banner_contato_desk text-center">
		<br><br><br><br>
		<h1 class="titillium_regular"><strong>FALE CONOSCO </strong> </h1>
		<p class="titillium_regular">Utilize o formulário abaixo para entrar em contato<br>ou entre em contato por telefone</p>
	</div>
</div>






	<!-- BANNER MOBILE -->
<div class="container-full show-for-small-only">
	<div class="banner_contato_mobile4 text-center">
	<br>
		<h1 class="titillium_regular"><strong>FALE CONOSCO</strong></h1>
		<p class="titillium_regular">Utilize o formulário abaixo para entrar em contato<br>ou entre em contato por telefone</p>
	</div>
</div>





<br><br><br>





	<!-- INICIO CONTATO -->
<div class="row">
	<div class="large-4 columns">
		<div class="info text-center">
			<img class="float-center" src="assets/imagens/cont1.png">
			<h7 class="color-sinza">(55) 3511-7800</h7>
		</div>		
	</div>

	<div class="large-4 columns">
		<div class="info text-center">
			<img class="float-center" src="assets/imagens/cont2.png">
			<h7 class="color-sinza">Av. Inhacorá, 715 centro - Santa Rosa - RS - Brasil</h7>
		</div>		
	</div>

	<div class="large-4 columns">
		<div class="info text-center">
			<img class="float-center" src="assets/imagens/cont3.png">
			<h7 class="color-sinza">maxxdistribuidora@hotmail.com</h7>
		</div>		
	</div>
</div>




<br><br><br>





	<!-- INICIO FORMULARIO -->
<div class="row">
	<div class="large-6 columns form-contato">
		<form action="" method="post" accept-charset="utf-8" data-abide novalidate>
			<div data-abide-error class="alert callout" style="display: none;">
				<p><i class="fi-alert"></i>Confira os dados do formulário!</p>
			</div>
			
			<label class="">Nome
		        <input type="text" name="nome" class="inputs-formularios" required>
		        <span class="form-error">Sou obrigatório!</span>
		    </label>

		    <label class="">Email
		        <input type="email" name="email" class="inputs-formularios" required pattern="email">
		        <span class="form-error">Email incorreto ):</span>
		    </label>

		    <label class="">Telefone
		        <input type="tel" name="telefone" class="inputs-formularios corrige-tamanh-tel" required pattern="number">
		        <span class="form-error">Telefone incorreto ):</span>
		    </label>

	</div>

	<div class="large-6 columns form-contato">
		    <label class="">Mensagem
		        <textarea name="msg" class="inputs-formularios" required></textarea>
		        <span class="form-error">Sou obrigatório!</span>
		    </label>

				<p class="campos-obrigatorios float-right">Todos os campos são obrigatórios*</p>
				<div style="clear: both"></div>

		    	<input type="submit" value="ENVIAR" class="btn-enviar-contato float-right">
		</form>
			


		<p class="color-verde font18"><strong>Mensagem enviada com sucesso!</strong></p>
		<p class="color-vermelho font18"><strong>Erro ao enviar a mensagem ): tente novamente</strong></p>

	</div>
</div>






<br><br><br>




<div class="row">
	SANTA ROSA -RS
</div>


<!--**************** FIM CONTATO ****************-->

<?php require_once("rodape.php"); ?>