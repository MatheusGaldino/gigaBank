 $('#cpfConsulta').change(function (){

	var sucesso;
 	$.ajax({
        url: "../../cpfConsulta_controller.php", //arrumar
        type: "post",
        data: 'cpf=' +  $('#cpfConsulta').val(),
        success: function (res) {
        	$('#confirma').addClass('some');
        	pos1 = res.indexOf(',') + 2;
        	stts = res.substring(0, pos1);
        	if (stts == 'encontrado, ') {
        		res = res.replace(stts, '');

	        	res = "Conta: " + res.replace(', ', ' - Agência: ');
	        	$('#conta').html("<option value='" + res + "'> " + res + "</option>");
        	} else {
				$('#confirma').removeClass('some');
        	}
        	
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
 	});


 	
 });




