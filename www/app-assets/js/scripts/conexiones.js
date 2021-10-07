/*=========================================================================================
  File Name: customizer.js
  Description: Template customizer js.
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/

(function (window, document, $) {
  'use strict';

  //Detectar instancias
  $.ajax({
    method: "POST",
    url: "php/instancias.php",
    data: { },
    success : function(response) {
      var termino="<option value";
      let posicion = response.indexOf(termino);
      if (posicion !== -1){
        $("#instancias").html(response);
        $('#loader_instancias').addClass('d-none');
        $('#instancias').removeClass('d-none');
      }
      else{
        $("#text-errores-detectar-instancias").html("Error: "+response);
        $('#text-errores-detectar-instancias').addClass('d-block');
        $('#text-errores-detectar-instancias').removeClass('d-none'); 
      }
    },
    error : function(xhr, status, err) {
      alert('Disculpe, existió un problema al intentar detectar las instancias.');
    }
  })
  //FIN Detectar instancias

  //Conectar a SQL Server
  $( "#conector_bd" ).click(function() {
    var instancia=$( "#instancias" ).val();
    var usuario=$( "#username" ).val();
    var password=$( "#vertical-modern-password" ).val();

    //Validar tamaño usuario y pass
    if(usuario.length < 1 || password.length < 1){
      $("#text-errores-conectar").html("Datos incorrectos");
      $('#text-errores-conectar').addClass('d-block');
      $('#text-errores-conectar').removeClass('d-none');
    }else{
      //Detectar instancia
      if(instancia){
        $("#text-errores-conectar").html("");
        $('#text-errores-conectar').removeClass('d-block');
        $('#text-errores-conectar').addClass('d-none');

        //CONECTAR
        $.ajax({
          method: "POST",
          url: "php/bases_datos.php",
          data: { instancia: instancia,usuario: usuario,password:password },
          success : function(response) {

            $("#text-errores-conectar").html(response);
            $('#text-errores-conectar').addClass('d-block');
            $('#text-errores-conectar').removeClass('d-none');
            var termino="<option value";
            let posicion = response.indexOf(termino);
            if (posicion !== -1){
              $("#bases-datos").html(response);
              $( "#bases-datos" ).prop( "disabled", false );
              $('#text-errores-conectar').removeClass('d-block');
              $('#text-errores-conectar').addClass('d-none');

              $('#conector_bd').addClass('d-none');
              $('#conectado_bd').removeClass('d-none');
            }
            else{
              $("#text-errores-conectar").html("Error: "+response);
              $('#text-errores-conectar').prop('title', response);
              $('#text-errores-conectar').addClass('d-block');
              $('#text-errores-conectar').removeClass('d-none'); 
            }

          },
          error : function(xhr, status, err) {
            alert('Disculpe, existió un problema al intentar detectar las bases de datos.');
          }
        });
        //FIN CONECTAR

      }
      else{
        $("#text-errores-conectar").html("Error al selecionar la instancia");
        $('#text-errores-conectar').addClass('d-block');
        $('#text-errores-conectar').removeClass('d-none');
      }
    }
  });
  //FIN Conectar a SQL Server


})(window, document, jQuery);
