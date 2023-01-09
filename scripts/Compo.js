
// Ouvre la modale lorsque le bouton est cliqué
$('#btn').on('click', function () {
  $('#modal-id').addClass('is-active');
});

// Ferme la modale lorsque le bouton de fermeture est cliqué
$('.modal-close').on('click', function () {
  $('#modal-id').removeClass('is-active');
  
});
