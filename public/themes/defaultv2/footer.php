    <?php if ( ! isset($show) || $show == true) : ?>
   
 <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
          <!--  <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
            </div> -->
            <div class="mdl-mega-footer--right-section">
              <a class="android-links mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p style="color:#ffffff;" class="mdl-typography--font-light"> © 2017 Biro Keuangan dan BMN, Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi</p>
          <!--  <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p> -->
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-links android-link-menu mdl-typography--font-light" id="version-dropdown">
              Versions
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
              <li class="mdl-menu__item">V.1.0</li>
              <li class="mdl-menu__item">V.1.5</li>
            </ul>
            <a class="android-links mdl-typography--font-light" href="">Privacy Policy</a>
          </div>

        </footer>
      </div>
    </div>
    <!--<a href="" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a> -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

 <script src="<?php echo base_url(); ?>themes/defaultv2/js/jquery.marquee.min.js"></script>

    <?php endif; ?>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.7.2.min.js"><\/script>');</script>
    <?php echo Assets::js(); ?>
</body>
</html>
