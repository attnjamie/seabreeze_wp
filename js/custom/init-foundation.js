(function($) {
  $(document).foundation();

  $(window).on('scroll', function() {
    var windowPosition = $(window)[0].pageYOffset;
    if (windowPosition >= 50) {
        $("nav.top-bar").addClass("shrink-topbar");
    }
    if (windowPosition < 50) {
        $("nav.top-bar").removeClass("shrink-topbar");
    }
  });

  $('.parallax-hero').each(function(){
      var $bgobj = $(this); // assigning the object
  
      $(window).scroll(function() {
        // divide by how fast you want parallax effect
        // smaller number is more parallax-y
          var yPos = ($(window).scrollTop() / 25); 
          
          // Put together our final background position
          var coords = '50% '+ yPos + 'px';

          // Move the background
          $bgobj.css({ backgroundPosition: coords });
      }); 
    });

    $('a.button').each(function() {
      var a = new RegExp('/' + window.location.host + '/');
      if(!a.test(this.href)) {
        $(this).click(function(e) {
          e.preventDefault();
          e.stopPropagation();
          window.open(this.href, '_blank');
        });
      }
    });  
})(jQuery);