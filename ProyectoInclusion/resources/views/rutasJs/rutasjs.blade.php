
<script src="js/jquery-2.1.4.min.js"></script>
 <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/classie.js"></script>

<script src="js/artyom.js"></script>
<script src="js/artyomCommands.js"></script>
<script src="js/comandoVoz.js" ></script>


<!--<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>


<script src="js/voz.js" ></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>-->

<!-- (Optional) Latest compiled and minified JavaScript translation files -->

<!--<script>
	
	$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
});

</script>-->
        <!-- Agrego el archivo js del plugin de jquery creado -->
<!--<script src="assets/plugins/jquery.virtual_keyboard/jquery.virtual_keyboard.js" type="text/javascript"></script>--><!-- teclado virtual -->

<script>
    $(window).load(function() {
                        $(".loader").fadeOut("slow");
                });
</script><!-- cargar -->

<!--<script>
            jQuery(document).ready(function() {

                
                // Inicializo los ToolTips y los PopOver (Pertenecen a Bootstrap)
                // Son las cajas que se activan cuando le paso el mause x encima a los campos
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();


                // Creo una instancia del plugin y se la asigno un campo, en este caso de tipo Textarea
                // Le paso varios parametros de entrada. En el archivo JS del plugin se pueden ver las
                // opciones del plugin, sus descripciones, asi como sus valores premeditados.
                $('input').keyboard({

                    //theme: 'default',

                    //is_hidden: false,

                    //close_speed: 1000,

                    //enabled: false,

                    //layout: 'en_US',

                    // definimos un trigger al keyboard.
                    // Al hacer click sobre el selector que tenga el id (#) o la clase (.) definida
                    // se ocultara o mostrara el keyboard segun corresponda.
                    trigger: '#buttom1'
                });

                // Guardo en la variable 'keyboard' (puede ser cualkier otro nombre), la instancia del plugin creada,
                // para asi acceder a los metodos publicos del plugin
                var keyboard = $('input').data('pluginKeyboard');

                // A partir de aqui inicializo los valores del cajon de 'Configuration Options' que vemos,
                // para que los campos tengan los valores con los que se creo la instancia del plugin.

                $('#hiddenCheck').attr('checked', !keyboard.getHidden());   // CheckBox k oculta o muestra el keyboard

                $('#openSpeedInput').val(keyboard.getOpenSpeed());          // Valor en milisegundos de la velocidad con que se muestra el keyboard

                $('#closeSpeedInput').val(keyboard.getCloseSpeed());        // Valor en milisegundos de la velocidad con que se oculta el keyboard

                keyboard.SubmitKey = function(){                            // Definimos que accion realizar al presionar la tecla 'Submit'.
                    alert('Presionada la tecla Enter');
                };


                // Cambiamos el tema del teclado de acuerdo al valor que este seleccionado en el campo 'Select' del Tema.
                // De momento solo tres temas, estoy trabajando en mejorarlos y agregar 2 temas más.
                $('#themeSelect').change(function(){
                    $(this).find(':selected').each(function () {
                        keyboard.setTheme($('#themeSelect').val());
                    })
                });

                // Definimos que al hacer click en el checkbox de 'Habilitar Keyboard' se bloquee o desbloquee el keyboard
                $('#enabledCheck').change(function(){
                    keyboard.setEnabled(!keyboard.getEnabled());
                });

                // Definimos que al hacer click en el checkbox de 'Mostrar Keyboard' se muestro u oculte el keyboard
                $('#hiddenCheck').change(function(){
                    keyboard.setHidden($(this).is(':checked'));
                });

                // Cambiamos la velocidad con que se muestra el keyboard al cambiar el valor del campo 'Open Speed', el valor esta en milisegundos
                $('#openSpeedInput').change(function(){
                    keyboard.setOpenSpeed($(this).val());
                });

                // Cambiamos la velocidad con que se oculta el keyboard al cambiar el valor del campo 'Close Speed', el valor esta en milisegundos
                $('#closeSpeedInput').change(function(){
                    keyboard.setCloseSpeed($(this).val());
                });
            });
</script>--><!-- funcionalidad teclado virtual -->
<!--<script src="js/toucheffects.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" ></script>
<script src="js/animacion.js"></script>
<script src="sweetalert2/sweetalert2.js"></script>
<!--<script src="sweetalert2/mias.js"></script>-->