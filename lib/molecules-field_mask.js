jQuery(function($){
    $(document).on('textInput', '#telefone', function(e){
        
        tecla = e.originalEvent.data.charCodeAt(0);
        valor = $(this).val();
        tam = valor.length;

        if((tecla >= 96 && tecla <= 105) || (tecla >= 48 && tecla <= 57 ) || e.which == 229){
            
            if(tam == 3){
                $(this).val( '(' + valor.substr(0, 2) + ') ' + valor.substr(2, 1)  );
                setTimeout(function(){ $(this).focus() }, 50);
            }
            
            if(tam == 11){
                $(this).val( '(' + valor.substr(1, 2) + ') ' + valor.substr(5, 4) + '-' + valor.substr(9, 2) );
            }
            if(tam == 14){
                $(this).val( '(' + valor.substr(1, 2) + ') ' + valor.substr(5, 4) + valor.substr(10, 1) + '-' + valor.substr(11, 3) );
            }
            
        }
        
        $(this).focus();
        valor = $(this).val();
        $(this).val('');
        $(this).val(valor);
        if(tam > 3){
            $(this).putCursorAtEnd();
        }
    });

})