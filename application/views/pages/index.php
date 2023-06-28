<main>
   <!--slider-area start-->
   <div class="slider-area pos-rel">
      <div class="slider-active">
         <div class="single-slider slider-height pos-rel d-flex align-items-center" style="background-image: url(assets/img/testimonial/testimonio.jpg);">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8">
                     <div class="slider__content text-left">
                        <h5 class="sub-title mb-25 wow fadeInUp2 animated" data-wow-delay=".1s">
                           <span class="pr-10"><i class="fas fa-heart"></i></span>
                           Testimonios
                        </h5>
                        <h1 class="main-title mb-35 wow fadeInUp2 animated" data-wow-delay=".1s">
                           Voces del corazón
                        </h1>
                        <ul class="btn-list wow fadeInUp2 animated" data-wow-delay=".3s">
                           <li><a class="theme_btn theme_btn_bg" href="<?= base_url("Dashboard/testimonios/index"); ?>">Ver <span><i class="fas fa-heart"></i></span></a>
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
                           <li><a class="theme_btn theme_btn_bg" href="<?=base_url('Dashboard/view/actividades-encuentros_2023')?>">Eventos 2023 <span><i class="fas fa-heart"></i></span></a>
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
            <div class="col-xl-6 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Que hace la fundación méxicana del corazón?</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/aliados/abc.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://www.youtube.com/watch?v=-EgzHuGRPK8&t=2s" class="popup-video"><i class="fas fa-play"></i></a>
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
            <!-- Omron video -->
            <div class="col-xl-6 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Omron</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/aliados/omron.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://www.youtube.com/watch?v=l4BpY4oesso" class="popup-video"><i class="fas fa-play"></i></a>
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
                     <div class="author_box__content">
                        <h4 class="semi-02-title">ABC</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/aliados/abc.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://www.youtube.com/watch?v=XoEiS0errhI" class="popup-video"><i class="fas fa-play"></i></a>
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
                  <h6><span><i class="fas fa-heart"></i></span> Voces del corazón </h6><br>
                  <a class="theme_btn theme_btn_bg" href="<?= base_url('Dashboard/testimonios/index') ?>">Ver más<span><i class="fas fa-heart"></i></span></a>
               </div>
            </div>
         </div>
         <div class="row testimonial-active-04">
            <!-- Marcapasos/doctora video -->
            <div class="col-xl-4 item-box">
               <div class="testimonial-item white-bg pos-rel wow fadeInUp2 animated" data-wow-delay='.5s'>
                  <div class="author_box d-flex align-items-center mb-25">
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Dra. Balderrama</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/testimonial/370.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="<?= base_url('assets/img/testimonial/marcapasos.mp4') ?>" class="popup-video"><i class="fas fa-play"></i></a>
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
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Sra. María</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/testimonial/maria.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://www.youtube.com/watch?v=pjVrE726Dj8" class="popup-video"><i class="fas fa-play"></i></a>
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
                     <div class="author_box__content">
                        <h4 class="semi-02-title">Sr. Hector</h4>
                     </div>
                  </div>
                  <!-- Foto de preview del video -->
                  <div class="d-flex events-video-area2 pos-rel mb-30 " style="background-image: url(assets/img/testimonial/hector.png); justify-content:center; align-items:center;">
                     <div class="video-area pos-abl">
                        <!-- Link del video -->
                        <a href="https://www.youtube.com/watch?v=QtzFfNM7Zcc" class="popup-video"><i class="fas fa-play"></i></a>
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