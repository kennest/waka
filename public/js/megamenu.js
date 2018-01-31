$(document).ready(function() {
  jQuery(document).ready(function(){
    $(".dropdown").hover(
      function() { $('.dropdown-menu', this).stop().fadeIn("slow");
        },
      function() { $('.dropdown-menu', this).stop().fadeOut("slow");
    });
  });
});