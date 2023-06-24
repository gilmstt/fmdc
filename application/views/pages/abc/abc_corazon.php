 <main>
   <style>
      .li-css {
         position: absolute;
         margin-top: -2rem;
      }
      .pagination-area{
         width:100%;
      }
   </style>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url(<?=base_url("assets/img/bg/portada.jpg")?>);">
       <div class="container">
          <div class="row">
             <div class="col-xl-8 offset-xl-2">
                <div class="page-title-wrapper text-center pt-125">
                   <div class="page-title-box">
                      <h2 class="page-title">ABC del Corazón</h2>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--page-title-area end-->
    <section class="subscribe-area">
       <div class="container">
          <div class="subscribe-bg">
             <div class="row sub-back theme-bg align-items-center pt-40 pb-20 pr-55"
                style="background-image: url(assets/img/shape/12.png);">
                <div class="col-xl-8 col-lg-12">
                   <div class="form-area text-center d-lg-flex align-items-center justify-content-center mb-30">
                      <form class="form d-lg-flex">
                        <input type="search" id="keywords" onkeyup="searchFilter();" placeholder=" Buscar posts..." class="form-control">               
                        <input type="hidden" id="sortBy" value="desc">
                        <input type="hidden" id="orderBy" value="id">
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- course-area-start -->
    <div class="course-area course-area-02 pt-100 pb-100">
       <div class="container" id="dataList">
          <div class="row grid" >
             <?php
               if (!empty($posts)):
                  $segundos = 3;
                  foreach ($posts as $row):
                     $data_segundos = "." . $segundos . "s";
                     if ($segundos == 7) { $segundos = 1;}
                     $segundos += 2;?>
             <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat5 cat3">
                <div class="cases grey-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='<?=$data_segundos?>'>
                   <div class="cases__box pos-rel">
                      <div class="cases__box--img">
                         <img src="<?=base_url($row['cover_image'])?>">
                      </div>
                      <ul class="cases__tag white-bg">
                         <li>
                            <div class="cases--author d-flex align-items-center">
                               <h4 class="semi-02-title ml-15"><?=$row['title']?></h4>
                            </div>
                         </li>
                      </ul>
                   </div>
                   <div class="cases__content">
                      <li>
                         <a class="theme_btn theme_btn_bg d-btn" href="<?=base_url('Dashboard/post/'.$row['blog_id'])?>">
                            <span><i class="fas fa-heart"></i></span> SABER MÁS
                         </a>
                      </li>
                   </div>
                </div>
             </div>
             <?php endforeach;?>
             <?php else: ?>
             <h2>No se encontraron posts...</h2>
             <?php endif;?>
          </div>
          <div class="row mt-5 text-center">
            <?php echo $this->ajax_pagination->create_links(); ?>
         </div>
       </div>
    </div>
    <!-- course-area-end -->
    
 </main>
