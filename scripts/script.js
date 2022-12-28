function showDiv() {
  var type = document.getElementById('type').value;
  var divs = ['cooler', 'stockage', 'board', 'alim', 'gpu', 'boiter', 'cpu'];

  for (var i = 0; i < divs.length; i++) {
    if (divs[i] === type) {
      document.getElementById(divs[i]).style.display = "block";
    } else {
      document.getElementById(divs[i]).style.display = "none";
    }
  }
}

  // In the script.js file
  

  $(document).ready(function(){
    $("#form_composants").submit(function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements
            success: function(data,response)
            {
              $('#msg_success').addClass('appear');
              alert(response.message);
              
            }})
        });
      });

  $('#btn').click(function() {

    if($('.dropdown').hasClass('is-active')){
        $('.dropdown').removeClass('is-active') 
    }
    else{
        $('.dropdown').addClass('is-active');
    }
   
});

