<?php
if ($_SERVER['REQUEST_URI'] == '/home-en' || $_SERVER['REQUEST_URI'] == '/nosotros-en' || $_SERVER['REQUEST_URI'] == '/servicios-en' || $_SERVER['REQUEST_URI'] == '/proyectos-en') {
?>
  <section id="seccion_contacto">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div id="contacto">
            <div class="modal-body">
              <section id="formulario_pop" class="form_verde">
                <div class="container">
                  <div class="container text-center">
                    <div class="row mb-2">
                      <h2 class="col d-flex align-items-center justify-content-center mb-4">
                        <span>Consult with an advisor</span>
                      </h2>
                    </div>
                  </div>
                  <form action="" class="row g-3">
                    <div class="col-12">
                      <textarea class="form-control" id="informacion" rows="4" placeholder="Please provide us with more information about whether you are looking to buy the apartment to live in, to invest in, in which area, estimated budget, etc. This will help the advisor prepare for the contact."></textarea>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="asesor_radio" id="flexRadioDefault13" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault13">I want to buy for living</label>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="asesor_radio" id="flexRadioDefault23" value="2">
                        <label class="form-check-label" for="flexRadioDefault23">I want to buy for investment</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <!-- <div class="container text-center my-2"> -->
                      <!-- <div class="row"> -->
                      <h2 class="col d-flex align-items-center justify-content-center"><span>Contact data</span></h2>
                      <!-- </div> -->
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="" class="visually-hidden">Name and surname</label>
                      <input type="text" class="form-control" id="nombre_apellido" placeholder="Name and surname">
                    </div>
                    <div class="col-md-6 mb-2">
                      <select id="project" name="project" data-name="project" required="" class="form-select">
                        <option value="">Project of Interest</option>
                        <option value="UY - 01 Vila">UY - 01 Vila</option>
                        <option value="UY - 01 Vista">UY - 01 Vista</option>
                        <option value="UY - 01 Del Centro">UY - 01 Del Centro</option>
                        <option value="UY - 01 Libertador">UY - 01 Libertador</option>
                        <option value="UY - 01 Sync">UY - 01 Sync</option>
                        <option value="UY - Carmelo Golf">UY - Carmelo Golf</option>
                        <option value="PY - 01 Mburucuyá">PY - 01 Mburucuyá</option>
                        <option value="PY - 01 Sync">PY - 01 Sync</option>
                        <option value="PY - 01 Las Mercedes">PY - 01 Las Mercedes</option>
                        <option value="AR - Pueblo Caamaño">AR - Pueblo Caamaño</option>
                        <option value="USA - Duos">USA - Duos</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="" class="visually-hidden">Country of residence</label>
                      <input type="text" class="form-control" id="pais" placeholder="Country of residence">
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="" class="visually-hidden">City of Residence</label>
                      <input type="text" class="form-control" id="ciudad" placeholder="City">
                    </div>
                    <div class="col-md-6">
                      <label for="" class="visually-hidden">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                      <label for="" class="visually-hidden">Cellphone Number</label>
                      <div class="phone-input-container">
                        <div class="flag-container">
                          <!-- <img src="assets/images/flag_uruguay.png" class="banderita-form" /> -->
                        </div>
                        <input id="phone" name="phone" type="tel">
                        <!-- <button id="btn" type="button">Validate</button> -->
                        <span id="valid-msg" class="hide">✓ Válid</span>
                        <span id="error-msg" class="hide"></span>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col-12 col-md-6">
                        <h4 class="fs-6 text-white">Are you a real estate agent?</h4>
                      </div>
                      <div class="col-12 col-md-6 d-flex align-items-center">

                        <div class="form-check me-3">
                          <input class="form-check-input" type="radio" name="agente" id="flexRadioDefault1" value="1" checked>
                          <label class="form-check-label" for="flexRadioDefault1">No</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="agente" id="flexRadioDefault2" value="2">
                          <label class="form-check-label" for="flexRadioDefault2">Yes</label>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row mt-4">
                    <button class="botonsiguientepop" id="btn-section1">Next</button>
                  </div>
                </div>
              </section>

              <section id="formulario_pop2" class="form_verde">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-11">
                    <button id="btn-a-section1"><img src="assets/images/chevron-left-white.svg" alt=""></button>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-12 col-md-8">
                    <h3 class="text-white text-uppercase fs-4">Verify your phone number by entering the code we just sent you via SMS:</h3>
                  </div>
                </div>
                <form>
                  <div class="contenedor_sms">
                    <div id="divOuter">
                      <div id="divInner">
                        <input id="partitioned" type="text" name="code" maxlength="4" />
                      </div>
                    </div>
                  </div>
                </form>
                <!-- <a href="" class="linkblanco mt-4">Volver a enviar</a> -->
                <div class="col-12 d-flex justify-content-center my-4">
                  <!-- <button class="btn btn-next" id="btn-section2"><img
                                        src="assets/images/flecha_next.svg"
                                        class="img-fluid d-block mx-auto"></button> -->
                  <button class="botonsiguientepop" id="btn-section2">Send</button>
                </div>
              </section>

              <section id="formulario_pop3" class="form_verde">
                <div class="row justify-content-center">
                  <div class="col-12 col-md-8">
                    <h3 class="text-white text-uppercase fs-4">Thank you! An advisor will contact you.</h3>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                  <img src="assets/images/proyectos/01_lasmercedes/check-proyectos.svg" class="img-fluid d-block mx-auto my-4" style="width: 100px" />
                </div>
              </section>
            </div>
          </div>
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container-->
  </section>
<?php
}
?>

<footer>
  <div class="container">
    <div class="row align-items-end align-items-lg-center">
      <div class="col-12  col-lg-4">
        <a href="index.php"><img src="assets/images/logo-vitrium.svg" class="img-fluid" /></a>
      </div><!-- col -->
      <div class="col-12 col-sm-6 col-lg-4">
        <h3 class="titulo">Find us</h3>
        <p>
          Uruguay: (+598) 2917 1663<br>
          Argentina: (+54) 9 11 6600 6698<br>
          Paraguay: (+595) 992 223 027<br>
          USA: (+1) 305 567 3373
        </p>

        <p>
          <b>Contact a Sales Man:</b><br>
          <a href="mailto:ventas@vitriumcapital.com">ventas@vitriumcapital.com</a>
        </p>

        <p>
          <b>Brokers / Real State:</b><br>
          <a href="brokers@vitriumcapital.com">brokers@vitriumcapital.com</a>
        </p>
      </div><!-- col -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="rrss">
          <a href="https://www.instagram.com/vitriumcapital/" target="_blank" class="link-instagram-2 w-button"></a>
          <a href="https://www.facebook.com/VitriumCapital/" target="_blank" class="link-facebook w-button"></a>
          <a href="https://twitter.com/VitriumCapital" target="_blank" class="link-tw w-button"></a>
          <a href="https://www.linkedin.com/company/vitriumcapital/" target="_blank" class="link-linkedin w-button"></a>
          <a href="https://www.youtube.com/channel/UCiaS-EB1-EhmenfzEU5RPXg" target="_blank" class="link-youtube w-button"></a>
          <a href="https://www.tiktok.com/@vitriumcapital" target="_blank" class="link-tiktok w-button"></a>
        </div>
        <p class="pt-3">
          Vitrium Capital © All rights reserved
        </p>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container-->
</footer>