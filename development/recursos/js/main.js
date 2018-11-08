// Global variables

// Init
$(document).ready(function(){

$('ul.tabs').each(function(){
  // For each set of tabs, we want to keep track of
  // which tab is active and its associated content
  var $active, $content, $links = $(this).find('a');

  // If the location.hash matches one of the links, use that as the active tab.
  // If no match is found, use the first link as the initial active tab.
  $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
  $active.addClass('active');

  $content = $($active[0].hash);

  // Hide the remaining content
  $links.not($active).each(function () {
    $(this.hash).hide();
  });

  // Bind the click event handler
  $(this).on('click', 'a', function(e){
    // Make the old tab inactive.
    $active.removeClass('active');
    $content.hide();

    // Update the variables with the new link and content
    $active = $(this);
    $content = $(this.hash);

    // Make the tab active.
    $active.addClass('active');
    $content.show();

    // Prevent the anchor's default click action
    e.preventDefault();
  });
});






//  SCROLL
$(window).scroll(function(){
  pos = $(this).scrollTop();
  //console.log(pos);
  var alt1 = $('#portada');
  var altH1 = alt1.height();
  var columnaDerInt = $('header');
  var columnaDerIntAlto = columnaDerInt.height();
  var calendarioVolverAbsolute =  columnaDerIntAlto ;

  if (pos > altH1 - 350){
     $('header').addClass('actfijo');
  
    if(pos > calendarioVolverAbsolute + 30){
     $('.logo').addClass('actabsolute');
      $('header nav').addClass('actabsolute');
      $('header').addClass('actabsolute');
      $('header nav ul li a').addClass('actabsolute');
      $('.nav_menu .fa').addClass('actabsolute');
       $('.nav_menu .fa').addClass('actabsolute');
        $('.logo_responsi').addClass('act');


    }else{
    $('.logo').removeClass('actabsolute');
       $('header nav').removeClass('actabsolute');
        $('header').removeClass('actabsolute');
       $('header nav ul li a').removeClass('actabsolute');
         $('.nav_menu .fa').removeClass('actabsolute');
            $('.nav_menu .fa').removeClass('actabsolute');
             $('.logo_responsi').removeClass('act');
      
    }
  }else{
  $('header').removeClass('actfijo');
   $('.logo').removeClass('actabsolute');
       $('header nav').removeClass('actabsolute');
        $('header').removeClass('actabsolute');
       $('header nav ul li a').removeClass('actabsolute');
         $('.nav_menu .fa').removeClass('actabsolute');
            $('.nav_menu .fa').removeClass('actabsolute');
            $('.logo_responsi').removeClass('act');
  }
  

});





  $("nav ul li.menu").on("click", function(e){

    $("nav ul li.menu").each(function(){
      $(this).removeClass("active");
    });

    $(this).addClass("active");

  });

  if($('.slider-for').length){
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      infinite: true,
      adaptiveHeight: true,
      asNavFor: '.slider-nav'
    });
  }

  if($('.slider-nav').length){
    $('.slider-nav').slick({
      slidesToShow: 3,
      infinite: true,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      centerMode: true,
      adaptiveHeight: true,
      focusOnSelect: true
    });
  }

  /*
 * Validate Contact
 */
if($("form.contact").length){

   var validate = $("form.contact").validate();

 }



$('img').load(function(){

  // ISOTOPE
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.item'
  });

 });

});
// Functions
