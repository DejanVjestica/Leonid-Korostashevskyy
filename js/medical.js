// JavaScript Document

// // jQuery
// (function ($){
//   $(document).ready(function(){
//
// /* WINDOW RESIZE ACTIONS */
//
//    	// $(window).resize(function(){
// 		// 	// fullscreen();
//     //
// 		// });
//
// /* WINDOW LOAD ACTIONS */
//
//    	// $(window).load(function(){
// 		// 	// fullscreen();
// 		// });
// //animated scrolling
// 		$(".menu-item a[href^='#']").on('click', function(e) {
//
// // prevent default anchor click behavior
// 			e.preventDefault();
//
// // store hash
// 			var hash = this.hash;
// // animate
// 			  $('html, body').animate(
//           {
// 			   		scrollTop: $(hash).offset().top
// 			   	},
//           600,
//           function(){
// 			  		// when done, add hash to url
// 			  		window.location.hash = hash;
//
// 			  	  history.pushState(null, null, hash);
// 			    });
// 		    });
// // //fullsize sections
// // 		function fullscreen (){
// // 			$(".section").css({
// // 				height: $(window).height()
// // 			});
// //     }
// // Widgets elements order
//         // $('.attachment-medium').insertBefore('.widgettitle');
//
// //Impressum
// 		$("#menu-item-150 a").click(function(){
// 			$(".impressum-content").fadeIn("medium");
// 		});
// 		$(".close-button").click(function(){
// 			$(".impressum-content").fadeOut("medium");
// 		});
// 	}); // $(document).ready(function() ends here
// }(jQuery));

// jQuery
(function ($){
  $(document).ready(function(){
    $(".container").click(function(){

        $("#hauptmenu-resp").slideToggle("slow");

    });
  });
}(jQuery));
// JavaScript
function myFunction(x) {
    x.classList.toggle("change");
    // var nauptMenuResp = document.getElementById("hauptmenu-resp");
    // var style =  nauptMenuResp.style.display = "none";
    // nauptMenuResp.classList.toggle("display");
}
