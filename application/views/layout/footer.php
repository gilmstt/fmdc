  <!--footer-area start-->
    <footer>
        <div class="container">
            <!--scroll-target-btn-->
            <!-- <a href="#top-menu" class="scroll-target"><i class="far fa-arrow-up"></i></a> -->
            <!--scroll-target-btn-->
            <div class="copy-right-area pt-30">
                <div class="row align-items-left">
                    <div class="col-xl-12">
                        <div class="copyright text-center">
                            <p style="font-size: 24px";>Fundación Mexicana del Corazón<span><i class="fas fa-heart"></i></span><a href="#"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--footer-area end-->


    <!-- JS here -->
    <script src="<?=base_url('assets/js/vendor/modernizr-3.5.0.min.js')?>"></script>
    <script src="<?=base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/js/isotope.pkgd.min.js')?>"></script>
    <script src="<?=base_url('assets/js/slick.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.meanmenu.min.js')?>"></script>
    <script src="<?=base_url('assets/js/metisMenu.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.nice-select.js')?>"></script>
    <script src="<?=base_url('assets/js/ajax-form.js')?>"></script>
    <script src="<?=base_url('assets/js/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.counterup.min.js')?>"></script>
    <script src="<?=base_url('assets/js/waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.scrollUp.min.js')?>"></script>
    <script src="<?=base_url('assets/js/imagesloaded.pkgd.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.easypiechart.js')?>"></script>
    <script src="<?=base_url('assets/js/tilt.jquery.js')?>"></script>
    <script src="<?=base_url('assets/js/parallax.min.js')?>"></script>
    <script src="<?=base_url('assets/js/plugins.js')?>"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>
    <script>
      const base_url = "<?=base_url()?>";
      const searchFilter = (page_num) => {
         page_num = page_num ? page_num : 0;
         var keywords = $('#keywords').val();
         var sortBy = $('#sortBy').val();
         var orderBy = $('#orderBy').val();

         $.ajax({
            type: 'POST',
            url: base_url + 'Dashboard/BlogPagination/' + page_num,
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
   </script>
</body>

</html>