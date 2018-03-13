$(function(){
  $('#formMessage').on('click', function() {

      var objetEnvoye = {
        message: $('#message').val(),
        soumettre: true,
        idMessage: $('.message-block').first().data('id-message')
      };

      $.post('../admin/reception.php', objetEnvoye, function(data){
        // data correpsond a ce qui est "echo" par le fichier PHP du serveur
        $('#titreMessages').after(data.message);


      }, 'JSON');


  });
});