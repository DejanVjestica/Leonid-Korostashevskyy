// JavaScript Document
(function ($){
  $(document).ready(function(){
    // WINDOW RESIZE ACTIONS ==============================================
    $(window).resize(function(){
      gallery_resize();
    });
    // WINDOW LOAD ACTIONS ================================================
    $(window).load(function(){
      gallery_resize();
    });
    // responcive menu ==================================================
    $(".container").click(function(){
      $("#hauptmenu-resp").slideToggle("slow");
    });
    //animated scrolling ================================================
    $(".menu-item a[href^='#']").on('click', function(e) {
      var headerHeight = $("header").outerHeight();
      // prevent default anchor click behavior
      e.preventDefault();
      // store hash
      var hash = this.hash;
      // animate
      $('html, body').animate({
          scrollTop: $(hash).offset().top - headerHeight
        }, 600);
      });
      // gallery portratit image menuHeight ====================================
      function gallery_resize(){
        var gallery_item_height = $(".landscape img").height();
        $(".portrait img").height(gallery_item_height);
        $(".landscape img").height(gallery_item_height);
      };
    }); // $(document).ready(function() ends here
  }(jQuery));

  // JavaScript =================================================
  function myFunction(x) {
    x.classList.toggle("change");

  };
