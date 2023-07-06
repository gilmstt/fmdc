<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fundación Mexican del Corazón</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/metisMenu.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css?v=3') ?>">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- header-area start -->
    <header id="top-menu">
        <div class="header-top-area pos-rel pt-10 pb-15 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 offset-xl-2 col-lg-7 text-right">
                        <div class="top-cta">
                            <!-- <span>Welcome To NovoCare. Most Popular Charity Foundation Web Site <a class="media-link" href="#">Sing up</a></span>-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 text-right">
                        <div class="top-right-nav">
                            <ul>
                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="logo">
                            <a class="logo-img" href="index.html"><img src="<?= base_url("assets/img/logo.png") ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 d-none d-lg-block text-lg-center text-xl-right">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="<?= base_url() ?>">Inicio <i></i></a>
                                        <!-- <ul class="submenu">
                                            <li><a href="index.html">Home Style 1</a></li>
                                            <li><a href="index-2.html">Home Style 2</a></li>
                                            <li><a href="index-3.html">Home Style 3</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="#">Prevención <i class="far fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url('Dashboard/viewpadecimientos/conoce_corazon') ?>">Conoce tu corazón</a></li>
                                            <li><a href="<?= base_url('Dashboard/view/factores_riesgo') ?>">Factores de riesgo</a></li>
                                            <li>
                                                <div class="dropdown dropright">
                                                    <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Vida cardiosaludable
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/presion_arterial") ?>">
                                                            Presión arterial
                                                        </a>
                                                        <a class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/dieta") ?>">
                                                            Dieta
                                                        </a>
                                                        <a class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/plato") ?>">
                                                            Plato del Buen Comer
                                                        </a>
                                                        <a class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/plan_alimentacion") ?>">
                                                            Diseño de un Plan de Alimentación
                                                        </a>
                                                        <a class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/alimentacion_adecuada") ?>">
                                                            Alimentación Adecuada
                                                        </a>
                                                        <a class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/beneficios_ejercicio") ?>">
                                                            Benedificos de la Actividad Física y el Ejercicio
                                                        </a>
                                                        <a class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/dejar_fumar") ?>">
                                                            Dejar de Fumar
                                                        </a>
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="dropdown dropright">
                                                    <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Pruebas diagnósticas
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/electrocardiograma') ?>">Electrocardiograma</a>
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/prueba_esfuerzo') ?>">Prueba de Esfuerzo</a>
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/ecocardiograma') ?>">Ecocardiograma</a>
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/cateterismo') ?>">Cateterismo</a>
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/estudio_electrofisiologico') ?>">Estudio Electrofisiológico</a>
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/resonancia_magnetica') ?>">Resonancia Magnética</a>
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/resonancia_nuclear') ?>">Resonancia Nuclear</a>
                                                        <a class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/rayosx') ?>">Rayos X</a>
                                                    </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('Dashboard/view/padecimientos') ?>">Padecimientos</a>
                                    </li>
                                    <li><a>Tratamientos <i class="far fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li>
                                                <div class="dropdown dropright">
                                                    <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Farmacológicos
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a href="<?= base_url('Dashboard/viewfarmaco/tiposdefarmacos') ?>">Tipos de Fármacos</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown dropright">
                                                    <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Quirúrgicos
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a href="<?= base_url('Dashboard/viewquirurgico/marcapasos') ?>">Marcapasos</a>
                                                        <a href="<?= base_url('Dashboard/viewquirurgico/desfibrilador') ?>">Desfibrilador</a>
                                                        <a href="<?= base_url('Dashboard/viewquirurgico/protesis_valvulares') ?>">Prótesis Valvulares</a>
                                                        <a href="<?= base_url('Dashboard/viewquirurgico/asistencias_ventriculares') ?>">Asistencias Ventriculares</a>
                                                        <a href="<?= base_url('Dashboard/viewquirurgico/cirugia') ?>">Cirugía</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown dropright">
                                                    <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Intervencionismo
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a href="<?= base_url('Dashboard/viewintervencionismo/angioplastia/') ?>">Angioplastía</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('Dashboard/abc_corazon') ?>">ABC del corazón</a>
                                    <li><a href="<?= base_url('Dashboard/view/about') ?>">Nosotros</a></li>
                                    <li><a href="<?= base_url('Dashboard/view/cardiopatias_congenitas') ?>">Cardiopatías Congénitas </a></li>
                                    <li><a href="<?= base_url('Dashboard/view/contact') ?>">Contacto </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-6 col-6 text-right">
                        <div class="hamburger-menu d-md-block d-lg-none">
                            <a href="javascript:void(0);">
                                <i class="far fa-bars"></i>
                            </a>
                        </div>
                        <div class="quote-btn d-none d-lg-block">
                            <a href="<?= base_url('Dashboard/donation') ?>" class="theme_btn theme_btn_bg">Donar <span><i class="fas fa-heart"></i></span></a>
                            <button type="button" class="theme_btn theme_btn_bg" data-toggle="modal" data-target="#privacypolicy">
                                Aviso Privacidad
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="social2">
         <a href="<?= ('https://www.facebook.com/fundacionmexicanadelcorazon/') ?>"target="_blank"><img src="<?=base_url("assets/img/social/facebook.png")?>"alt="facebook"> </a>
         <a href="<?= ('https://www.instagram.com/fundacioncoramexico/') ?>" target="_blank"><img src="<?=base_url("assets/img/social/instagram.png")?>" alt="instagram"></a>
        </div>
    
    </header>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                <li><a class="active" href="<?= base_url() ?>">Inicio <i></i></a>
                </li>
                <li><a href="#">Prevención <i class="far fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Dashboard/viewpadecimientos/conoce_corazon') ?>">Conoce tu corazón</a></li>
                        <li><a href="<?= base_url('Dashboard/view/factores_riesgo') ?>">Factores de riesgo</a></li>
                        <li>
                            <div class="dropdown dropright">
                                <a style="color:white" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Vida cardiosaludable
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/presion_arterial") ?>">
                                     Presión arterial
                                    </a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/dieta") ?>">
                                        Dieta
                                    </a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/plato") ?>">
                                        Plato del Buen Comer
                                    </a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/plan_alimentacion") ?>">
                                        Diseño de un Plan de Alimentación
                                    </a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/alimentacion_adecuada") ?>">
                                        Alimentación Adecuada
                                    </a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/beneficios_ejercicio") ?>">
                                        Benedificos de la Actividad Física y el Ejercicio
                                    </a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url("Dashboard/viewfactores/dejar_fumar") ?>">
                                        Dejar de Fumar
                                    </a>
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="dropdown dropright">
                                <a style="color:white" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pruebas diagnósticas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/electrocardiograma') ?>">Electrocardiograma</a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/prueba_esfuerzo') ?>">Prueba de Esfuerzo</a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/ecocardiograma') ?>">Ecocardiograma</a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/cateterismo') ?>">Cateterismo</a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/estudio_electrofisiologico') ?>">Estudio Electrofisiológico</a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/resonancia_magnetica') ?>">Resonancia Magnética</a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/resonancia_nuclear') ?>">Resonancia Nuclear</a>
                                    <a style="color:#cd0044" class="dropdown-item" href="<?= base_url('Dashboard/viewpruebasdiag/rayosx') ?>">Rayos X</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="<?= base_url('Dashboard/view/padecimientos') ?>">Padecimientos</a>
                </li>
                <li><a href="#">Tratamientos <i class="far fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li>
                            <div class="dropdown dropright">
                                <a style="color:white" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Farmacológicos
                                </a>
                                <div style="color:#cd0044" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a href="<?= base_url('Dashboard/viewfarmaco/tiposdefarmacos') ?>">Tipos de Fármacos</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown dropright">
                                <a style="color:white" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Quirúrgicos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a style="color:#cd0044" href="<?= base_url('Dashboard/viewquirurgico/marcapasos') ?>">Marcapasos</a>
                                    <a style="color:#cd0044" href="<?= base_url('Dashboard/viewquirurgico/desfibrilador') ?>">Desfibrilador</a>
                                    <a style="color:#cd0044" href="<?= base_url('Dashboard/viewquirurgico/protesis_valvulares') ?>">Prótesis Valvulares</a>
                                    <a style="color:#cd0044" href="<?= base_url('Dashboard/viewquirurgico/asistencias_ventriculares') ?>">Asistencias Ventriculares</a>
                                    <a style="color:#cd0044" href="<?= base_url('Dashboard/viewquirurgico/cirugia') ?>">Cirugía</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown dropright">
                                <a style="color:white" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Intervencionismo
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a style="color:#cd0044" href="<?= base_url('Dashboard/viewintervencionismo/angioplastia/') ?>">Angioplastía</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="<?= base_url('Dashboard/abc_corazon') ?>">ABC del corazón</a>
                <li><a href="<?= base_url('Dashboard/view/about') ?>">Nosotros</a></li>
                <li><a href="<?= base_url('Dashboard/view/cardiopatias_congenitas') ?>">Cardiopatías Congénitas </a></li>
                <li><a href="<?= base_url('Dashboard/view/contact') ?>">Contacto </a></li>
                <li><a href="<?= base_url('Dashboard/donat)ion') ?>">Donar </a></li>
                <li><a style="color:white" data-toggle="modal" data-target="#privacypolicy">Aviso de privacidad </a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->
    <!-- The Modal -->
    <div class="modal" id="privacypolicy">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Aviso de Privacidad</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div style="text-align: justify" ;>
                        <p>
                            Conforme al Artículo 3, párrafo V, de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (en adelante la Ley ), se consideran datos personales cualquier información concerniente a una persona física identificada o identificable (en adelante Titular), por ejemplo, su nombre, teléfono, domicilio, fotografía o huellas dactilares y cualquier otro dato que pueda servir para identificarle.
                            <br>Así, en cumplimiento con la Ley, la FUNDACIÓN MEXICANA DEL CORAZÓN A.C., como responsable de recabar los datos
                            <br>personales del Titular, su manejo y protección, hace de su conocimiento, como usuario del sitio <a href="https://fundacionmexicanadelcorazon.org/" target="_blank" style="color: red">https://fundacionmexicanadelcorazon.org/</a>, el siguiente:
                        <h1 style="text-align: center"><br>Aviso de Privacidad</h1>
                        <br>Los datos personales que la FUNDACIÓN MEXICANA DEL CORAZÓN A.C. obtiene son generales, no sensibles y utilizados con el objeto de cumplir con las obligaciones que se derivan, de la relación jurídica que pudieran vincularlo con la FUNDACIÓN MEXICANA DEL CORAZÓN A.C., relativas a la investigación científica que realiza, a los servicios de asistencia que proporciona o a la educación en salud que brinda, o para dar cumplimiento a su obligaciones fiscales, en su carácter de donataria autorizada. En ese sentido, la FUNDACIÓN MEXICANA DEL CORAZÓN A.C., con domicilio en Juan Badiano 1, Belisario Domínguez Secc 16, Tlalpan, 14080 Ciudad de México, CDMX, solicitará su consentimiento previo, respecto del tratamiento de los datos personales.
                        <br>Usted, al proporcionar sus datos personales, confirma y acepta que ha leído este Aviso de Privacidad y otorga su consentimiento para ajustarse a lo señalado en el mismo. Los datos personales se encontrarán debidamente protegidos a través de medidas de seguridad tecnológica, física y administrativa, para evitar el uso y tratamiento indebido de los mismos. Cabe señalar que no utilizamos cookies, web beacons o algún otro programa informático para recabar datos personales a través del sitio web o redes sociales. En ningún caso la FUNDACIÓN MEXICANA DEL CORAZÓN A.C transferirá, comercializará, venderá o rentará información personal sin consentimiento previo de su parte.
                        <br>El Titular por si o mediante representante legal debidamente acreditado, tiene los siguientes derechos respecto a sus datos personales:
                        <br><b>A</b>.- Acceder a sus datos personales que posee la Fundación Mexicana del Corazón A.C. y a los detalles del tratamiento de los mismos.
                        <br><b>R</b>.- Rectificarlos en caso de ser inexactos o incompletos.
                        <br><b>C</b>.- Cancelarlos cuando considere que no se requieren para alguna de las finalidades señaladas en el presente aviso de privacidad y estén siendo utilizados para finalidades no consentidas o haya finalizado la relación contractual o de servicio.
                        <br><b>O</b>.- Oponerse al tratamiento de estos, para fines específicos.
                        <br>Con el propósito de ejercer los derechos arriba citados, el Titular podrá acudir al domicilio de la Fundación Mexicana del Corazón A.C., o mediante el envío su solicitud por al correo derechosarco@fundacionmexicanadelcorazon.org, anexando la información solicitada en los incisos i, ii, iii,. Toda solicitud se tramitará conforme a los lineamientos para ejercer los derechos ARCO, emitidos conforme a la Ley
                        <br>i. El nombre del titular y domicilio u otro medio para comunicarle la respuesta a su solicitud;
                        <br><br>ii. Los documentos que acrediten la identidad o, en su caso, la representación legal del titular; y
                        <br><br>iii. La descripción clara y precisa de los datos personales respecto de los que se busca ejercer alguno de los derechos antes mencionados. De acuerdo con la Ley, La Fundación Mexicana del Corazón A.C., responderá las solicitudes en un término de 20 días, prorrogables según el caso.
                        <br>La Fundación Mexicana del Corazón, A.C. se reserva el derecho de cambiar, complementar y/o modificar el presente aviso, en cuyo caso se hará de su conocimiento a través del sitio <a href="https://fundacionmexicanadelcorazon.org/" target="_blank" style="color: red"> https://fundacionmexicanadelcorazon.org/</a>

                        </p>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>