<?php


?>
<form id="frmKateResidencial" method="post" >
	<label for="">Nome*</label>
	<input type="text" id="" class="CampoForm" name='nome' required/>
	
	<label for="">Sobrenome*</label>
	<input type="text" id="" class="CampoForm" name='sobrenome' required/>
		
	<label for="">E-mail*</label>
	<input type="email" id="" class="CampoForm" name='email' required/>
	
	<label for="">DDD*</label>
	<input type="text" id="" class="CampoForm" name='ddd' required/>
	
	<label for="">Telefone*</label>
	<input type="text" id="" class="CampoForm" name='telefone' required/>
	
	<label for="">Em que cidade voc&ecirc; mora?*</label>
	<input type="text" id="" class="CampoForm" name='cidade' required/>
	
	<label for="">Qual bairro?*</label>
	<input type="text" id="" class="CampoForm" name='bairro' required/>
	
	<label for="">Quantas pessoas vivem com voc&ecirc;?*</label>
	<input type="text" id="" class="CampoForm" name='qtdPessoas' required/>
	
	<label for="">Quantas doses de suco voc&ecirc; imagina que consumiria?</label>
	<select id="" name='qtdDoses'>
		<option value="20">20</option>
		<option value="30">30</option>
		<option value="40">40</option>
		<option value="60">60</option>		
		<option value="80">80</option>
		<option value="Mais que 100">Mais que 100</option>
	</select>
	
	<label for="">Os sucos s&atilde;o:</label>
	<select id="" name='paraquem'>
		<option value="Só pra você">S&oacute; pra voc&ecirc;</option>
		<option value="Só para seus filhos">S&oacute; pros seus filhos</option>
		<option value="Para a família">Para familia</option>
	</select>
	
	<label for="">Qual sua idade?</label>
	<select id="" name='idade'>
		<option value="Menor de 18">Menor de 18</option>
		<option value="De 18 a 25">De 18 a 25</option>
		<option value="De 25 a 35">De 25 a 35</option>
		<option value="De 35 a 45">De 35 a 45</option>		
		<option value="De 45 a 55">De 45 a 55</option>
		<option value="Acima de 55">Acima de 55</option>
	</select>	

	<label for="">Sexo</label>
	<select id="" name='sexo'>
		<option value="Masculino">Masculino</option>
		<option value="Feminino">Feminino</option>
	</select>	

	<label for="">Voc&ecirc; prefere:</label>
	<select id="" name='prefere'>
		<option value="Investir na compra do JuiceBox e buscar as cápsulas em um supermercado">
			Investir na compra do JuiceBox e buscar as c&aacute;psulas em um supermercado.
		</option>
		<option value="alugar o JuiceBox e receber as cápsulas em casa por uma pequena taxa de entrega">
			Alugar o JuiceBox e receber as c&aacute;psulas em casa por uma pequena taxa de entrega
		</option>
		<option value="receber o JuiceBox em comodato (sem custos) e fazer uma assinatura de entrega de cápsulas em casa">
			Receber o JuiceBox em comodato (sem custos) e fazer uma assinatura de entrega de c&aacute;psulas em casa
		</option>		
	</select>
	
	<label for="">Porque voc&ecirc; se interessa pelo suco sem conservante?</label>
	<select id="" name='pqInteressa'>
		<option value="Sabor">Sabor</option>
		<option value="Produto saudável">Produto saud&aacute;vel</option>
		<option value="Propriedades terapêuticas">Propriedades terap&ecirc;uticas</option>
		<option value="Alergia a lactose">Alergia a lactose</option>
		<option value="Diabetes">Diabetes</option>
		<option value="Outros">Outros</option>				
	</select>			

	<label for="">Que tipos de ingredientes voc&ecirc; acha que poderia fazer parte dos nossos produtos?</label>
	<input type="text" id="" class="CampoForm" name='sugestao'/>

	<label for="">Qual maior benef&iacute;cio voc&ecirc; enxerga em Juice in Time?</label>
	<select id="" name='beneficio'>
		<option value="Comodidade">Comodidade</option>
		<option value="Segurança alimentar">Seguran&ccedil;a alimentar</option>
		<option value="Segurança no manuseio">Seguran&ccedil;a no manuseio</option>
		<option value="Opções de frutas e bebidas">Op&ccedil;oes de frutas e bebidas</option>
		<option value="Outros">Outros</option>
	</select>
	
	<label for="">Apenas tr&ecirc;s principais para voc&ecirc; ter o JuiceBox?</label>
	<input type="checkbox" name='razoes' value="Suco de frutas">Suco de frutas<br />	
	<input type="checkbox" name='razoes[]' value="Bebidas detox">Bebidas "detox"<br />
	<input type="checkbox" name='razoes[]' value="Chas e chas com frutas">Ch&aacute; e ch&aacute;s com frutas<br />
	<input type="checkbox" name='razoes[]' value="Sucos enriquecidos com proteinas">Sucos enriquecidos com prote&iacute;nas<br />
	<input type="checkbox" name='razoes[]' value="Sucos enriquecidos com fibras">Sucos enriquecidos com fibras<br />
	<input type="checkbox" name='razoes[]' value="Achocolatados sem conservantes">Achocolatados sem conservantes<br />
	<input type="checkbox" name='razoes[]' value="Outras">Outras<br />

	<input type="hidden" name="nomeLista" value="residencial" />
	<input type="submit" value="Enviar Solicita&ccedil;&atilde;o">
	
	<script>
		jQuery("#frmKateResidencial").submit(function(){
		jQuery("#frmKateResidencial").validate()
		})
	</script>	

</form>
	
