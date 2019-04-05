$(document).ready(function(){
    var maxField = 20; // Numero maximo de campos
    var addButton = $('.add_button'); // Selector del boton de Insertar
    var wrapper = $('.field_wrapper'); // Contenedor de campos
   var fieldHTML = '<div class="col-md-12"> <label class="control-label text-right">Nombres:</label> <input type="text" name="parentesco_nombre[]" value=""/> <label class="control-label text-right">Apellidos:</label> <input type="text" name="parentesco_apellido[]" value=""/> <label class="control-label text-right">Telefono:</label> <input type="text" name="parentesco_telefono[]" value=""/> <label class="control-label text-right">Celular:</label> <input type="text" name="parentesco_celular[]" value=""/> <label class="control-label text-right">Parentesco:</label> <select name="pariente[]"> <option value="Padres">Padres</option> <option value="Hermanos">Hermanos</option> <option value="Tios">Tios</option> <option value="Abuelos">Abuelos</option> </select><a href="javascript:void(0);" class="remove_button fa fa-minus-square" title="Remove field"></a></div>';
    var x = 1; // Iniciamos el contador a 1
    $(addButton).click(function(){ // Una vez que se haga clic en el boton
        if(x < maxField){ //Comprobamos el maximo
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Añadimos el HTML
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ // Una vez se ha hecho clic en el boton de eliminar
        e.preventDefault();
        $(this).parent('div').remove(); //Eliminamos el div
        x--; // Reducimos el contador a 1
    });

});