console.log('main.js is linked');

// ------------ nav-large | : fill background color on scroll ------------

$(".wrapper").css( "padding", "0" );
$('.site-header-main').css('max-height', "60px");
$('.site-header-main').css('padding-left', "50px");
$('.site-header-main').css('padding-right', "50px");




if($("#about").length > 0) {
  console.log('this is the homepage');

  $(".site-branding").css( "display", "none" );

  $(window).scroll(function(){
    if($(window).scrollTop() > 800 && $(window).width() > 958 ){
      $(".site-branding").css( "display", "flex" );
      $('.site-header-main').css('background-color', "rgba(255,255,255,0.5)");

    } else {
      $(".site-branding").css( "display", "none" );
      $('.site-header-main').css('background-color', "rgba(255,255,255,0)");
    }
  });

} else {

  //Not home page
  $(window).scroll(function(){
    if($(window).scrollTop() > 200 && $(window).width() > 958 ){
      $(".site-branding").css( "display", "flex" );
      $('.site-header-main').css('background-color', "rgba(255,255,255,0.5)");

    } else {
      // $(".site-branding").css( "display", "none" );
      $('.site-header-main').css('background-color', "rgba(255,255,255,0)");
    }
  });

  $('.footer__link--icon').each(function(){
    var src = $(this).attr('src');;
    $(this).attr('src', src.replace('wp-content/','/wp-content/'));
  });


}

document.getElementsByClassName('custom-header').style.display = 'none';
