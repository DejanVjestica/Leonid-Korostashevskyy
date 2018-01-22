// JavaScript Document
(function ($){
  $(document).ready(function(){
    /* WINDOW RESIZE ACTIONS */
    $(window).resize(function(){
      gallery_resize();
    });
    /* WINDOW LOAD ACTIONS */
    $(window).load(function(){
       gallery_resize();
    });
    // responcive menu
    $(".container").click(function(){

        $("#hauptmenu-resp").slideToggle("slow");

    });

    //animated scrolling
      var headerHeight = $("header").outerHeight();
      // window.alert(headerHeight + " px");
    $(".menu-item a[href^='#']").on('click', function() {

      // prevent default anchor click behavior
      // e.preventDefault();

      // store hash
      var hash = this.hash;
      // animate
      $('html, body').animate(
        {
          scrollTop: $(hash).offset().top - headerHeight
        },
        600,
        function(){
          // when done, add hash to url
          window.location.hash = hash;
          history.pushState(null, null, hash);
        });
      });

      // gallery portratit image menuHeight
      function gallery_resize(){
        function a(){};

        var gallery_item_height = $(".landscape img").height();
        $(".portrait img").height(gallery_item_height);
        $(".landscape img").height(gallery_item_height);
        var gallery_item_portrait_height = $(".portrait img").innerHeight();
        // $(".portrait img").css({"height" : gallery_item_height + "px"});
        // var crop_portrait_height =
        // window.alert(gallery_item_height + " px");
        console.log("gallery_item_portrait_height" + gallery_item_portrait_height + " px");
        console.log("gallery_item_height= " + gallery_item_height + " px");
      };

    }); // $(document).ready(function() ends here
  }(jQuery));
  function myFunction(x) {
      x.classList.toggle("change");
      // var nauptMenuResp = document.getElementById("hauptmenu-resp");
      // var style =  nauptMenuResp.style.display = "none";
      // nauptMenuResp.classList.toggle("display");
  };
