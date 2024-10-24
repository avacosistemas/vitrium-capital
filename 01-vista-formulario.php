<?php include('inc/head.php'); ?>

<!-- <link rel="stylesheet" href="assets/css/intlTelInput.css">-->

</head>

<body>

  <?php include('gtm2.php'); ?>

  <main id="page_interna_proyecto" class="proyecto_nuevo lang_esp">

    <?php include('inc/nav.php'); ?>


    <section id="formulario_proyecto">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="formulario_proyecto_logo">
              <a href="01vista"><img src="assets/images/proyectos/01_vista/logo_vista_azul.svg" class="img-fluid d-block mx-auto" alt="01 Vista" /></a>
            </div>
            <h4>Dejanos un mensaje para seguir en contacto</h4>
          </div><!-- col -->
        </div><!-- row -->

        <div class="row justify-content-center">
          <div class="col-lg-5">
            <!-- <form name="form2" method="post" id="contacto" action="#" accept-charset="utf-8" class="popup-form form-contenido">-->

            <form class="form" method="POST" name="contactForm" id="contact_form" data-name="Email Form" action="email-proyecto.php">
              <input type="hidden" name="encoding" value="UTF-8">
              <input type="hidden" name="oid" value="00Dj0000001rNSE">
              <input type="hidden" name="retURL" value="01-vista-gracias.php">
              <input type="hidden" name="dial_code" id="dialCode" class="dialCode" value="595">
              <input type="hidden" name="lead_source" value="Vitriumcapital.com">
              <input type="hidden" name="anuncio" value="Espontaneo">
              <div class="row">
                <div class="col-sm">
                  <input type="text" class="col-sm formulariot" maxlength="256" name="first_name" data-name="first_name" placeholder="Ingresar nombre" id="first_name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <input type="text" class="col-sm formulariot" maxlength="256" name="last_name" data-name="last_name" placeholder="Ingresar apellido" id="last_name" required="required">
                </div>
              </div>

              <div class="row">
                <div class="col-sm">
                  <input type="text" class="col-sm formulariot" maxlength="256" name="email" data-name="email" placeholder="Ingresar Email" id="email" required="required">
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <input type="phone" class="col-sm formulariot" maxlength="256" name="phone" data-name="phone" placeholder="Ingresar teléfono" id="phone" required="required">
                </div>
              </div>


              <div class="row">
                <div class="col-sm">
                  <div class="item-form">
                    <select id="00Nj0000008ze1B" name="00Nj0000008ze1B" data-name="00Nj0000008ze1B" required="required" class="select-field background-dark w-select cleanSafari">
                      <option value="">Seleccionar País...</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Chile">Chile</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Estados Unidos">Estados Unidos</option>
                      <option value="Perú">Perú</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Otro">Otro</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm">
                  <select id="00Nj0000008bHZU" name="00Nj0000008bHZU" data-name="00Nj0000008bHZU" required="required" class="select-field background-dark w-select cleanSafari">
                    <option value="">Proyecto de interés</option>
                    <option value="UY - 01 Vista">01 Vista</option>
                    <option value="UY - 01 Vila">01 Vila</option>
                    <option value="UY - 01 Las Artes">01 Las Artes</option>
                    <option value="UY - 01 Del Centro">01 Del Centro</option>
                    <option value="UY - 01 Libertador">01 Libertador</option>
                    <option value="PY - 01 Mburucuyá">01 Mburucuyá</option>
                    <option value="UY - 01 Sync Montevideo">01 Sync Montevideo</option>
                    <option value="PY - 01 Sync Asunc">01 Sync Asunción</option>
                    <option value="UY - Carmelo Golf">Carmelo Golf</option>
                    <option value="AR - Pueblo Caamaño">Pueblo Caamaño</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-sm">
                  <textarea id="00Nj000000BSaZp" name="00Nj000000BSaZp" maxlength="5000" data-name="00Nj000000BSaZp" required="required" class="mensajeform" placeholder="Escribí tu mensaje acá"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-sm" style="font-size: 11px; display: block; margin-top: 12px; color: #7b7b7b;">
                  (*) Campos obligatorios
                </div>
              </div>


              <div class="g-recaptcha" data-sitekey="6LdgcKMmAAAAAGGJLYOy8JbVY7SQNjHcgFIxyJ4H"></div>

              <!-- <button type="submit" class="big_button g-recaptcha" data-sitekey="6LcjDJomAAAAAMfiA0PQpbqlJ23IMhzxnKjRdmOa" data-callback="submitForm" >Contáctanos ahora</button> -->
              <button type="submit" class="big_button">Contáctanos ahora</button>


            </form>
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- container-->
    </section><!-- formulario_proyecto -->




    <?php include('inc/footer-proyectos.php'); ?>


  </main>




  <?php include('inc/scripts.php'); ?>
  <?PHP /*
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
*/ ?>
</body>

</html>