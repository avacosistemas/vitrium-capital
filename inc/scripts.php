<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script> -->

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62f9440e40ed7223f14a3627" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php /* <script>
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  var form = document.getElementById("contact_form")
  if (sessionStorage.getItem("lead_source") === null) {
    var lead_source = document.createElement("input");
    lead_source.setAttribute("type", "hidden");
    lead_source.setAttribute("name", "lead_source");
    lead_source.setAttribute("id", "lead_source");
    var leadSourceData = urlParams.get("utm_source")
    lead_source.setAttribute("value", leadSourceData);
    form.appendChild(lead_source)
  } else {
    var lead_source = document.createElement("input");
    lead_source.setAttribute("type", "hidden");
    lead_source.setAttribute("name", "lead_source");
    lead_source.setAttribute("id", "lead_source");
    lead_source.setAttribute("value", "Espontaneo");
    form.appendChild(lead_source)
  }
  // <!-- Campaña/Canal $utm_medium -->
  if (sessionStorage.getItem("utm_medium") === null) {
    var utm_medium = document.createElement("input");
    utm_medium.setAttribute("type", "hidden");
    utm_medium.setAttribute("id", "00Nj000000ApuCe");
    utm_medium.setAttribute("name", "00Nj000000ApuCe");
    var utmMediumData = urlParams.get("utm_medium")
    utm_medium.setAttribute("value", utmMediumData);
    form.appendChild(utm_medium)
  } else {
    var utm_medium = document.createElement("input");
    utm_medium.setAttribute("type", "hidden");
    utm_medium.setAttribute("name", "00Nj000000ApuCe");
    utm_medium.setAttribute("id", "00Nj000000ApuCe");
    utm_medium.setAttribute("value", "Pagina_Web");
    form.appendChild(utm_medium)
  }
  // <!-- Campaña/Canal utm_landing --> 
  if (sessionStorage.getItem("utm_landing") === null) {
    var utm_landing = document.createElement("input");
    utm_landing.setAttribute("type", "hidden");
    utm_landing.setAttribute("id", "00Nj000000A29r1");
    utm_landing.setAttribute("name", "00Nj000000A29r1");
    var utmLandingData = urlParams.get("utm_landing")
    utm_landing.setAttribute("value", utmLandingData);
    form.appendChild(utm_landing)
  } else {
    var utm_landing = document.createElement("input");
    utm_landing.setAttribute("type", "hidden");
    utm_landing.setAttribute("name", "00Nj000000A29r1");
    utm_landing.setAttribute("id", "00Nj000000A29r1");
    utm_landing.setAttribute("value", "Departamentos");
    form.appendChild(utm_medium)
  }
  //   <!-- Campaña/Canal utm_campaign --> 
  if (sessionStorage.getItem("utm_landing") === null) {
    var utm_campaign = document.createElement("input");
    utm_campaign.setAttribute("type", "hidden");
    utm_campaign.setAttribute("id", "00Nj000000Bohtn");
    utm_campaign.setAttribute("name", "00Nj000000Bohtn");
    var utmCampaingData = urlParams.get("utm_campaign")
    utm_campaign.setAttribute("value", utmCampaingData);
    form.appendChild(utm_campaign)
  } else {
    var utm_campaign = document.createElement("input");
    utm_campaign.setAttribute("type", "hidden");
    utm_campaign.setAttribute("name", "00Nj000000Bohtn");
    utm_campaign.setAttribute("id", "00Nj000000Bohtn");
    utm_campaign.setAttribute("value", "Formulario");
    form.appendChild(utm_campaign)
  }
  //          <!-- Campaña/Canal LLEgada -->                
  var utm_llegada = document.createElement("input");
  utm_llegada.setAttribute("type", "hidden");
  utm_llegada.setAttribute("id", "00Nj000000ABZ0p");
  utm_llegada.setAttribute("name", "00Nj000000ABZ0p");
  utm_llegada.setAttribute("value", "VitriumCapitalCom");
  form.appendChild(utm_llegada)

  function submitForm() {
    if (!$('#first_name').val() || !$('#last_name').val() || !$('#phone').val() || !$('#email').val() || !$('#00Nj0000008ze1B').val() || !$('#00Nj0000008bHZU').val() || !$('#00Nj000000BSaZp').val()) {
      alert('Todos los campos son obligatorios');

      return;
    }

    document.getElementById('contact_form').submit();
  }
</script> */ ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/TextPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.5.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.5.3/js/utils.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
  $(document).ready(function() {
    $('.carousel_principal').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      autoPlay: false
    });
  });

  jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();

    //>=, not <=
    if (scroll >= 100) {
      //clearHeader, not clearheader - caps H
      jQuery(".navbar").addClass("escroleado");
    } else {
      jQuery(".navbar").removeClass("escroleado");
    }
  });
  jQuery('.page_contacto a').on('click', function() {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $('#seccion_contacto').offset().top - 100
    }, 'slow');
  });

  Fancybox.defaults.Hash = false;
  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
</script>

<script>
  const input = document.querySelector("#phone");
  // const button = document.querySelector("#btn");
  const errorMsg = document.querySelector("#error-msg");
  const validMsg = document.querySelector("#valid-msg");

  // here, the index maps to the error code returned from getValidationError - see readme
  const errorMap = ["Inválido", "Código de país inválido", "Muy corto", "Muy largo", "Inválido"];

  // initialise plugin
  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: callback => {
      fetch("https://ipapi.co/json")
        .then(res => res.json())
        .then(data => callback(data.country_code))
        .catch(() => callback("us"));
    },
    hiddenInput: () => "full_phone",
    preferredCountries: ["py", "uy", "ar", "us", "pe", "mx", "ec", "co"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.5.3/js/utils.min.js"
  });

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("d-none");
    validMsg.classList.add("d-none");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("d-none");
  };

  // on click button: validate
  // button.addEventListener('click', () => {
  validate();

  function validate() {
    reset();
    if (!input.value.trim()) {
      // showError("Requerido");
    } else if (iti.isValidNumber()) {
      validMsg.classList.remove("d-none");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "Invalid number";
      showError(msg);
    }
  }

  // on keyup / change flag: reset
  input.addEventListener('change', reset);
  input.addEventListener('keyup', reset);
  input.addEventListener('keyup', validate);
</script>



<?php
// CONTACTO
if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/nosotros' || $_SERVER['REQUEST_URI'] == '/servicios' || $_SERVER['REQUEST_URI'] == '/proyectos') {
?>
  <script>
    $(document).ready(function() {
      // Para funcionamiento del popup
      $('#formulario_pop2, #formulario_pop3').hide();

      function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
      }

      $('#btn-section1').on('click', function() {
        $(this).html('Enviando...').prop('disabled', true);
        var asesor_radio = $("input[name='asesor_radio']:checked").val();
        var agente = $("input[name='agente']:checked").val();
        var nombre_apellido = $('#nombre_apellido').val();
        var ciudad = $('#ciudad').val();
        var pais = $('#pais').val();
        var project = $('#project').val();
        var email = $('#email').val();
        var celular = $('#phone').val();
        var informacion = $('#informacion').val();
        var full_phone = iti.getNumber();

        if (!nombre_apellido || !ciudad || !pais || !email || !project || !celular || !informacion) {
          alert('Todos los campos son requeridos');
          $('#btn-section1').html('Siguiente').prop('disabled', false);
          return false;
        }

        if (!validateEmail(email)) {
          alert('Email inválido');
          $('#btn-section1').html('Siguiente').prop('disabled', false);
          return false;
        }

        if (!iti.isValidNumber()) {
          alert('Celular inválido');
          $('#btn-section1').html('Siguiente').prop('disabled', false);
          return false;
        }

        $.ajax({
          url: '/sms-insert',
          type: 'POST',
          data: {
            full_phone: full_phone,
          },
          success: function(response) {
            if (response.success) {
              $('#formulario_pop').hide();
              $('#formulario_pop2').show();
              iniciarsmsinput();
              $('#btn-section1').html('Siguiente').prop('disabled', false);
            } else {
              alert(response.msg);
              $('#btn-section1').html('Siguiente').prop('disabled', false);
            }
          }
        });
      });

      $('#btn-a-section1').on('click', function() {
        $('#formulario_pop2').hide();
        $('#formulario_pop').show();
      });

      $('#btn-section2').on('click', function() {
        $(this).html('Enviando...').prop('disabled', true);
        var asesor_radio = $("input[name='asesor_radio']:checked").val();
        var agente = $("input[name='agente']:checked").val();
        var nombre_apellido = $('#nombre_apellido').val();
        var ciudad = $('#ciudad').val();
        var pais = $('#pais').val();
        var project = $('#project').val();
        var email = $('#email').val();
        var celular = iti.getNumber();
        var code = $('#partitioned').val();
        var informacion = $('#informacion').val();

        if (!nombre_apellido || !ciudad || !pais || !email || !celular || !project || !informacion || !code) {
          alert('Todos los campos son requeridos');
          $('#btn-section2').html('Enviar').prop('disabled', false);
          exit();
        }

        $.ajax({
          url: '/sms-validation',
          type: 'POST',
          data: {
            asesor_radio: asesor_radio,
            agente: agente,
            nombre_apellido: nombre_apellido,
            ciudad: ciudad,
            pais: pais,
            email: email,
            celular: celular,
            project: project,
            informacion: informacion,
            utm_source: '<?php echo $_GET['utm_source'] ?>',
            utm_medium: '<?php echo $_GET['utm_medium'] ?>',
            utm_campaign: '<?php echo $_GET['utm_campaign'] ?>',
            utm_content: '<?php echo $_GET['utm_content'] ?>',
            code: code
          },
          success: function(response) {
            if (response.success) {
              $('#formulario_pop2').hide();
              $('#formulario_pop3').show();

              gtag('event', 'conversion', {
                'send_to': 'AW-382240202/NULWCMuhs4kCEMqLorYB'
              });

              function gtag_report_conversion(url) {
                var callback = function() {
                  if (typeof(url) != 'undefined') {
                    window.location = url;
                  }
                };
                gtag('event', 'conversion', {
                  'send_to': 'AW-382240202/NULWCMuhs4kCEMqLorYB',
                  'event_callback': callback
                });
                return false;
              }

              $('#btn-section2').html('Enviar').prop('disabled', false);
            } else {
              alert(response.msg);
              $('#btn-section2').html('Enviar').prop('disabled', false);
            }
          }
        });
      });

      function iniciarsmsinput() {
        // para el input de SMS
        var obj = document.getElementById('partitioned');
        obj.addEventListener('keydown', stopCarret);
        obj.addEventListener('keyup', stopCarret);

        function stopCarret() {
          if (obj.value.length > 3) {
            setCaretPosition(obj, 3);
          }
        }

        function setCaretPosition(elem, caretPos) {
          if (elem != null) {
            if (elem.createTextRange) {
              var range = elem.createTextRange();
              range.move('character', caretPos);
              range.select();
            } else {
              if (elem.selectionStart) {
                elem.focus();
                elem.setSelectionRange(caretPos, caretPos);
              } else {
                elem.focus();
              }
            }
          }
        }
      };
    });
  </script>
<?php
}
if ($_SERVER['REQUEST_URI'] == '/home-en' || $_SERVER['REQUEST_URI'] == '/nosotros-en' || $_SERVER['REQUEST_URI'] == '/servicios-en' || $_SERVER['REQUEST_URI'] == '/proyectos-en') {
?>
  <script>
    $(document).ready(function() {
      // Para funcionamiento del popup
      $('#formulario_pop2, #formulario_pop3').hide();

      function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
      }

      $('#btn-section1').on('click', function() {
        $(this).html('Enviando...').prop('disabled', true);
        var asesor_radio = $("input[name='asesor_radio']:checked").val();
        var agente = $("input[name='agente']:checked").val();
        var nombre_apellido = $('#nombre_apellido').val();
        var ciudad = $('#ciudad').val();
        var pais = $('#pais').val();
        var project = $('#project').val();
        var email = $('#email').val();
        var celular = $('#phone').val();
        var informacion = $('#informacion').val();
        var full_phone = iti.getNumber();

        if (!nombre_apellido || !ciudad || !pais || !email || !project || !celular || !informacion) {
          alert('All fields are required');
          $('#btn-section1').html('Siguiente').prop('disabled', false);
          return false;
        }

        if (!validateEmail(email)) {
          alert('Invalid email');
          $('#btn-section1').html('Siguiente').prop('disabled', false);
          return false;
        }

        if (!iti.isValidNumber()) {
          alert('Invalid cell phone');
          $('#btn-section1').html('Siguiente').prop('disabled', false);
          return false;
        }

        $.ajax({
          url: '/sms-insert',
          type: 'POST',
          data: {
            full_phone: full_phone,
          },
          success: function(response) {
            if (response.success) {
              $('#formulario_pop').hide();
              $('#formulario_pop2').show();
              iniciarsmsinput();
              $('#btn-section1').html('Siguiente').prop('disabled', false);
            } else {
              alert(response.msg);
              $('#btn-section1').html('Siguiente').prop('disabled', false);
            }
          }
        });
      });

      $('#btn-a-section1').on('click', function() {
        $('#formulario_pop2').hide();
        $('#formulario_pop').show();
      });

      $('#btn-section2').on('click', function() {
        $(this).html('Enviando...').prop('disabled', true);
        var asesor_radio = $("input[name='asesor_radio']:checked").val();
        var agente = $("input[name='agente']:checked").val();
        var nombre_apellido = $('#nombre_apellido').val();
        var ciudad = $('#ciudad').val();
        var pais = $('#pais').val();
        var project = $('#project').val();
        var email = $('#email').val();
        var celular = iti.getNumber();
        var code = $('#partitioned').val();
        var informacion = $('#informacion').val();

        if (!nombre_apellido || !ciudad || !pais || !email || !celular || !project || !informacion || !code) {
          alert('All fields are required');
          $('#btn-section2').html('Enviar').prop('disabled', false);
          exit();
        }

        $.ajax({
          url: '/sms-validation',
          type: 'POST',
          data: {
            asesor_radio: asesor_radio,
            agente: agente,
            nombre_apellido: nombre_apellido,
            ciudad: ciudad,
            pais: pais,
            email: email,
            celular: celular,
            project: project,
            informacion: informacion,
            utm_source: '<?php echo $_GET['utm_source'] ?>',
            utm_medium: '<?php echo $_GET['utm_medium'] ?>',
            utm_campaign: '<?php echo $_GET['utm_campaign'] ?>',
            utm_content: '<?php echo $_GET['utm_content'] ?>',
            code: code
          },
          success: function(response) {
            if (response.success) {
              $('#formulario_pop2').hide();
              $('#formulario_pop3').show();

              gtag('event', 'conversion', {
                'send_to': 'AW-382240202/NULWCMuhs4kCEMqLorYB'
              });

              function gtag_report_conversion(url) {
                var callback = function() {
                  if (typeof(url) != 'undefined') {
                    window.location = url;
                  }
                };
                gtag('event', 'conversion', {
                  'send_to': 'AW-382240202/NULWCMuhs4kCEMqLorYB',
                  'event_callback': callback
                });
                return false;
              }

              $('#btn-section2').html('Enviar').prop('disabled', false);
            } else {
              alert(response.msg);
              $('#btn-section2').html('Enviar').prop('disabled', false);
            }
          }
        });
      });

      function iniciarsmsinput() {
        // para el input de SMS
        var obj = document.getElementById('partitioned');
        obj.addEventListener('keydown', stopCarret);
        obj.addEventListener('keyup', stopCarret);

        function stopCarret() {
          if (obj.value.length > 3) {
            setCaretPosition(obj, 3);
          }
        }

        function setCaretPosition(elem, caretPos) {
          if (elem != null) {
            if (elem.createTextRange) {
              var range = elem.createTextRange();
              range.move('character', caretPos);
              range.select();
            } else {
              if (elem.selectionStart) {
                elem.focus();
                elem.setSelectionRange(caretPos, caretPos);
              } else {
                elem.focus();
              }
            }
          }
        }
      };
    });
  </script>
<?php
}
?>