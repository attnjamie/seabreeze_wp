
<!-- HEADER SECTION -->
<div class="contain-to-grid header-section show-for-medium-up">
 
    <!-- TOPBAR SECTION -->
    <nav class="top-bar" data-topbar>
      <!-- TITLE AREA & LOGO -->
      <ul class="title-area">
          <li class="name">
              <a href="<?php echo home_url(); ?>"><img src="<?php header_image(); ?>" alt="" id="logo-image"></a>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
      </ul> <!-- END TITLE AREA & LOGO -->
   
      <!-- MENU ITEMS -->
      <section class="top-bar-section">
          <?php foundationPress_top_bar_l(); ?>
          <?php foundationPress_top_bar_r(); ?>
      </section> <!-- END MENU ITEMS -->
    </nav> <!-- END TOPBAR SECTION -->
</div> <!-- END HEADER SECTION
 
<!-- CONTENT FILL WHEN SCROLL = 0 -->
<div class="header-fill"></div>
