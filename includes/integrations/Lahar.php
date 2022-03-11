<!-- LAHAR -->
<script src="https://scripts.lahar.com.br/api_parametros.js" type="text/javascript"></script>
<script type="text/javascript">	
	jQuery(document).ready(function() {
		var integrou = false;
		jQuery("#mc4wp-form-1").submit( function() {
		   if (!integrou) {
			efetua_integracao();    
			integrou=true;
			return false;
			}
		})
	
	});
	function efetua_integracao() {
		var campos = { // Colocar aqui campos fixos ou enviar estas infos como hidden no formulário
			token_api_lahar: '#',
			nome_formulario: "Contato LP - TargetMais", // será o identificador da conversão na base de contatos
			email_contato: jQuery("#mc4wp-form-1 input[name=email]").val(),
			nome_contato: jQuery("#mc4wp-form-1 input[name=nome]").val(),
			url_origem: jQuery(location).attr('href') // Alterar apenas se necessário
		};
		var elementos = [];
			jQuery('#mc4wp-form-1 .api-lahar').each(function(index,element){
			  elementos.push(element);
			});
				integracao_js(campos, 'null', elementos, 'conversions');  
			}
			
			// 	function redireciona() { 
			// 	var form = jQuery("#mc4wp-form-1");
			// 	form.submit();
			// }
</script>