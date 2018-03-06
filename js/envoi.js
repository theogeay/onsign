$(function(){
  $('#formMessage').on('keypress', function(e) {
    if(e.keyCode === 13) {

      e.preventDefault();

      var objetEnvoye = {
        message: $('#message').val(),
        soumettre: true,
        idMessage: $('.message-block').first().data('id-message')
      };

      $.post('../admin/reception.php', objetEnvoye, function(data){
        // data correpsond a ce qui est "echo" par le fichier PHP du serveur
        $('#titreMessages').after(data.message);


      }, 'JSON');


    }


  });
});