$(document).ready(function(){
	$('#cCep').keyup(function(event) {
		
		var tamanho = $('#cCep').val().length;
		
		if(tamanho == 8){
			$.ajax({
				url: '/verifica-cep/',
				type: 'GET',
				dataType: 'JSON',
				data: {cep: $('#cCep').val()},

				beforeSend : function(){
					alert('Verificando CEP, aguarde...');
				},

				success : function(cep){
					if(JSON.parse(cep).erro == true){
						alert('CEP não encontrado!');
					}else{
						preencherCampos(JSON.parse(cep));
					}
				},

				error : function(erro){
					console.log(erro);
				}
			});
		}
	});
});

function preencherCampos(end){
	$('#cEstado').val(end.uf);
	$('#cBairro').val(end.bairro);
	$('#cCidade').val(end.localidade);
	$('#cLogradouro').val(end.logradouro);
}