<main>

        <!--page-title-area start-->
        <section class="page-title-area" style="background-image: url(<?=base_url("assets/img/bg/portada.jpg")?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="page-title-wrapper text-center pt-125">
                            <div class="page-title-box">
                                <h2 class="page-title">ABC DEL CORAZÓN</h2>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Inicio <i class="far fa-chevron-right"></i></a></li>
                                    <li><a href="#">Post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
         <!--blog-area start-->
         <section class="blog-details-area pt-130 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="blogs-details-left-area mb-50">
                            <div class="blog blogs-02 mb-40 wow fadeInUp2  animated" data-wow-delay=".1s" >
                                <div class="blog__thumb mb-35">
                                    <img src="<?=base_url('assets/img/blog/17.jpg')?>" alt="">
                                </div>
                                <div class="blog__content">
                                    <a class="tag" href="blog-details.html">ABC DEL CORAZON</a>
                                    <h3 class="blog-title mb-20"><a><?=$post->title?></a></h3>
                                    <ul class="blog-author mb-20">
                                            <li><a href="#">
                                                    <span><?=$post->name_doctor?></span></a></li>
                                            <li>
                                                <i class="far fa-calendar-alt"></i> <?=date($post->create_time)?>
                                            </li>
                                    </ul>
                                    <p class="mb-35"><?=$post->content?></p>
                                    <!-- <h3 class="cases-title mb-20">Raise Hand For Hopeless Peoples</h3>
                                    <p class="mb-25">Nemo enimsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est quidrem ipsum quia dolor sitmet consectetur adipis velit sed quianon numquam eius modi temporciunt labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam</p> -->
                                   <!--  <div class="blogs-details-thumb mb-10">
                                        <img class="img-fluid" src="<?=base_url('assets/img/blog/33.jpg')?>" alt="">
                                    </div> -->
                                </div>
                            </div>
                  
                            <div class="author grey-bg2 fix mb-60">
                                <div class="author__img f-left"><img src="assets/img/blog/34.png" alt=""></div>
                                <div class="author__content fix">
                                    <h4 class="semi-02-title">Fundación Mexicana del Corazón</h4>
                                    <p>Para contactarnos y mantenerte informado escríbenos es nuestras redes sociales.</p>
                                    <div class="header-social post-share-icon pt-10">
                                        <a href="https://www.facebook.com/fundacionmexicanadelcorazon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/fundacioncoramexico/" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <!--<a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-square"></i></a>-->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row row-border pb-35 mb-60">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="post d-flex align-items-center mb-20">
                                        <div class="post__thumb mr-20">
                                            <img src="assets/img/blog/34.jpg" alt="">
                                        </div>
                                        <div class="post__content">
                                            <h4><a href="blog-details.html">More Appointments Events 
                                                With WordPress Booking </a></h4>
                                            <div class="post__content--meta">
                                                <span><i class="far fa-user"></i> Somlia</span>
                                                <span><i class="far fa-calendar-alt"></i> 05 Aug 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="post d-flex align-items-center mb-20">
                                        <div class="post__thumb mr-20">
                                            <img src="assets/img/blog/35.jpg" alt="">
                                        </div>
                                        <div class="post__content">
                                            <h4><a href="blog-details.html">More Appointments Events 
                                                With WordPress Booking </a></h4>
                                            <div class="post__content--meta">
                                                <span><i class="far fa-user"></i> Somlia</span>
                                                <span><i class="far fa-calendar-alt"></i> 05 Aug 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lates-comment mb-55">
                                <h3 class="cases-title mb-40">People’s Comments</h3>
                                <ul class="post-comment">
                                    <li>
                                        <div class="comment-box fix mb-40">
                                            <div class="comment-box__img mr-25 f-left">
                                                <img src="assets/img/blog/36.png" alt="">
                                            </div>
                                            <div class="comment-box__content fix">
                                                <h5>David Angel Makel</h5>
                                                <span>IT Consultant</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content page looking at its layout point of using normal</p>
                                                <a href="#" class="reply-btn">Reply Comments <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="children ml-150">
                                        <div class="comment-box fix mb-40">
                                            <div class="comment-box__img mr-25 f-left">
                                                <img src="assets/img/blog/37.png" alt="">
                                            </div>
                                            <div class="comment-box__content fix">
                                                <h5>Michel Rason Roy</h5>
                                                <span>Product Designer</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content page looking at its layout point of using normal</p>
                                                <a href="#" class="reply-btn">Reply Comments <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-box fix mb-50">
                                            <div class="comment-box__img mr-25 f-left">
                                                <img src="assets/img/blog/38.png" alt="">
                                            </div>
                                            <div class="comment-box__content fix">
                                                <h5>Sturt Holder</h5>
                                                <span>IT Consultant</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content page looking at its layout point of using normal</p>
                                                <a href="#" class="reply-btn">Reply Comments <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="standard-right-area">
                           <!--  <div class="widget grey-bg2 mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" >
                                <div class="widget-search">
                                    <h3 class="cases-title mb-30">Search Here</h3>
                                    <div class="input-area pos-rel mb-10">
                                        <input type="text" class="form-control" placeholder="Keywords">
                                        <span><i class="far fa-search"></i></span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="widget mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" >
                                <ul class="widget-cat">
                                    <li><a href="#">Donate For Food <span class="f-right"><i class="far fa-chevron-right"></i></span></a></li>
                                    <li><a href="#">Blood Donation <span class="f-right"><i class="far fa-chevron-right"></i></span></a></li>
                                    <li><a href="#">Product Engineering <span class="f-right"><i class="far fa-chevron-right"></i></span></a></li>
                                    <li><a href="#">Product Marketing <span class="f-right"><i class="far fa-chevron-right"></i></span></a></li>
                                    <li><a href="#">Education <span class="f-right"><i class="far fa-chevron-right"></i></span></a></li>
                                    <li><a href="#">Medical &amp; Health <span class="f-right"><i class="far fa-chevron-right"></i></span></a></li>
                                </ul>
                            </div> -->
                            <div class="widget grey-bg2 mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" >
                                <div class="widget-post widget-post-02">
                                    <h3 class="cases-title mb-20">Posts Recientes</h3>
                                    <ul>
                                        <li>
                                            <div class="post d-flex align-items-center mb-20">
                                                <div class="post__thumb mr-20">
                                                    <img src="assets/img/blog/22.jpg" alt="">
                                                </div>
                                                <div class="post__content">
                                                    <h4><a href="http://fmdc.geemsolutions.com/Dashboard/post/16">¿QUÉ ES LA FRECUENCIA CARDÍACA Y CÓMO SE MIDE?</a></h4>
                                                    <a class="view_btn" href="http://fmdc.geemsolutions.com/Dashboard/post/16"><i class="far fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post d-flex align-items-center mb-20">
                                                <div class="post__thumb mr-20">
                                                    <img src="assets/img/blog/23.jpg" alt="">
                                                </div>
                                                <div class="post__content">
                                                    <h4><a href="http://fmdc.geemsolutions.com/Dashboard/post/15">¿COMO AFECTA EL EXCESO DE TRABAJO AL CORAZÓN?</a></h4>
                                                    <a class="view_btn" href="http://fmdc.geemsolutions.com/Dashboard/post/15"><i class="far fa-chevron-right"></i> </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post d-flex align-items-center mb-20">
                                                <div class="post__thumb mr-20">
                                                    <img src="assets/img/blog/24.jpg" alt="">
                                                </div>
                                                <div class="post__content">
                                                    <h4><a href="http://fmdc.geemsolutions.com/Dashboard/post/14">DESPUÉS DEL INFARTO ¿EL EJERCICIO ES OPCIÓN?</a></h4>
                                                    <a class="view_btn" href="http://fmdc.geemsolutions.com/Dashboard/post/14"><i class="far fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post d-flex align-items-center mb-20">
                                                <div class="post__thumb mr-20">
                                                    <img src="assets/img/blog/25.jpg" alt="">
                                                </div>
                                                <div class="post__content">
                                                    <h4><a href="http://fmdc.geemsolutions.com/Dashboard/post/13">LOS ANTICOAGULANTES Y EL HÍGADO</a></h4>
                                                    <a class="view_btn" href="http://fmdc.geemsolutions.com/Dashboard/post/13"><i class="far fa-chevron-right"></i> </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           <!--  <div class="widget grey-bg2 mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" >
                                <div class="widget-insta">
                                    <h3 class="cases-title mb-20">Photo Gallery</h3>
                                    <ul class="insta-feed">
                                        <li>
                                            <a class="insta" href="#">
                                                <img src="assets/img/blog/26.jpg" alt="">
                                                <span><i class="fab fa-instagram"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="insta" href="#">
                                                <img src="assets/img/blog/27.jpg" alt="">
                                                <span><i class="fab fa-instagram"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="insta" href="#">
                                                <img src="assets/img/blog/28.jpg" alt="">
                                                <span><i class="fab fa-instagram"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="insta" href="#">
                                                <img src="assets/img/blog/29.jpg" alt="">
                                                <span><i class="fab fa-instagram"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="insta" href="#">
                                                <img src="assets/img/blog/30.jpg" alt="">
                                                <span><i class="fab fa-instagram"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="insta" href="#">
                                                <img src="assets/img/blog/31.jpg" alt="">
                                                <span><i class="fab fa-instagram"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget grey-bg2 mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" >
                                <div class="widget-cat-btn">
                                    <h3 class="cases-title mb-30">Popular Tags</h3>
                                    <div class="cat-list">
                                        <a class="cat-btn" href="#">Design</a>
                                        <a class="cat-btn" href="#">Portfolio</a>
                                        <a class="cat-btn" href="#">Energy</a>
                                        <a class="cat-btn" href="#">Resume</a>
                                        <a class="cat-btn" href="#">Gallery</a>
                                        <a class="cat-btn" href="#">Renewable</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget grey-bg2 mb-30 wow fadeInUp2  animated" data-wow-delay=".1s" >
                                <div class="widget-add text-center" style="background-image: url(assets/img/blog/32.jpg);">
                                    <h5>Donate Now</h5>
                                    <h2>Want To Donate  
                                        Our Product</h2>
                                    <a href="donation.html" class="theme_btn theme_btn_bg">donate Now <span><i class="fas fa-heart"></i></span></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--blog-area end-->
        <!--cta-area start-->
        <section class="cta-area theme-bg2 pt-50 pb-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="cta-wrapper pl-100">
                            <h2>¿Te gustaría <a href="volunteer.html">Donar?</a></h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="cta-btn">
                            <a class="theme_btn theme_btn_bg" href="about.html">Dona ahora <span><i class="fas fa-heart"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta-area end-->
    </main>