$(document).ready(function(){
  $("#signupForm").submit(function(event) {
      event.preventDefault()
      let url     = $(this).attr('action')
      let method  = $(this).attr('method')
      let data    = $(this).serialize()

      $.ajax({
          type        : method,
          url         : url,
          data        : data,
          dataType    : 'json',
          cache       : false,
          success     : function(response) {
              let message = ''
              $("#message").hide();
              if(response.success === false){
                  $.each(response.message, function(item, element) {
                      message += element[0]+'<br>';
                  })

                  $("#message").html('<div id="toast-container" class="toast-bottom-left">'
                    +'<div class="toast toast-error" role="button">'
                    +'<div class="toast-message">'
                    +message
                    +'</div>'
                    +'</div>'
                    +'</div>'
                  ).show(1000)

                  setTimeout(function(){
                    $("#message").hide(1000);
                  }, 5000)
              } else {
                window.location.replace(response.message);
              }
          }
      })
  })
})
