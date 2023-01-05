$('#btn').click(function() {

    if($('.dropdown').hasClass('is-active')){
        $('.dropdown').removeClass('is-active') 
    }
    else{
        $('.dropdown').addClass('is-active');
    }
   
});
