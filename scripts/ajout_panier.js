$('#btnajoutpan').click(function() {
  $('.image_compo').addClass('bounce');
  setTimeout(function() {
    $('.image_compo').removeClass('bounce');
  }, 1000);
});