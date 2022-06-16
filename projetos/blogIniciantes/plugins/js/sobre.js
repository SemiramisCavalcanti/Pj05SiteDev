
  
jQuery(document).ready(function(){
  ( function ( $ ){ 
      $ ( '.goFlip' ).on ( "click" ,  function (){ 
      $ ( '.aboutMe' ).toggleClass ( 'rotate-3d' ); 
      $ ( '.card-back' ).toggleClass ( 'z-up' ); 
      $ ( '.card-back .> AboutHeader> h2 ' ).addClass ( 'fadeInUp' ); 
      $ ( '.backContent-wrap backContent').addClass ( 'fadeInUp' ); 
    }); 
  }) ( jQuery );
});


