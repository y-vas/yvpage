$(document).ready(function(){
  links = [
    'experiences',
    'educations',
    'skills'
  ]

  for (var i = 0; i < links.length; i++) {
    let link = links[i];
    $.ajax({
      url : `/${link}.html`,
      success: function( data ){ $(`.${link}`).html( data ); },
    });
  }

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
