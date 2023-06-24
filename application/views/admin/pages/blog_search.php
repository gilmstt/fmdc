<div class="grid fade-in">
         <?php
         if (!empty($posts)):
            foreach ($posts as $row): ?>
               <div class="item text-center">
                  <div class="card card-grid">
                     <a href="#" class="img-wrap"> <img src="<?=base_url($row['cover_image'])?>" alt="Post" width="200px"/> </a>
                     <div class="info-wrap">
                        <a href="#" class="title text-truncate d-block"><?=$row['title']?></a>
                        <div class="price mb-2"><?=$row['category']?></div>        
                        <a href="<?=base_url('admin/blog/post/update/'.$row['blog_id'])?>" class="btn btn-sm btn-primary"> <i class="far fa-edit"></i> Editar </a>
                        <a href="#" class="btn btn-sm "> <i class="far fa-times"></i> Eliminar </a>
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