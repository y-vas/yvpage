
var nproj = '';
var dots = true;
var skills_bucket = {
  'python'     : 'tensorflow, selenium, keras, jupyter, matplotlib ,numpy ,pandas ,pip , pypi',
  'php'        : 'Composer, PHPMailer, Stripe, Doctrine',
  'linux'      : 'Bash, Grep, RegEx, awk, vim',
  'javascript' : 'JQuery, Ajax, select2, d3.js/c3.js , Dragula',
}

function foo(txt){
  $('*[trans="myproj"]').html(txt);
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
        let skill = $( this ).attr('ncss')
        $(`li[ncss="${skill}"]`)
          .removeClass( 'skill-selected' )
      });
  });

  let proj = $('*[trans="myproj"]').html()
  $('#cv-show').click(function(){
    nproj = '';
    $('#cv').toggleClass('expandY');
    $('#projects').toggleClass('d-none');

    if(!$('#projects').hasClass('d-none')){
      $('*[trans="myproj"]').html('')
    }

    $('#print-btn').toggleClass('d-none');
  });

  setTimeout(function(){
    $('#cv').addClass('expandY');
  } , 100 );

  setInterval(function(){
    dots = !dots;
    $('#dots').html( dots ? '_':' ' );
  } , 700 );

  setInterval(function(){
    nproj = proj.substring(0,nproj.length + 1)
    $('*[trans="myproj"]').html( nproj );
  } , 100 );

})
