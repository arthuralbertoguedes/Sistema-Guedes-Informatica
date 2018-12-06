let link = $('#teste');

function chamarAjax(){
    $.ajax({
        method: "post",
        url: "homeAdministrador.php",
        data: {
            'Arthur' : 2,
            'Joao' : true
        }, 
        success: function(msg){
            alert(msg);
        }
        }
    )
}


link.on('click',function(e){
    chamarAjax();
})