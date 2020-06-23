var cartao = document.getElementById("cartao");
var limite = document.getElementById("limite");
var vencimento = document.getElementById("vencimento");
var senhaCartao = document.getElementById("senhaCartao");


cartao.onchange = function(){
	if (cartao.value == "Não") {
		limite.disabled = true;
		vencimento.disabled = true;
		senhaCartao.disabled = true;	
	}else{
		limite.disabled = false;
		vencimento.disabled = false;
		senhaCartao.disabled = false;
	}
	
}