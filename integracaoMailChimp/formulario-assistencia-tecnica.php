<form id="frmAssistencia" method="post">

	<label for="">Nome*</label>
	<input type="text" id="" class="CampoForm" name='nome' required/>
	
	<label for="">Sobrenome*</label>
	<input type="text" id="" class="CampoForm" name='sobrenome' required/>
	
	<label for="">Email*</label>
	<input type="email" id="" class="CampoForm" name='email' required/>	
		
	<label for="">Empresa*</label>
	<input type="text" id="" class="CampoForm" name='empresa' required/>
	
	<label for="">Ramo*</label>
	<input type="text" id="" class="CampoForm" name='ramo' required/>
	
	<label for="">DDD*</label>
	<input type="text" id="" class="CampoForm" name='ddd' required/>
	
	<label for="">Telefone*</label>
	<input type="text" id="" class="CampoForm" name='telefone' required/>
	
	<label for="">Mensagem*</label>
	<textarea name='mensagem' required></textarea><br />

	<input type="hidden" name="nomeLista" value="assistencia" />
	<input type="submit" value="Enviar Solicita&ccedil;&atilde;o">
	
	<script>
		jQuery("#frmAssistencia").submit(function(){
		jQuery("#frmAssistencia").validate()
		})
	</script>	
	
</form>