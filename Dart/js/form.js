$(document).ready(function() { 
    $("#feedback").submit(function(){ 
      var form = $(this); 
      var error = false; 
      form.find('input').each( function(){ 
        if ($(this).val() == '') { 
          alert('Зaпoлнитe пoлe "'+$(this).attr('placeholder')+'"!');
          error = true; 
        }
      });
      if (!error) { 
        var data = form.serialize(); 
        $.ajax({ 
          type: 'POST', 
          url: 'form.php', 
          dataType: '', 
          data: data,
          beforeSend: function(data) { 
            form.fadeOut(1000);
            $(".preloader").fadeIn(1000);
            $("#baz").removeClass('hidden');
            $("#baz").addClass('show');
            // form.find('input[type="submit"]').attr('disabled', 'disabled'); 
          },
          success: function(data){ 
            if (data['error']) { 
              alert(data['error']);
            } else { 
              $("#success").removeClass('hidden');
              $("#success").addClass('show');
              $("#success").delay(2000);
              $("#success").fadeOut(1000);

              // alert('Письмo было отправлено, проверьте почту.');
            }
          },
          error: function (xhr, ajaxOptions, thrownError) { 
            alert(xhr.status); 
            alert(thrownError);
          },
          complete: function(data) {
            form.delay(3000);
            form.fadeIn(1000);
            $(".preloader").fadeOut(1000);
            $("#baz").addClass('hidden');
            $("#baz").removeClass('show');
            // form.find('input[type="submit"]').prop('disabled', false); 
          }   
             });
      }
      return false; // вырубaeм стaндaртную oтпрaвку фoрмы
    });
  });