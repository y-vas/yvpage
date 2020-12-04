$(document).ready(function(){

  $.ajax({
    url: '/experiences.html',
    success: function(data){ $('.experiences').html( data ); },
  });
})
