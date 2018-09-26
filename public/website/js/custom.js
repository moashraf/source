//slider of home
$(document).ready( function() {
    $('.bxslider').bxSlider({
        mode: 'fade',
        speed: 800,
        auto: true
      });
    
     //up 
//     $(window).scroll(function(){
//         if( $(this).scrollTop() >= 500 ){
//             $('[alt="arrow"]').fadeIn();
//         } else{
//             $('[alt="arrow"]').fadeOut();
//         }
//     });
//    
//     $('[alt="arrow"]').click(function(){
//         $('html, body').animate({
//             scrollTop: 0
//         }, 500);
//     });

     //animation wow liberary
     new WOW().init();
    
    //equal height of logo to nav
    $(window).resize(function() {
        $('.navbar .navbar-brand img').height( $('.navbar').height() );
    });
    $('.navbar .navbar-brand img').height( $('.navbar').height() );
    
    $(".mCustomScrollbar").mCustomScrollbar({axis:"x"});

    $("#zoom_05").elevateZoom({ zoomType: "inner", cursor: "crosshair" });
    
});