









// navbar scroll top fixed
 var nav = document.getElementById('nav-menu');

 window.onscroll = function () {

   if(window.pageYOffset > 10){

    nav.style.position = "fixed";
    nav.style.background="#242328";
    nav.style.zIndex="200";
    nav.style.top = 0;
    nav.style.width="100%";
    nav.style.padding="13px";

  }
  else{
            nav.style.position = 'relative'; //fixed
            nav.style.top = 100;
            nav.style.padding="20px";
            nav.style.background="#242328";  //linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.5))

          }
        }
        // scroll top fixed ends



// counter
            jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
                 });
                 });
           // counter ends

            // image filter
               
               $('.port-button').click(function() {
                let value = $(this).attr('data-filter');
                if(value === 'all') {
                  $('.filter').show(300);
                } else {
                  $('.filter').not('.' + value).hide(300);
                  $('.filter').filter('.' + value).show(300);
                }
              });

               $('.port-button').click(function() {
                $(this).addClass('active').siblings().removeClass('active');
              });
               // image-filter ends


// owl carousel

                $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

                // owl carousel ends





               // image filter
               
               $('.port-button').click(function() {
                let value = $(this).attr('data-filter');
                if(value === 'all') {
                  $('.filter').show(300);
                } else {
                  $('.filter').not('.' + value).hide(300);
                  $('.filter').filter('.' + value).show(300);
                }
              });

               $('.port-button').click(function() {
                $(this).addClass('active').siblings().removeClass('active');
              });
               // image-filter ends



 
   
           


         


 
















