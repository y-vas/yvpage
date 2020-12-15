$(document).ready(function(){

  $.ajax({
    url: '/experiences.html',
    success: function(data){ $('.experiences').html( data ); },
  });

  $.ajax({
    url: '/localization.json',
    dataType: "json",
    success: function(data){
      data = data[ navigator.language ];
      try {
        $('*[trans]').each( function(i, e){
          let key = $(this).attr('trans')
          $(this).text(data[key]);
        });
      } catch (e) {
        console.log('language not avaliable');
      }

    },
  });

})
