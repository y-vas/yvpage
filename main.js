$(document).ready(function(){

  $.ajax({
    url : '/experiences.html',
    success: function( data ){
                $('.experiences').html( data );
    },
  });

  $.ajax({
    url : '/education.html',
    success: function( data ){
                $('.educations').html( data );
    },
  });

  $.ajax({
    url: '/localization.json',
    dataType: "json",
    success: function( data ){
      try {
        $('*[trans]').each( function(i, e){
          $(this).text(
            data[ navigator.language ][$(this).attr('trans')]
          );
        });
      } catch (e) {
        console.log('language not avaliable');
      }

    },
  });

})
