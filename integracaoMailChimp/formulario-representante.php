<?php

// if(isset($_POST['email']) && isset($_POST['nome'])){

// $postdata = http_build_query(
// 		array(
// 				"apikey" => "392858b817640e1fcfbfe6595feb141e-us3",
// 				"id"=> get_field('id_da_lista'),
// 				"email" => array(
// 						"email" => $_POST['email'],
// 						"euid" => $_POST['nome'],
// 						"leid" => get_field('id_da_lista')
// 				),
// 				"merge_vars" => array(
// 						"FNAME" =>  $_POST['nome']
// 				),
// 				"email_type"=> "html",
// 				"double_optin"=> false,
// 				"update_existing"=> true,
// 				"replace_interests"=> true,
// 				"send_welcome"=> false
// 		)
// );

// $opts = array('http' =>
// 		array(
// 				'method'  => 'POST',
// 				'header'  => 'Content-type: application/x-www-form-urlencoded',
// 				'content' => $postdata
// 		)
// );

// $context  = stream_context_create($opts);

// $result = file_get_contents('https://us3.api.mailchimp.com/2.0/lists/subscribe.json', false, $context);
// $isca = get_field('isca_digital');

// echo str_replace("}", ", \"url\":\"". $isca['url'] . "\"}" , $result);
// }
	

?>
<style>

label{
	display: block;
}

select{
	width: 310px;
}
</style>

<form id="frmRepresentacao">
	<label for="">Nome*</label>
	<input type="text" id="" class="CampoForm" name='nome'/>
	
	<label for="">Sobrenome*</label>
	<input type="text" id="" class="CampoForm" name='sobrenome'/>
	
	<label for="">E-mail*</label>
	<input type="text" id="" class="CampoForm" name='email'/>
	
	<label for="">Empresa*</label>
	<input type="text" id="" class="CampoForm" name='empresa'/>
	
	<label for="">DDD*</label>
	<input type="text" id="" class="CampoForm" name='ddd'/>
	
	<label for="">Telefone*</label>
	<input type="text" id="" class="CampoForm" name='telefone'/>
	
	<label for="">Qual Regi&atilde;o Gostaria de Atuar*</label>
	<select id="" name='regiao'>
		<option value="SP - Capital">SP - Capital</option>
		<option value="SP - Grande SP">SP - Grande S&atilde;o Paulo</option>
		<option value="SP - Grande Campinas">SP - Grande Campinas</option>
		<option value="SP - Outros">SP - Outros (Especificar)</option>
		
		<option value="PR - Capital">PR - Capital</option>
		<option value="PR - Outros (Especificar)">PR - Outros (Especificar)</option>		
		
		<option value="RJ - Capital">RJ - Capital</option>
		<option value="RJ - Outros (Especificar)">RJ - Outros (Especificar)</option>
		
		<option value="MG - Capital">MG - Capital</option>
		<option value="MG - Outros (Especificar)">MG - Outros (Especificar)</option>
		
		<option value="Nordeste - Outros (Especificar)">Nordeste - Outros (Especificar)</option>
		<option value="Sul - Outros (Especificar)">Sul - Outros (Especificar)</option>
	</select>
	
	<label for="">Outra Regi&atilde;o (Especifique)</label>
	<input type="text" id="" class="CampoForm" name='outraRegiao'/>
	
	
	<label for="">Tipo de Parceria que gostaria de desenvolver*</label>
	<select id="" name='tipoParceria'>
		<option value="Distribuidor/Master Franqueado - Possui câmera frigorífica, vende cápsulas no atacado e atua como Operador também. Pode ter exclusividade na região.">
			Distribuidor/Master Franqueado - Possui câmera frigorífica, vende cápsulas no atacado e atua como Operador também. Pode ter exclusividade na região.
		</option>
		<option value="Operador/Franqueado - Tem os clientes e equipe de vendas, comodata os JuiceBoxes e mantém os clientes abastecidos.">
			Operador/Franqueado - Tem os clientes e equipe de vendas, comodata os JuiceBoxes e mantém os clientes abastecidos.
		</option>
		<option value="Representante - Busca novos clientes e é comissionado pela venda de cápsulas.">
			Representante - Busca novos clientes e é comissionado pela venda de cápsulas.
		</option>
		<option value="Outro - especifique">
			Outro - especifique
		</option>
	</select>
	
	<label for="">Outra Parceria</label>
	<input type="text" id="" class="CampoForm" name='outraParceria'/>
	
	<label for="">Quanto Pretende investir</label>
	<select id="" name='investimento'>
		<option value="Entrarei apenas com meu trabalho">
			Entrarei apenas com meu trabalho
		</option>
		<option value="Até R$ 20.000">
			Até R$ 20.000
		</option>
		<option value="Até R$ 50.000">
			Até R$ 50.000
		</option>
		<option value="Até R$ 100.000">
			Até R$ 100.000
		</option>
		<option value="Acima de R$ 100.000">
			Acima de R$ 100.000
		</option>
	</select>
	
	
	<label for="">Tem alguma questão que gostaria de ver respondida?</label>
	<input type="text" id="" class="CampoForm" name='questaoASerRespondida'/>
	
	
	<label for="">O que mudaria ou acrescentaria em nosso negócio?</label>
	<input type="text" id="" class="CampoForm" name='oQueMudariaNegocio'/>
	
	<label for="">Caso não participe de nosso sistema, Qual motivo?</label>
	<input type="text" id="" class="CampoForm" name='motivoNaoParticiparNossoSistema'/>
	
	
	<label for="">Possui conhecimento de vendas em que mercados?</label>
	<input type="text" id="" class="CampoForm" name='possuiConhecimentoVendas'/>
	
	<label for="">Possui algum tipo de negócio? Qual?</label>
	<input type="text" id="" class="CampoForm" name='possuiNegocio'/>
	
	<label for="">Quanto tempo pretende dedicar ao negócio?</label>
	<input type="text" id="" class="CampoForm" name='tempoPretendeDedicar'/>
	

	<label for="">Alguma observação?</label>
	<input type="text" class="formulariocorpotxt" />
	
	<input type="hidden" name="nomeLista" value="representacao" />
	<input type="submit" value="Enviar Solicita&ccedil;&atilde;o">
	

	
	
</form>
