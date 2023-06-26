<main>
   <!--slider-area start-->
   <div class="slider-area pos-rel">
      <div class="slider-active">
         <div class="single-slider slider-height pos-rel d-flex align-items-center" style="background-image: url(assets/img/eventos.png);">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8">
                     <div class="slider__content text-left">
                        <h5 class="sub-title mb-25 wow fadeInUp2 animated" data-wow-delay=".1s">
                           <span class="pr-10"><i class="fas fa-heart"></i></span>
                           Todos los eventos
                        </h5>
                        <h1 class="main-title mb-35 wow fadeInUp2 animated" data-wow-delay=".1s">
                           Nuestras actividades
                        </h1>
                        <ul class="btn-list wow fadeInUp2 animated" data-wow-delay=".3s">
                           <li><a class="theme_btn theme_btn_bg" href="<?= base_url("Dashboard/view/eventos.php"); ?>">Ver <span><i class="fas fa-heart"></i></span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-slider slider-height pos-rel d-flex align-items-center" style="background-image: url(assets/img/slider/corazonyciencia.png);">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8">
                     <div class="slider__content text-left">
                        <h5 class="sub-title mb-25 wow fadeInUp2 animated" data-wow-delay=".1s"><span class="pr-10"><i class="fas fa-heart"></i></span>Artículos científicos</h5>
                        <h1 class="main-title mb-35 wow fadeInUp2 animated" data-wow-delay=".2s">
                           Corazón y ciencia
                        </h1>
                        <ul class="btn-list wow fadeInUp2 animated" data-wow-delay=".3s">
                           <li>
                              <a class="theme_btn theme_btn_bg" href="<?= base_url("Dashboard/ciencia/corazon_y_ciencia"); ?>">Ver<span><i class="fas fa-heart"></i></span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-slider slider-height pos-rel d-flex align-items-center" style="background-image: url(assets/img/slider/collage.jpg);">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8">
                     <div class="slider__content text-left">
                        <ul class="btn-list wow fadeInUp2 animated" data-wow-delay=".3s">
                           <li><a class="theme_btn theme_btn_bg" href="<?= base_url("Dashboard/post/5") ?>">Eventos 2023 <span><i class="fas fa-heart"></i></span></a>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--slider-area end-->
   <style>
      .posts-header {
         padding-bottom: 130px;
      }

      @media only screen and (max-width: 780px) {
         .services {
            margin-bottom: 7rem !important;
         }

         .services__content {
            bottom: -6rem
         }

         .services__content li .more_btn::before {
            width: 50px;
         }

         .services__content li .more_btn i {
            padding-right: .5rem;

         }

         .text-lg-sm {
            font-size: 17px
         }

         .pr-55 {
            padding-right: 15px;
         }

         .pl-55 {
            padding-left: 15px;
         }

         .posts-header {
            padding-bottom: 0px;
         }
      }

      @media only screen and (min-width: 1200px) {
         .services__content {
            bottom: unset;
         }

         .services__content li:first-child {
            padding-left: 20px;
         }

         .fs-20 {
            font-size: 20px
         }

         .events-video-area {
            min-height: 586px !important
         }

         .events-video-area2 {
            min-height: 300px !important
         }

      }
   </style>
   <!--services-area start-->
   <section class="services-area grey-bg2 posts-header">
      <div class="container custom-container-02">
         <div class="services-bg white-bg pos-rel pt-30 pr-30 pl-30">
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                  <div class="services pos-rel mb-30">
                     <div class="services__img">
                        <img src="assets/img/blog/blog1.jpg" alt="">
                     </div>
                     <ul class="services__content heding-bg pos-abl">
                        <li>
                           <h4 class="semi-02-title"><a>¿EL CORAZÓN SIENTE?</a></h4>
                        </li>
                        <li><a class="more_btn" href="<?= base_url("Dashboard/post/5") ?>"><i class="far fa-arrow-right"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="services pos-rel mb-30">
                     <div class="services__img">
                        <img src="assets/img/blog/blog2.jpg" alt="">
                     </div>
                     <ul class="services__content heding-bg pos-abl">
                        <li>
                           <h4 class="semi-02-title"><a>VENTAJAS DE CONSUMIR</a></h4>
                           <p>OMEGA 3</p>
                        </li>
                        <li><a class="more_btn" href="<?= base_url("Dashboard/post/8") ?>"><i class="far fa-arrow-right"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.7s'>
                  <div class="services pos-rel mb-30">
                     <div class="services__img">
                        <img src="assets/img/blog/blog3.jpg" alt="">
                     </div>
                     <ul class="services__content heding-bg pos-abl">
                        <li>
                           <h4 class="semi-02-title fs-10"><a class="text-lg-sm">
                                 ¿LOS HOMBRES TIENEN MÁS RIESGO DE MORIR DE UNA ENFERMEDAD CARDIOVASCULAR?

                              </a></h4>
                           <p></p>
                        </li>
                        <li><a class="more_btn" href="<?= base_url("Dashboard/post/10") ?>"><i class="far fa-arrow-right"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--services-area end-->
   <!--counter-area start-->
   <section class="counter-area theme-bg pt-130 pb-60">
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mb-30">
               <div class="counetrs text-center wow fadeInUp2 animated" data-wow-delay='.1s'>
                  <div class="counetrs__icon mb-20"><i class="flaticon-charity"></i></div>
                  <h1><span class="counter">19</span></h1>
                  <p>Años</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mb-30">
               <div class="counetrs text-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                  <div class="counetrs__icon mb-20"><i class="flaticon-community"></i></div>
                  <h1><span class="counter">452</span></h1>
                  <p>Miembros</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mb-30">
               <div class="counetrs text-center wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="counetrs__icon mb-20"><i class="flaticon-social-care"></i></div>
                  <h1><span class="counter">854</span></h1>
                  <p>Pacientes</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mb-30">
               <div class="counetrs text-center wow fadeInUp2 animated" data-wow-delay='.7s'>
                  <div class="counetrs__icon mb-20"><i class="flaticon-donation"></i></div>
                  <h1><span class="counter">561</span></h1>
                  <p>Donatarios</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--counter-area end-->
   <!--events-area start-->
   <section class="events-area events-style-1 pt-70 pb-70">
      <div class="container-fluid pl-55 pr-55">
         <div class="row no-gutters ">
            <div class="col-xl-6 col-lg-12 col-md-12">
               <div class="events-video-area pos-rel mb-30" style="background-image: url(assets/img/events/Insuficiencia_cardiaca.jpg)">
               </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 pr-70">
               <div class="events-wrapper grey-bg2 mb-30">
                  <div class="events active pos-rel wow fadeInUp2 animated" data-wow-delay='.3s'>
                     <div class="events__back" style="background-image: url(assets/img/events/drjesus.png);"></div>
                     <ul class="events__list__one align-items-center justify-content-between pl-50 pr-50">
                        <li>
                           <div class="events__content">
                              <span><i class="far fa-calendar-alt"></i> 24 junio 2023</span>
                              <h3 class="mb-15"><a href="events-details.html">Ver evento en facebook</a></h3>
                              <p></p>
                           </div>
                        </li>
                        <li>
                           <div class="events__btn text-md-center text-xl-right">
                              <a class="theme_btn theme_btn_bg" href="https://fb.watch/lpC2ct18YR/" target="_blank">Ver evento <span><i class="fas fa-heart"></i></span></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <!-- <div class="events pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                     <div class="events__back" style="background-image: url(assets/img/slider/omron.png);"></div>
                     <ul class="events__list__one align-items-center justify-content-between pl-50 pr-50">
                        <li>
                           <div class="events__content">
                              <span><i class="far fa-calendar-alt"></i> 13 junio 2023</span>
                              <h3 class="mb-15"><a href="events-details.html">OMRON.</a></h3>
                              <p>Colaboración Fundación Mexicana del Corazón y OMRON.e</p>
                           </div>
                        </li>
                        <li>
                           <div class="events__btn text-md-center text-xl-right">
                              <a class="theme_btn theme_btn_bg" href="events-details.html">Ver evento <span><i class="fas fa-heart"></i></span></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="events pos-rel wow fadeInUp2 animated" data-wow-delay='.7s'> -->
                  <!-- <div class="events__back" style="background-image: url(https://scontent.fgdl5-1.fna.fbcdn.net/v/t1.6435-9/89540822_2526570850805124_109508282929905664_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_ohc=6igxmHjAJGAAX-SYgyY&_nc_ht=scontent.fgdl5-1.fna&oh=00_AfDPRq4A1ov3mbPwq9XwkyApvFyxCiMtXsaikJcndDUNaQ&oe=6457FD31);"></div>
                     <ul class="events__list__one align-items-center justify-content-between pl-50 pr-50">
                        <li>
                           <div class="events__content">
                              <span><i class="far fa-calendar-alt"></i> 13 junio 2023</span>
                              <h3 class="mb-15"><a href="events-details.html">Dr. Enrique López Mora</a></h3>
                              <p>Participación del Doctor Enrique López en el Encuentro de pacientes y familiares promovido por la Fundación Mexicana del Corazón.</p>
                           </div>
                        </li>
                        <li>
                           <div class="events__btn text-md-center text-xl-right">
                              <a class="theme_btn theme_btn_bg" href="events-details.html">Ver evento <span><i class="fas fa-heart"></i></span></a>
                           </div>
                        </li>
                     </ul>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <div class="events__btn text-md-center text-xl-center">
         <a class="theme_btn theme_btn_bg" href="<?= base_url('Dashboard/view/actividades-index') ?>">Eventos<span><i class="fas fa-heart"></i></span></a>
      </div>
   </section>
   <!-- sponsors area
   <section class=" pb-110">
            <div class="container">
                <div class="subscribe-bg">
                    <div class="row  theme-bg align-items-center pt-50 pb-50 pr-55">
                     <img src="assets/img/testimonial/sponsor2023.png">
                       
                    </div>
                </div>
            </div>
        </section>
    sponsors area termina-->
   <!--testimonial-area start-->
   <section class="testimonial-area grey-bg2 pos-rel pt-130 pb-130">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 offset-xl-3">
               <div class="section-title text-center mb-35">
                  <h6><span><i class="fas fa-heart"></i></span> Aliados</h6>
               </div>
            </div>
         </div>
         <div class="row testimonial-active-04">
            <!-- Omron video -->
            <div class="col-xl-6 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__img mr-15">
                        <img src="assets/img/testimonial/02.png" alt="">
                     </div>
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Omron</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/events/drjesus.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://fundacionmexicanadelcorazon.org/wp-content/uploads/2022/05/ANUNCIO-FIRMA-2-MASTER-LARGO-H.264-for-Video-Podcasting.m4v" class="popup-video"><i class="fas fa-play"></i></a>
                     </div>
                  </div>
                  <p class="semi-title mb-10"></p>
                  <div class="review-icon">
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                  </div>
               </div>
            </div>
            <!-- ABC video-->
            <div class="col-xl-6 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__img mr-15">
                        <img src="assets/img/testimonial/02.png" alt="">
                     </div>
                     <div class="author_box__content">
                        <h4 class="semi-02-title">ABC</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/events/drjesus.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://fundacionmexicanadelcorazon.org/wp-content/uploads/2022/05/ANUNCIO-FIRMA-2-MASTER-LARGO-H.264-for-Video-Podcasting.m4v" class="popup-video"><i class="fas fa-play"></i></a>
                     </div>
                  </div>
                  <p class="semi-title mb-10"></p>
                  <div class="review-icon">
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--testimonial-area end-->
   <!--cta-area start-->
   <section class="cta-area theme-bg2 pt-50 pb-50">
      <div class="container">
         <div class="row align-items-center">
            <img src="assets/img/testimonial/sponsor2023.png" style="width: 100%;">

         </div>
      </div>
   </section>
   <!--cta-area end-->
   <!--testimonial-area start-->
   <section class="testimonial-area grey-bg2 pos-rel pt-130 pb-130">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 offset-xl-3">
               <div class="section-title text-center mb-35">
                  <h6><span><i class="fas fa-heart"></i></span> Testimonios</h6>
               </div>
            </div>
         </div>
         <div class="row testimonial-active-04">
            <!-- Marcapasos/doctora video -->
            <div class="col-xl-4 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__img mr-15">
                        <img src="assets/img/testimonial/1.jpg" alt="">
                     </div>
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Dra. Balderrama</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/events/drjesus.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://fundacionmexicanadelcorazon.org/wp-content/uploads/2022/05/ANUNCIO-FIRMA-2-MASTER-LARGO-H.264-for-Video-Podcasting.m4v" class="popup-video"><i class="fas fa-play"></i></a>
                     </div>
                  </div>
                  <p class="semi-title mb-10"></p>
                  <div class="review-icon">
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                  </div>
                  <p style="text-align: justify">
                     Quiero compartir con ustedes la historia de mi mamá y su increíble transformación; hace algún tiempo, ella comenzó a experimentar dificultad para respirar, mareos y fatiga.
                  </p>
                  <a class="theme_btn theme_btn_bg" href="<?= base_url('assets/img/testimonial/testimonio.pdf') ?>" target="_blank">Ver mas<span><i class="fas fa-heart"></i></span></a>
               </div>
            </div>
            <!-- María video-->
            <div class="col-xl-4 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__img mr-15">
                        <img src="assets/img/testimonial/02.png" alt="">
                     </div>
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Sra. María</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/events/drjesus.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://fundacionmexicanadelcorazon.org/wp-content/uploads/2022/05/ANUNCIO-FIRMA-2-MASTER-LARGO-H.264-for-Video-Podcasting.m4v" class="popup-video"><i class="fas fa-play"></i></a>
                     </div>
                  </div>
                  <p class="semi-title mb-10"></p>
                  <div class="review-icon">
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                  </div>
               </div>
            </div>
            <!-- Hector Video -->
            <div class="col-xl-4 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__img mr-15">
                        <img src="assets/img/testimonial/02.png" alt="">
                     </div>
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Sr. Hector</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/events/drjesus.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://fundacionmexicanadelcorazon.org/wp-content/uploads/2022/05/ANUNCIO-FIRMA-2-MASTER-LARGO-H.264-for-Video-Podcasting.m4v" class="popup-video"><i class="fas fa-play"></i></a>
                     </div>
                  </div>
                  <p class="semi-title mb-10"></p>
                  <div class="review-icon">
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--testimonial-area end-->
   <!--events-area end-->
   <!--about-us-area start-->
   <!-- <section class="about-area grey-bg2 pos-rel pb-100">
      <div class="right-shape">
         <img src="assets/img/shape/01.png" alt="">
      </div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12">
               <div class="about-img mb-60 pos-rel">
                  <div class="about-img__thumb pr-45 wow fadeInUp2 animated" data-wow-delay='.1s'>
                     <img src="assets/img/about/01.jpg" alt="">
                  </div>
                  <div class="experience-box heding-bg wow fadeInUp2 animated" data-wow-delay='.3s'>
                     <h1>25</h1>
                     <h4 class="semi-02-title">Years
                        Experience</h4>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
               <div class="about-wrapper mb-30">
                  <div class="section-title text-left mb-20 wow fadeInUp2 animated" data-wow-delay='.1s'>
                     <h6><span><i class="fas fa-heart"></i></span> About EnaCare</h6>
                     <h2>Challenge 264 Million
                        Children Go to Schools</h2>
                  </div>
                  <p>Sed perspiciatis unde omnis iste natus error sit voluptatem accntium doloremque laudantium totam
                     rem aperiam eaque ipsa quailinve ntore veritatis et quasi architecto beatae vitae dicta sunt</p>
                  <ul class="about_list mt-30 mb-20 wow fadeInUp2 animated" data-wow-delay='.2s'>
                     <li>Quis autem vel eum iure reprehenderit qui in ea voluptate esse
                        quam nihil molestiae consequatur vel illum dolorem</li>
                     <li>Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
                        pain because occasionally</li>
                  </ul>
                  <a class="theme_btn theme_btn_bg" href="about.html">Learn more <span><i
                           class="fas fa-heart"></i></span></a>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--about-us-area end-->
   <!--cta-area start-->
   <!--<section class="cta-area theme-bg2 pb-50 pt-50">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8 col-md-8">
               <div class="cta-wrapper pl-100">
                  <h2>Únete a nuestro equipo de <a href="volunteer.html">voluntarios</a></h2>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
               <div class="cta-btn">
                  <a class="theme_btn theme_btn_bg" href="#">Ver más <span><i class="fas fa-heart"></i></span></a>
               </div>
            </div>
         </div>
      </div>
   </section>-->
   <!--cta-area end-->
   <!--cases-area start-->
   <!-- <section class="cases-area pt-130 pb-100">
      <div class="container">
         <div class="row">
            <div class="col-xl-10 offset-xl-1">
               <div class="section-title text-center mb-75 pl-50 pr-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                  <h6><span><i class="fas fa-heart"></i></span> Popular Cases</h6>
                  <h2>Donate Our Popular Charity Causes
                     Around The World</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="cases grey-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                  <div class="cases__box pos-rel">
                     <div class="cases__box--img">
                        <img src="assets/img/cases/01.jpg" alt="">
                     </div>
                     <ul class="cases__tag white-bg">
                        <li>
                           <div class="cases--author d-flex align-items-center">
                              <img src="assets/img/cases/04.png" alt="">
                              <h4 class="semi-02-title ml-15">Somalia</h4>
                           </div>
                        </li>
                        <li>
                           <a class="theme_btn theme_btn_bg d-btn" href="donation.html">Donate</a>
                        </li>
                     </ul>
                  </div>
                  <div class="cases__content">
                     <div class="cases-progress mb-25">
                        <p class="funding">Raised <span>$8420</span></p>
                        <div class="progress">
                           <div class="progress-bar wow fadeInLeft animated" data-wow-delay="0.3s" role="progressbar"
                              style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <h5>95%</h5>
                           </div>
                        </div>
                     </div>
                     <h3><a href="donation.html">Donate Your Mind For The
                           Homeless Children</a></h3>
                     <p>Sed perspiciat unde omnis iste natus
                        error voluptatem accntiume</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="cases grey-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="cases__box pos-rel">
                     <div class="cases__box--img">
                        <img src="assets/img/cases/02.jpg" alt="">
                     </div>
                     <ul class="cases__tag white-bg">
                        <li>
                           <div class="cases--author d-flex align-items-center">
                              <img src="assets/img/cases/04.png" alt="">
                              <h4 class="semi-02-title ml-15">Somalia</h4>
                           </div>
                        </li>
                        <li>
                           <a class="theme_btn theme_btn_bg d-btn" href="donation.html">Donate</a>
                        </li>
                     </ul>
                  </div>
                  <div class="cases__content">
                     <div class="cases-progress mb-25">
                        <p class="funding">Raised <span>$8420</span></p>
                        <div class="progress">
                           <div class="progress-bar wow fadeInLeft animated" data-wow-delay="0.5s" role="progressbar"
                              style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <h5>78%</h5>
                           </div>
                        </div>
                     </div>
                     <h3><a href="donation.html">Give Your Assets For The
                           Homeless Children</a></h3>
                     <p>Sed perspiciat unde omnis iste natus
                        error voluptatem accntiume</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="cases grey-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.7s'>
                  <div class="cases__box pos-rel">
                     <div class="cases__box--img">
                        <img src="assets/img/cases/03.jpg" alt="">
                     </div>
                     <ul class="cases__tag white-bg">
                        <li>
                           <div class="cases--author d-flex align-items-center">
                              <img src="assets/img/cases/04.png" alt="">
                              <h4 class="semi-02-title ml-15">Somalia</h4>
                           </div>
                        </li>
                        <li>
                           <a class="theme_btn theme_btn_bg d-btn" href="donation.html">Donate</a>
                        </li>
                     </ul>
                  </div>
                  <div class="cases__content">
                     <div class="cases-progress mb-25">
                        <p class="funding">Raised <span>$8420</span></p>
                        <div class="progress">
                           <div class="progress-bar wow fadeInLeft animated" data-wow-delay="0.7s" role="progressbar"
                              style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <h5>87%</h5>
                           </div>
                        </div>
                     </div>
                     <h3><a href="donation.html">Spent Your Money For The
                           Homeless Children</a></h3>
                     <p>Sed perspiciat unde omnis iste natus
                        error voluptatem accntiume</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--cases-area end-->

   <!--team-area start-->
   <!-- <section class="team-area pt-125 pb-100 pos-rel" style="background-image: url(assets/img/bg/01.jpg);">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 offset-xl-2">
               <div class="section-title white-title text-center mb-75 pl-50 pr-50 wow fadeInUp2 animated"
                  data-wow-delay='.1s'>
                  <h6><span><i class="fas fa-heart"></i></span> Team Member</h6>
                  <h2>We Have A Big Team of
                     Expert Volunteer</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay='.3s'>
               <div class="team white-bg clearfix fix pos-rel">
                  <div class="team__thumb f-left mr-40">
                     <img src="assets/img/team/01.png" alt="">
                  </div>
                  <div class="team__content pos-rel mt-25">
                     <h3><a href="team-details.html">David Salika Warner</a></h3>
                     <p>Web Developer</p>
                     <div class="team__content--social">
                        <a href="#">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-linkedin"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay='.5s'>
               <div class="team white-bg clearfix fix pos-rel">
                  <div class="team__thumb f-left mr-40">
                     <img src="assets/img/team/02.png" alt="">
                  </div>
                  <div class="team__content pos-rel mt-25">
                     <h3><a href="team-details.html">Michel Fokluz Huta</a></h3>
                     <p>Ui/Ux Designer</p>
                     <div class="team__content--social">
                        <a href="#">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-linkedin"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay='.5s'>
               <div class="team white-bg clearfix fix pos-rel">
                  <div class="team__thumb f-left mr-40">
                     <img src="assets/img/team/03.png" alt="">
                  </div>
                  <div class="team__content pos-rel mt-25">
                     <h3><a href="team-details.html">Nicolas Almeida Lima</a></h3>
                     <p>PHP Developer</p>
                     <div class="team__content--social">
                        <a href="#">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-linkedin"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay='.7s'>
               <div class="team white-bg clearfix fix pos-rel">
                  <div class="team__thumb f-left mr-40">
                     <img src="assets/img/team/04.png" alt="">
                  </div>
                  <div class="team__content pos-rel mt-25">
                     <h3><a href="team-details.html">Ryan Goncalves Alves</a></h3>
                     <p>Web Designer</p>
                     <div class="team__content--social">
                        <a href="#">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-linkedin"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--team-area end-->
   <!--gallery-area start-->
   <!-- <section class="gallery-area pt-130 pb-100">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 offset-xl-2">
               <div class="section-title text-center mb-85 pl-50 pr-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                  <h6><span><i class="fas fa-heart"></i></span> Photo Gallery</h6>
                  <h2>Our Global Awards Winning
                     Photo Gallery</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="gallery pos-rel text-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="gallery__thumb pos-rel mb-30">
                           <img src="assets/img/gallery/01.jpg" alt="">
                        </div>
                        <div class="gallery__content">
                           <a class="popup-image" href="assets/img/gallery/01.jpg"><i class="far fa-plus"></i></a>
                           <h3><a href="gallery-2.html">Hungry Children</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="gallery pos-rel text-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="gallery__thumb pos-rel mb-30">
                           <img src="assets/img/gallery/02.jpg" alt="">
                        </div>
                        <div class="gallery__content">
                           <a class="popup-image" href="assets/img/gallery/01.jpg"><i class="far fa-plus"></i></a>
                           <h3><a href="gallery-2.html">Hungry Children</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="gallery pos-rel text-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="gallery__thumb pos-rel mb-30">
                           <img src="assets/img/gallery/03.jpg" alt="">
                        </div>
                        <div class="gallery__content">
                           <a class="popup-image" href="assets/img/gallery/01.jpg"><i class="far fa-plus"></i></a>
                           <h3><a href="gallery-2.html">Hungry Children</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="gallery pos-rel text-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="gallery__thumb pos-rel mb-30">
                           <img src="assets/img/gallery/04.jpg" alt="">
                        </div>
                        <div class="gallery__content">
                           <a class="popup-image" href="assets/img/gallery/01.jpg"><i class="far fa-plus"></i></a>
                           <h3><a href="gallery-2.html">Hungry Children</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
               <div class="gallery pos-rel text-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                  <div class="gallery__thumb pos-rel mb-30">
                     <img src="assets/img/gallery/03.jpg" alt="">
                  </div>
                  <div class="gallery__content">
                     <a class="popup-image" href="assets/img/gallery/01.jpg"><i class="far fa-plus"></i></a>
                     <h3><a href="gallery-2.html">Hungry Children</a></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--gallery-area end-->

   <!--testimonial-area start-->
   <!-- <section class="testimonial-area grey-bg2 pos-rel pt-130 pb-130">
      <div class="container">
         <div class="row">
            <div class="col-xl-4">
               <div class="testimonial-text-wrapper wow fadeInUp2 animated mb-30" data-wow-delay='.1s'>
                  <div class="section-title text-left mb-35">
                     <h6><span><i class="fas fa-heart"></i></span> Clients Feedback</h6>
                     <h2>What Our Clients
                        Say About Us</h2>
                  </div>
                  <p>Sed perspiciatis unde omnis iste natus error sit
                     atem accntium doloremque laudantium taperem
                     eaque ipsa quailinve ntore veritatis</p>
                  <a class="theme_btn theme_btn_bg" href="#">View More <span><i class="fas fa-heart"></i></span></a>
               </div>
            </div>
            <div class="col-xl-8 testimonial-wrapper">
               <div class="row testimonial-active">
                  <div class="col-xl-6">
                     <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="author_box d-flex align-items-center mb-25">
                           <div class="author_box__img mr-15">
                              <img src="assets/img/testimonial/01.png" alt="">
                           </div>
                           <div class="author_box__content">
                              <h4 class="semi-02-title">David Warner</h4>
                              <p>Senior Web Developer</p>
                           </div>
                        </div>
                        <p class="semi-title mb-10">But I must explain to you how all this mistaken idea of denouncing
                           pleasure and praising pain was born and I will give you a complete account of the system and
                           expound the actual teings of the great explorer of the truth the master-builder of human </p>
                        <div class="review-icon">
                           <span>Most Trusted</span>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="author_box d-flex align-items-center mb-25">
                           <div class="author_box__img mr-15">
                              <img src="assets/img/testimonial/02.png" alt="">
                           </div>
                           <div class="author_box__content">
                              <h4 class="semi-02-title">David Warner</h4>
                              <p>Senior Web Developer</p>
                           </div>
                        </div>
                        <p class="semi-title mb-10">But I must explain to you how all this mistaken idea of denouncing
                           pleasure and praising pain was born and I will give you a complete account of the system and
                           expound the actual teings of the great explorer of the truth the master-builder of human </p>
                        <div class="review-icon">
                           <span>Most Trusted</span>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="author_box d-flex align-items-center mb-25">
                           <div class="author_box__img mr-15">
                              <img src="assets/img/testimonial/01.png" alt="">
                           </div>
                           <div class="author_box__content">
                              <h4 class="semi-02-title">David Warner</h4>
                              <p>Senior Web Developer</p>
                           </div>
                        </div>
                        <p class="semi-title mb-10">But I must explain to you how all this mistaken idea of denouncing
                           pleasure and praising pain was born and I will give you a complete account of the system and
                           expound the actual teings of the great explorer of the truth the master-builder of human </p>
                        <div class="review-icon">
                           <span>Most Trusted</span>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="author_box d-flex align-items-center mb-25">
                           <div class="author_box__img mr-15">
                              <img src="assets/img/testimonial/02.png" alt="">
                           </div>
                           <div class="author_box__content">
                              <h4 class="semi-02-title">David Warner</h4>
                              <p>Senior Web Developer</p>
                           </div>
                        </div>
                        <p class="semi-title mb-10">But I must explain to you how all this mistaken idea of denouncing
                           pleasure and praising pain was born and I will give you a complete account of the system and
                           expound the actual teings of the great explorer of the truth the master-builder of human </p>
                        <div class="review-icon">
                           <span>Most Trusted</span>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                           <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--testimonial-area end-->
   <!--donation-area start-->
   <section class="donation-area pos-rel pt-125 pb-90" style="background-image: url(assets/img/events/evento2.jpg);">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 col-md-12">
               <div class="donation-wrapper">
                  <div class="section-title white-title text-left mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                     <h6><span><i class="fas fa-heart"></i></span> Unete a nosotros</h6>
                     <h2>Listo para donar a nuestros miles de pacientes ?</h2>
                  </div>
               </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12">
               <div class="donation-input text-lg-right mb-30">
                  <ul class="btn-list text-md-center d-sm-inline-flex align-items-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                     <li>
                        <div class="donate-cart mr-15 pos-rel mb-10">
                           <form class="donate-btn pos-rel" action="form.php">
                              <input type="text" value="$5">
                           </form>
                           <div class="plus-minus">
                              <div class="cart inc"><i class="far fa-chevron-left"></i></div>
                              <div class="cart dec"><i class="far fa-chevron-right"></i></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a class="theme_btn theme_btn_bg" href="<?= base_url('Dashboard/donation') ?>">Donar ahora <span><i class="fas fa-heart"></i></span></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--donation-area end-->
   <!--blog-area start-->
   <!--   <section class="blog-area pt-130 pb-100">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 offset-xl-3">
               <div class="section-title text-center mb-85  wow fadeInUp2 animated" data-wow-delay='.1s'>
                  <h6><span><i class="fas fa-heart"></i></span> Eventos</h6>
                  <h2>Eventos Recientes</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
               <div class="blog mb-30">
                  <div class="blog__thumb mb-40">
                     <img src="assets/img/blog/01.png" alt="">
                  </div>
                  <div class="blog__content">
                     <a class="tag" href="blog-details.html">volunteer</a>
                     <h3 class="blog-title mb-15"><a href="blog-details.html">Experts Global Digital During
                           Developments COVID-19</a></h3>
                     <p class="mb-25">Sed perspiciatis unde omnis iste natus error sit
                        atem accntium doloremque laudantium</p>
                     <ul class="blog-author">
                        <li><a class="mr-30" href="#"><img src="assets/img/blog/04.png" alt="">
                              <span>Louis K. Lopez</span></a></li>
                        <li>
                           <i class="far fa-calendar-alt"></i> 25 Dec 2020
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.5s'>
               <div class="blog mb-30">
                  <div class="blog__thumb mb-40">
                     <img src="assets/img/blog/02.png" alt="">
                  </div>
                  <div class="blog__content">
                     <a class="tag" href="blog-details.html">refugee</a>
                     <h3 class="blog-title mb-15"><a href="blog-details.html">Creating To Continuous Test Workflow Using
                           GitHub</a></h3>
                     <p class="mb-25">Sed perspiciatis unde omnis iste natus error sit
                        atem accntium doloremque laudantium</p>
                     <ul class="blog-author">
                        <li><a class="mr-30" href="#"><img src="assets/img/blog/05.png" alt="">
                              <span>Raymond Silva</span></a></li>
                        <li>
                           <i class="far fa-calendar-alt"></i> 25 Dec 2020
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.7s'>
               <div class="blog mb-30">
                  <div class="blog__thumb mb-40">
                     <img src="assets/img/blog/03.png" alt="">
                  </div>
                  <div class="blog__content">
                     <a class="tag" href="blog-details.html">volunteer</a>
                     <h3 class="blog-title mb-15"><a href="blog-details.html">Standardizing And Beyond The Past Present
                           And Future Native</a></h3>
                     <p class="mb-25">Sed perspiciatis unde omnis iste natus error sit
                        atem accntium doloremque laudantium</p>
                     <ul class="blog-author">
                        <li><a class="mr-30" href="#"><img src="assets/img/blog/06.png" alt="">
                              <span>Daren S. Kappy</span></a></li>
                        <li>
                           <i class="far fa-calendar-alt"></i> 25 Dec 2020
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--blog-area end-->
   <!--brand-area start-->
   <!-- <section class="brand-area grey-bg2 pt-70">
      <div class="container custom-container-03">
         <div class="row brand-active pb-60">
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.1s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/01.png" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.3s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/02.png" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.5s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/03.png" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.7s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/04.png" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.9s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/05.png" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.3s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/01.png" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.5s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/02.png" alt=""></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2">
               <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.7s'>
                  <div class="brand-img">
                     <a href="#"><img src="assets/img/brand/03.png" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--brand-area end-->
</main>