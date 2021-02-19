
var skills_bucket = {
  'python'     : 'tensorflow, selenium, keras, jupyter, matplotlib ,numpy ,pandas ,pip , pypi',
  'php'        : 'Composer, PHPMailer, Stripe, Doctrine',
  'linux'      : 'Bash, Grep, RegEx, awk, vim',
  'javascript' : ' JQuery, Ajax, select2, d3.js/c3.js , Dragula',
}

$(document).ready(function(){
  links = [
    'experiences',
    'educations',
    'skills'
  ]

  for (var i = 0; i < links.length; i++) {
    let link = links[i];
    $.ajax({
      async: false,
      url : `/${link}.html`,
      success: function( data ){ $(`.${link}`).html( data ); },
    });
  }

  $.ajax({
    url: '/localization.json',
    dataType: "json",
    async: false,
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

  $('.skills-bucket li').each(function(){
    let skill = $(this).text().trim().toLowerCase();
    $( this )
      .attr('ncss', skill )
      .mouseover(function(){
        let skill = $(this).attr('ncss')
        $(`li[ncss="${skill}"]`)
          .addClass('skill-selected')
      })
      .mouseleave(function(){
        let skill = $(this).attr('ncss')
        $(`li[ncss="${skill}"]`)
          .removeClass('skill-selected')
      });
  });

})
