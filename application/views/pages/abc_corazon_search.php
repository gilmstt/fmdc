<div class="row grid">
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
                     <img src="<?=base_url('assets/img/cases/04.png')?>" alt="">
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