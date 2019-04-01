 <!--INICIO para el formulario de pasos
   https://programacion.net/articulo/como_crear_un_formulario_de_multiples_pasos_utilizando_jquery-_bootstrap_y_php_1871?fbclid=IwAR3muv3H8fCzQAf9nJpxOUUyoW8lMAicrd1TAhVtvyiSFjh1BpuWxbkJVXU-->

         $(document).ready(function(){
            var form_count = 1, previous_form, next_form, total_forms;
            total_forms = $("fieldset").length;

            $(".next-form").click(function(){
                previous_form = $(this).parent();
                next_form = $(this).parent().next();
                next_form.show();
                previous_form.hide();
                setProgressBarValue(++form_count);
            });

            $(".previous-form").click(function(){
            previous_form = $(this).parent();
            next_form = $(this).parent().prev();
            next_form.show();
            previous_form.hide();
            setProgressBarValue(--form_count);
            });

            setProgressBarValue(form_count);
            function setProgressBarValue(value){
            var percent = parseFloat(100 / total_forms) * value;
            percent = percent.toFixed();
            $(".progress-bar")
            .css("width",percent+"%")
            .html(percent+"%");
            }
/*
            // Handle form submit and validation
            $( "#register_form" ).submit(function(event) {
            var error_message = '';
            if(!$("#vic_nombre").val()) {
            error_message+="Porfavor ingrese el nombre de la adolescente ";
            }
            if(!$("#vic_num_hermanos").val()) {
            error_message+="<br>Porfavor ingrese el numero de hermanos de la adolescente";
            }
            // Display error if any else submit form
            if(error_message) {
            $('.alert-success').removeClass('hide').html(error_message);
            return false;
            } else {
            return true;
            }
            });
*/
            });
<!--FIN PASOS PARA FORMULARIO-->