<footer>
  <div class="container-fluid">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
        <h7 class="text-warning"><b>Social Media</b></h7>
        <p><img class="rounded-circle" style="width: 30px;" src="https://cdn.dribbble.com/users/478912/screenshots/4172267/instagram.gif">
          <a class="badge text-white btn-outline-danger" href="https://www.instagram.com/destinybali/" target="blank">Destiny_Bali</a></p>
        <p><img class="rounded-circle" style="width: 30px; " src="http://img.jetbitts.com/screensavers/down/signs/facebooklo_3VnvEDHU.gif">
          <a class="badge text-white btn-outline-primary" href="https://www.facebook.com/destinychurchbali/" target="blank">Destiny_church_bali</a></p>
         <p><img class="rounded-circle" style="width: 30px; " src="http://www.nlbi.nl/images/earth.gif">
          <a class="badge text-white btn-outline-primary">destiny_church_bali.com</a></p>
      </div>

      <div class="col col-lg-4">
        <h7><u><b>About</b></u></h7>
         <p><img class="rounded-circle" style="width: 30px;" src="https://cdn.dribbble.com/users/22930/screenshots/1872568/mapfolding.gif">
          <a class="badge text-white btn-outline-primary" href="#" target="blank">Jl. Dewata no 17b, Cargo Permai</a></p>
        <p><img class="rounded-circle" style="width: 30px; " src="https://cdn.dribbble.com/users/4874/screenshots/2031709/messageincoming.gif">
          <a class="badge text-white btn-outline-primary">destinybaali@gmail.com</a></p>
      </div>

      <div class="col col-lg-4">
       <h7><u><b>Others</b></u></h7>
        <p><img class="rounded-circle" style="width: 30px;" src="https://cdn.geekwire.com/wp-content/uploads/2015/10/Whatsapp.gif">
          <a class="badge text-white btn-outline-success" href="#" target="blank">Whatsapp</a></p>
       <p><img class="rounded-circle" style="width: 30px;" src="https://tctechcrunch2011.files.wordpress.com/2014/02/telegram-rise2-2.gif?w=400">
          <a class="badge text-white btn-outline-primary" href="#" target="blank">Telegram</a></p>
      </div>
    </div>
  </div>

  <div class="container my-auto">
    <div class="copyright text-center my-auto text-light">
      <span>Copyright &copy; Your Website <?= date('yy'); ?></span>
    </div>
  </div>

</footer>	 


	<script src="<?= base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
  	<script src="<?= base_url(); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  	<script src="<?= base_url(); ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  	<script src="<?= base_url(); ?>asset/js/sb-admin-2.min.js"></script>
  	<script src="<?= base_url(); ?>asset/js/jquery.js"></script>

	<script>
    // Not a ton of code, but hard to
    const nav = document.querySelector('#main');
    let topOfNav = nav.offsetTop;

    function fixNav() {
      if (window.scrollY >= topOfNav) {
        document.body.style.paddingTop = nav.offsetHeight + 'px';
        document.body.classList.add('fixed-nav');
      } else {
        document.body.classList.remove('fixed-nav');
        document.body.style.paddingTop = 0;
      }
    }

    window.addEventListener('scroll', fixNav);


    // slide-in
    function debounce(func, wait = 20, immediate = true) {
      var timeout;
      return function() {
        var context = this, args = arguments;
        var later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    };

    const sliderImages = document.querySelectorAll('.slide-in');

    function checkSlide() {
      sliderImages.forEach(sliderImage => {
        // half way through the image
        const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.height / 2;
        // bottom of the image
        const imageBottom = sliderImage.offsetTop + sliderImage.height;
        const isHalfShown = slideInAt > sliderImage.offsetTop;
        const isNotScrolledPast = window.scrollY < imageBottom;
        if (isHalfShown && isNotScrolledPast) {
          sliderImage.classList.add('active');
        } else {
          sliderImage.classList.remove('active');
        }
      });
    }

    window.addEventListener('scroll', debounce(checkSlide));


  </script>

</body>
</html>