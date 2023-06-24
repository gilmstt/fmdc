<div class="page-fluid">
   <div class="page-header">
      <div class="header-title">
         <h1>Blogs</h1>
         <p> Crea, edita y elimina las publicaciones del blog.</p>
      </div>
      <div class="header-options">
         <a href="<?=base_url('admin/blog/post/insert')?>" class="btn btn-primary float-right">Nuevo Post</a>
      </div>
   </div>
   <div class="row gx-3 mb-3 mb-lg-4">
      <div class="col-lg-4 col-md-6 me-auto">
         <input type="text" id="keywords" onkeyup="searchFilter();" placeholder=" Buscar posts..." class="w-100 mt-lg-0 input-custom">               
         <input type="hidden" id="sortBy" value="desc">
         <input type="hidden" id="orderBy" value="id">
      </div>
      <div class="col-xl-2 col-lg-3 col-6 col-md-3">
         <div class="form-select select-custom mt-3 mt-lg-0">
            <select class="select-text" name="category" required>
               <option value="" disabled selected></option>
               <?=getCategories()?>
            </select>
            <span class="select-highlight"></span>
            <span class="select-bar"></span>
            <label class="select-label">Por categoría</label>
         </div>
      </div>
      <div class="col-xl-2 col-lg-3 col-6 col-md-3">
         <div class="form-select select-custom mt-3 mt-lg-0">
            <select class="select-text" name="category" required>
               <option value="" disabled selected></option>
               <option>Por fecha</option>
               <option>Más votado</option>
               <option>Más visto</option>
            </select>
            <span class="select-highlight"></span>
            <span class="select-bar"></span>
            <label class="select-label">Por filtro</label>
         </div>
      </div>
   </div>
   <div id="dataList">
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
   </div>
</div>
