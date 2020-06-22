
console.log('bodia');
var operacao = document.getElementById('operacao');
var operacaoL = document.getElementById('operacaoL');

var forma = document.getElementById('forma');
var formaL = document.getElementById('formaL');

var codigo = document.getElementById('codigo');
var codigoL = document.getElementById('codigoL');

var vencimento = document.getElementById('vencimento');
var vencimentoL = document.getElementById('vencimentoL');

var juros = document.getElementById('juros');
var jurosL = document.getElementById('jurosL');

var numConta = document.getElementById('numConta');
var numContaL = document.getElementById('numContaL');

var ag = document.getElementById('ag');
var agL = document.getElementById('agL');

var tipoConta = document.getElementById('tipoConta');
var tipoContaL = document.getElementById('tipoContaL');

var valor = document.getElementById('valor');
var valorL = document.getElementById('valorL');


//Esconde os campos não utilizados
			numConta.className += " some";
			numContaL.className += " some";

			ag.className += " some";
			agL.className += " some";
			
			tipoConta.className += " some";
			tipoContaL.className += " some";

			
			//Mostra os campos utilizados
			codigo.className = " form-control form-control mb-2";
			codigoL.className = "";

			juros.className = " form-control form-control mb-2";
			jurosL.className = "";

			vencimento.className = " form-control form-control mb-2";
			vencimentoL.className = "";

			forma.className = "form-control form-control mb-2";
			formaL.className = "";





operacao.onchange = function(){
	switch (this.value){
		case '1':
			//boleto

			//Esconde os campos não utilizados
			numConta.className += " some";
			numContaL.className += " some";

			ag.className += " some";
			agL.className += " some";
			
			tipoConta.className += " some";
			tipoContaL.className += " some";

			
			//Mostra os campos utilizados
			codigo.className = " form-control form-control mb-2";
			codigoL.className = "";

			juros.className = " form-control form-control mb-2";
			jurosL.className = "";

			vencimento.className = " form-control form-control mb-2";
			vencimentoL.className = "";

			forma.className = "form-control form-control mb-2";
			formaL.className = "";
			break;
		case '2':
			//fatura de cartão

			//Esconde os campos não utilizados
			numConta.className += " some";
			numContaL.className += " some";

			ag.className += " some";
			agL.className += " some";
			
			tipoConta.className += " some";
			tipoContaL.className += " some";


			//Mostra os campos utilizados

			codigo.className = " form-control form-control mb-2";
			codigoL.className = "";

			juros.className = " form-control form-control mb-2";
			jurosL.className = "";

			vencimento.className = " form-control form-control mb-2";
			vencimentoL.className = "";

			forma.className = "form-control form-control mb-2";
			formaL.className = "";
			break;
		case '3':
			//depósito

			//Esconde os campos não utilizados
			codigo.className += " some";
			codigoL.className += " some";

			juros.className += " some";
			jurosL.className += " some";

			vencimento.className += " some";
			vencimentoL.className += " some";

			//Mostra os campos utilizados
			numConta.className = "form-control form-control mb-2";
			numContaL.className = "";

			ag.className = "form-control form-control mb-2";
			agL.className = "";
			
			tipoConta.className = "form-control form-control mb-2";
			tipoContaL.className = "";

			forma.className = "form-control form-control mb-2";
			formaL.className = "";
			break;
		case '4':
			//depósito

		    //Esconde os campos não utilizados
			numConta.className += " some";
			numContaL.className += " some";

			ag.className += " some";
			agL.className += " some";
			
			tipoConta.className += " some";
			tipoContaL.className += " some";
			
			codigo.className += " some";
			codigoL.className += " some";

			juros.className += " some";
			jurosL.className += " some";

			vencimento.className += " some";
			vencimentoL.className += " some";

			forma.className += " some";
			formaL.className += " some";
			break;
		default:
			//...
			break;


	}
}
