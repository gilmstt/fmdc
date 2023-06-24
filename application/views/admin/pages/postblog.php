<style>
.note-modal.open {
   display: grid;
   place-content: center;
}

.note-modal-footer {
   height: 60px;
}

.dropdown-toggle:after {
   color: transparent;
}

input[type='file'] {
   border: 3px dotted #ccc;
   padding: 10px 5px;
   border-radius: 10px;
   background: #f5f5f5;
}

.img-post {
   border-radius: 5px;
}
</style>

<div class="page-fluid">
   <form id="FormBlog" method="post" enctype="multipart/form-data">
      <div class="page-header mb-4">
         <div class="header-title">
            <a href="javascript:history.back()"><small><i class="fas fa-arrow-left me-2"></i>Blogs</small></a>
            <h1><?=isset($post->blog_id) ? 'Editar post: '.$post->title : 'Crear Publicación' ?></h1>
            <p>Llena el formulario con toda la información que lleverá el post, título, categoría y cuerpo del blog. El post
               requiere una imagen principal de lo contrario no se creará el post.</p>
         </div>
         <div class="header-options">
            <button type="submit" class="btn btn-primary btn-submit"><?=isset($post->blog_id) ? 'Guardar' : 'Publicar' ?></button>
         </div>
      </div>
      <div class="card">
         <div class="form-wizard-wrapper">
            <ul>
               <li><a class="form-wizard-link active" href="javascript:;"
                     data-attr="info"><span>Información</span></a></li>
               <li><a class="form-wizard-link" href="javascript:;" data-attr="img"><span>Imagen</span></a></li>
               <li class="form-wizardmove-button"></li>
            </ul>
            <div class="form-wizard-content-wrapper">
               <div class="form-wizard-content show" data-tab-content="info">
                  <div class="form mt-5">
                     <h2>Información Basica</h2>
                     <div class="form-group">
                        <input type="hidden" name="blog_id" value="<?=isset($post->blog_id) ? $post->blog_id : '';?>">
                        <input type="hidden" name="cover_image" value="<?=isset($post->blog_id) ? $post->cover_image : '';?>">
                        <input type="text" name="title" required placeholder=" " value="<?=isset($post->title) ? $post->title : '';?>">
                        <label for="title">Titulo</label>
                     </div>
                     <div class="form-group">
                        <div class="form-select">
                           <select class="select-text" name="category" required>
                              <option value="" disabled selected></option>
                              <?php 
                              $categories = $this->Backoffice_m->getRowsCategories();
                              foreach ($categories as $row) {
                                 $sel = isset($post->blog_id) && $row['id'] == $post->category_id ? 'selected' : '';
                                 echo "<option {$sel} value='{$row['id']}'>{$row['category']}</option>";
                              }
                             ?>
                           </select>
                           <span class="select-highlight"></span>
                           <span class="select-bar"></span>
                           <label class="select-label">Selecciona una categoría</label>
                        </div>
                     </div>
                     <div class="form-textarea">
                        <textarea placeholder=" " name="description" rows="5"><?=isset($post->blog_id) ? $post->description : '';?></textarea>
                        <label for="textarea">Escribe la descripción del post</label>
                     </div>
                     <div class="d-block">
                        <textarea id="summernote" name="editordata"><?=isset($post->blog_id) ? $post->content : '';?></textarea>
                     </div>
                     <div class="full-wdth clearfix">
                        <a href="javascript:;" class="form-wizard-next-btn float-end btn">Siguiente</a>
                     </div>
                  </div>
               </div>
               <div class="form-wizard-content" data-tab-content="img">
                  <div class="form mt-5">
                     <h2>Subir imagen</h2>
                     <div class="col-12 col-lg-5 col-xl-4 m-auto text-center">
                        <div class="d-block">
                           <div class="dropzone">
                              <section class="content-area">
                                 <input class="file-input" type="file" name="file" hidden accept="image/*">
                                 <?php if(isset($post->blog_id)) : ?>
                                    <img src="<?=base_url(isset($post->blog_id) ? $post->cover_image : '')?>" class="mt-4" id="img-dragzone" width="200px">
                                 <?php else: ?>
                                    <img src="" class="mt-4" id="img-dragzone" width="200px">
                                    <i class="fas fa-cloud-upload-alt" id="icon-dragzone"></i>
                                 <?php endif; ?>
                                    <p>Arrastra o selecciona un archivo</p>

                              </section>
                              <section class="progress-area"></section>
                              <section class="uploaded-area"></section>
                           </div>
                        </div>
                     </div>
                     <div class="full-wdth clearfix">
                        <a href="javascript:;" class="form-wizard-previous-btn float-start btn">Regresar</a>
                        <!-- <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
