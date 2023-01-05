// Ouvre la modale lorsque le bouton est cliqué
$('#btn').on('click', function () {
    $('#modal-id').addClass('is-active');
});

// Ferme la modale lorsque le bouton de fermeture est cliqué
$('.modal-close').on('click', function () {
    $('#modal-id').removeClass('is-active');
    
});


// Ouvre la modale lorsque le bouton est cliqué
$('#btn2').on('click', function() {
    $('#modal-id-2').addClass('is-active');
});

// Ferme la modale lorsque le bouton de fermeture est cliqué
$('.modal-close').on('click', function() {
    $('#modal-id-2').removeClass('is-active');
});

window.onload = function() {
var article = $('#article')
article.addClass('visible');
};