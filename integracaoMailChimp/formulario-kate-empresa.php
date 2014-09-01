<form id="frmKateEmpresa" method="post" >

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
	
	<label for="">Qual regi&atilde;o gostaria de atuar?*</label>
	<select id="" name='regiao'>
		<option value="SP - Capital">SP - Capital</option>
		<option value="SP - Grande São Paulo">SP - Grande S&atilde;o Paulo</option>
		<option value="SP - Grande Campinas">SP - Grande Campinas</option>
		<option value="SP - Outros">SP - Outros (Especificar)</option>
		
		<option value="PR - Capital">PR - Capital</option>
		<option value="PR - Outros">PR - Outros (Especificar)</option>		
		
		<option value="RJ - Capital">RJ - Capital</option>
		<option value="RJ - Outros">RJ - Outros (Especificar)</option>
		
		<option value="MG - Capital">MG - Capital</option>
		<option value="MG - Outros">MG - Outros (Especificar)</option>
		
		<option value="Nordeste - Outros">Nordeste - Outros (Especificar)</option>
		<option value="Sudeste - Outros">Sul - Outros (Especificar)</option>
	</select>
	
	<label for="">Outra regi&atilde;o (Especifique)</label>
	<input type="text" id="" class="CampoForm" name='outraRegiao'/>

	<label for="">Mensagem</label>
	<textarea name='mensagem'></textarea><br />

	<input type="hidden" name="nomeLista" value="empresa" />
	<input type="submit" value="Enviar Solicita&ccedil;&atilde;o">
	
	<script>
		jQuery("#frmKateEmpresa").submit(function(){
		jQuery("#frmKateEmpresa").validate()
		})
	</script>	
	
</form>