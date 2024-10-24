    <?php include('inc/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/images/proyectos/01_vila/stylesheet.css?v=2.1"/>
</head>
<body>
    <?php include('gtm2.php'); ?>
    <main id="page_interna_proyecto" class="proyecto_nuevo proyecto_nuevo_niveles lang_esp">

        <?php include('inc/panel_pop_vila.php'); ?>
        <?php include('inc/nav.php'); ?>

        <section id="proyecto_niveles">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="proyecto_niveles_logo">
                            <a href="01vila.php">
                                <img src="assets/images/proyectos/01_vila/logo-color.svg" class="img-fluid d-block mx-auto" alt="01 Vista" />
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="proyecto_breadcrumb">
                            <a href="01vila">01 Vila</a>
                            <span>Planta Subsuelo</span>
                        </div>
                        <h3 class="proyecto_titulo_niveles">
                            Planta <b>Subsuelo</b>
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="planos">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-lg-2">
                        <img src="assets/images/proyectos/01_vila/niveles/plantabaja_l.png" class="img-fluid" />
                    </div>
                    
                    <div class="col-lg-12">
                        <img src="assets/images/proyectos/01_vila/niveles/subsuelo.png" class="img-fluid d-block mx-auto" style="margin-bottom: 20px;" />
                    </div>
                    
                </div>
            </div>
        </section>

        <section id="thumbs_deptos">
            <div class="container">
                <div class="row imagen_nivel_sin_deptos nivel_subsuelo">
                    <div class="col-12">
                        <img src="assets/images/proyectos/01_vila/niveles/subsuelo_texto.png" class="img-fluid d-block mx-auto" />
                    </div>
                </div>
            </div>
        </section>

        <?php include('inc/footer.php'); ?>

    </main>
    <?php include('inc/scripts.php'); ?>

  </body>
</html>