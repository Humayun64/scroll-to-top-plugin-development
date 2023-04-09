jQuery(document).ready(function($) {
    // Scroll to top button
    var $scrollButton = $('<div class="scroll-to-top"><div class="scroll-to-top-icon">^</div></div>');
    $('body').append($scrollButton);
    
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $scrollButton.addClass('scroll-to-top-show');
      } else {
        $scrollButton.removeClass('scroll-to-top-show');
      }
    });
  
    $scrollButton.on('click', function() {
      $('html, body').animate({ scrollTop: 0 }, 500);
      return false;
    });
  });
  
