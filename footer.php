</section>
<footer class="container">
<div class="row">
  <a class="exit-off-canvas"></a>

  <div class="medium-4 large-4 columns">
    <h4>Contact Us:</h4>
    <p><a href="mailto:info@seabreezesail.com">info@seabreezesail.com</a></p>
    <p><a href="tel:3128787587">312.878.7587</a></p>
    <p class="copyright">© 2015 Seabreeze Sail. All rights reserved.</p>
  </div>
  <div class="medium-4 large-4 columns">
    <h4>Find Us: </h4>
    <p>400 E MONROE ST</p> 
    <p>CHICAGO, IL 60603</p>   
  </div>
  <div class="medium-4 large-4 columns">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="panel">
    <div class="fb-like-box" data-href="https://www.facebook.com/SeabreezeCharter" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true"></div>
        <div style="margin-left: 10px" id="yelp-biz-badge-rrc-SNaVTMw8NsFLqMvivPDBnQ"><a href="http://www.yelp.com/biz/seabreeze-charter-llc-chicago-2">Check out Seabreeze Charter LLC on Yelp</a></div><script type="text/javascript">(function(d, t) {var g = d.createElement(t);var s = d.getElementsByTagName(t)[0];g.id = "yelp-biz-badge-script-rrc-SNaVTMw8NsFLqMvivPDBnQ";g.src = "//dyn.yelpcdn.com/biz_badge_js/en_US/rrc/SNaVTMw8NsFLqMvivPDBnQ.js";s.parentNode.insertBefore(g, s);}(document, 'script'));</script>

    </div>
  </div>

	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
  </div>
</div>
</footer>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
