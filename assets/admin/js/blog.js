function uploadImage(image) {
   var data = new FormData();
   data.append("file", image);
   $.ajax({
      url: base_url + 'Backoffice/uploadImageBlog',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: "post",
      success: function (url) {
         console.log(url);
         var image = $('<img>').attr('src', url);
         $('#summernote').summernote("insertNode", image[0]);
      },
      error: function (data) {
         console.log(data);
      }
   });
}
function deleteFile(src) {

   $.ajax({
      type: "POST",
      url: base_url + 'Backoffice/deleteImageBlog', // replace with your url
      data: { src: src },
      cache: false,
      success: function (resp) {
         console.log(resp);
      }
   });
}
function isImage(i) {
   return i instanceof HTMLImageElement;
}
const loadFile = function (event, output) {
   const image = document.getElementById(output);
   image.src = URL.createObjectURL(event.target.files[0]);
};

const searchFilter = (page_num) => {
   page_num = page_num ? page_num : 0;
   var keywords = $('#keywords').val();
   var sortBy = $('#sortBy').val();
   var orderBy = $('#orderBy').val();

   $.ajax({
      type: 'POST',
      url: base_url + 'Backoffice/BlogPagination/' + page_num,
      data: 'page=' + page_num + '&keywords=' + keywords + '&sortBy=' + sortBy + '&orderBy=' + orderBy,
      beforeSend: function () {
         $('.loading').hide();
      },
      success: function (html) {
         $('#dataList').html(html);
         $(".loading").fadeOut("slow");
      }
   });

}
const showToast = (icon, header, text, page = false) => {
   $.toast({
      heading: header,
      text: text,
      showHideTransition: 'slide',
      icon: icon,
      loader: false,
      hideAfter: 2500,
      position: 'bottom-right',
      afterHidden: function () {
         if (page) {
            location.reload();
         }
         if(page != ''){
            window.location.href = base_url+page;
         }
      }
   })
}


$(document).ready(function () {
   $('#summernote').summernote({
      placeholder: 'Escribe tu contenido aquí...',
      tabsize: 2,
      lang: "es-ES",
      height: 500,
      dialogsInBody: true,
      fontNames: ['Quicksand', 'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Verdana', 'sans-serif'],
      toolbar: [
         ['style', ['style']],
         ['fontname', ['fontname']],
         ['fontsize', ['fontsize']],
         ['font', ['bold', 'underline', 'clear']],
         ['para', ['ul', 'ol', 'paragraph', 'hr']],
         ['color', ['color']],
         ['table', ['table']],
         ['view', ['undo', 'redo']],
         ['insert', ['link', 'picture', 'video']],
      ],
      callbacks: {
         onImageUpload: function (image, editor, welEditable) {
            uploadImage(image[0]);
         },
         onMediaDelete: function (target) {
            deleteFile(target[0].src);
         },
         /*  onKeydown: function (e) {
             var match, keys, last;
             if (e.keyCode === 8 || e.keyCode === 46) {
                //params to get imgs by regular expression
                var m,
                   urls = [],
                   str = e.target.innerHTML,
                   rex = /<img.*?src=['"](.*?)['"]/g;
                //push all src img in a obj
                while (m = rex.exec(str)) {
                   urls.push(m[1]);
                }
                
                var img = base_url + 'assets/imgs/blog/qr.png';
                urls.forEach(function(value, index) {
                   if (value == img) {
                      console.log('yey')
                   }
                });
 
 
             }
          } */
      }
   });

   $('#FormBlog').submit(function (e) {

      e.preventDefault();
      const form = $(this);
      const formData = new FormData(form[0]);

      $.ajax({
         url: base_url + 'Backoffice/PostBlog',
         type: 'post',
         data: formData,
         cache: false,
         contentType: false,
         processData: false,
         dataType: 'json',
         beforeSend:function(){
            $(".btn-submit").attr('disabled',true)
         },
         success: function (response) {
            if (response.success == true) {
               showToast('success', 'Exito', response.message, 'admin/blogs')
            } else {
               showToast('error', 'Error', response.message)
               $(".btn-submit").attr('disabled',false)
            }
         }
      });
   });
});
