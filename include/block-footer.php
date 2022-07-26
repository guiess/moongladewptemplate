<footer class="footer" data-scroll="" data-scroll-repeat="" data-scroll-call="footer-inview">
  <div class="footer__holder container">
    <div class="footer__top-bar">
      <ul class="footer-list list--tilda mb-10 md:mb-0">
        <li><a class="link" href="<?php echo carbon_get_theme_option('vimeo_link'); ?>" target="_blank">Films</a></li>
        <li><a class="link" href="<?php echo carbon_get_theme_option('sound_link'); ?>" target="_blank">Sound</a></li>
        <!-- <li><a class="link" href="https://www.facebook.com/moonglade114" target="_blank">Facebook</a></li> -->
        <li><a class="link" href="<?php if(is_front_page()) {echo carbon_get_theme_option('instagram_link');} else {echo carbon_get_theme_option('instagram_link_superfood');} ?>" target="_blank">Instagram</a></li>
        <li><p class="link call-modal-connect" style="margin-bottom: 0;">Connect</p></li>
      </ul>
      <!-- <div class="btn-connect-footer">
          <button class="btn btn--dark call-modal-connect" type="button">
            <span class="btn__text-holder"><span class="btn__text">Connect</span></span>
          </button>
      </div> -->
      <div class="footer__nav-wrapper lg:flex-grow lg:px-10 lg:justify-center">
        <ul class="footer-list list--tilda mb-10 md:mb-0">
          <li><a class="link" href="<?php echo home_url('/privacypolicy', ''); ?>">Privacy Policy</a></li>
          <li><a class="link" href="<?php echo home_url('/termsconditions', ''); ?>">Terms &amp; Conditions</a></li>
        </ul>
        <p class="footer__copy opacity-40"><span class="footer__copy-text">Moonglade &copy;2021. All rights reserved</span></p>
      </div>
      <div class="hidden lg:block lg:text-right"><a class="footer-design" href="https://obys.agency" disabled>Designed by obys</a></div>
    </div>
    <div class="footer__bottom-bar md:hidden">
      <div class="flex justify-between items-center">
        <a class="footer-design" href="https://obys.agency" disabled>Designed by obys</a><span class="lg:hidden" data-smooth-scroll="top">( Back to top )</span>
      </div>
    </div>
  </div>
</footer>