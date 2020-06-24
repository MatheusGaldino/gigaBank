$(document).ready(function(){
    $("input").blur(function(){
        $(this).addClass('erro')
    })

    var erros = 10
    $("#submit").click(function(){
        alert('clicou!')
        
        $("input").each(function(){
            if($(this).val() ==''){
                $(this).addClass('erro');
                erros++
            }
        })  
    })
    if(erros == 0 ){
        $("#form").submit()
    }
})


