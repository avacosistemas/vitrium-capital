<?php include('inc/head.php'); ?>

<!-- <link rel="stylesheet" href="assets/css/intlTelInput.css">-->

  </head>
  <body>
 
    <?php include('gtm2.php'); ?>

  <main id="page_interna_proyecto" class="proyecto_nuevo lang_esp">

    <?php include('inc/nav.php'); ?>


    <section id="formulario_proyecto" class="seccion_gracias">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="formulario_proyecto_logo">
                <a href="01vista"><img src="assets/images/proyectos/01_vista/logo_vista_azul.svg" class="img-fluid d-block mx-auto" alt="01 Vista" /></a>
              </div>
              <div class="formulario_gracias_img">
                <img src="assets/images/proyectos/01_vista/check.svg" class="img-fluid d-block mx-auto" alt="" />
              </div>
            </div><!-- col -->
          </div><!-- row -->

          <div class="row justify-content-center text-center">
            <div class="col-lg-8">
              <!-- <form name="form2" method="post" id="contacto" action="#" accept-charset="utf-8" class="popup-form form-contenido">-->

              <h2 class="mb-4">Gracias por escribirnos, nuestros asesores se pondrán en contacto contigo.</h2>
              <p>Descubrí más sobre nosotros y nuestros proyectos.</p>
              <a href="01vista" class="big_button">Volver al inicio</a>
            </div><!-- col -->
          </div><!-- row -->

        </div><!-- container-->
    </section><!-- formulario_proyecto --> 




<?php include('inc/footer.php'); ?>


</main>




<?php include('inc/scripts.php'); ?>
<script src="assets/js/intlTelInput.js"></script>
<script src="assets/js/scripttelefono.js"></script>


<script>

var input = document.querySelector("#phone");
var output = document.querySelector("#contryname");
var iti =  window.intlTelInput(input, {
      allowDropdown: true,
      autoHideDialCode: false,
    hiddenInput: "telcode",
      initialCountry: "auto", 
      onlyCountries: ['py', 'ar', 'br', 'cl', 'co', 'mx', 'es', 've', 'pa', 'pe', 'bo', 'uy', 'cr', 'us'],
      placeholderNumberType: "MOBILE",
       preferredCountries: ['uy', 'py', 'ar'],
       separateDialCode: true,
       initialCountry: "auto",
        geoIpLookup: function(callback) {
          jQuery.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "uy";
            callback(countryCode);
          });
        },
      utilsScript: "assets/js/utils.js",
    });
    input.addEventListener('countrychange', function(e) {
        output.value = iti.getSelectedCountryData().name;
    });
    output.value = iti.getSelectedCountryData().name;
    


jQuery('.formulariobtn').on('click', function(){
  
  var isValid = true;
  if(jQuery('input#nombre').val() === '' || jQuery('input#email').val() === '' || jQuery('input#phone').val() === '' ){
    isValid = false;
  }else{
    jQuery(this).hide();
      jQuery('.cargadorform').show();
  }
  
});
</script>

  </body>
</html>