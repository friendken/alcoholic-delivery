$(document).ready(function(){
  if ($('.gallery-slide').length > 0) {
    $('.gallery-slide').slick({
      autoplay: true,
      arrows: false,
    });
  }

  if ($('.product-orderby').length > 0) {
    $('.product-orderby').select2();
  }

  if ($('.price_slider').length > 0) {
    $('.price_slider').slider({
      range: true,
      min: 30,
      max: 100,
      values: [ 30, 100 ]
    });
  }
});