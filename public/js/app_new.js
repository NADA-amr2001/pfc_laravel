
$("#login-btn").on("click",function(e){
   e.preventDefault();
  $('#login').modal('show');
});

$("#login-btn").click(function(e){
    e.preventDefault();
    $('#login').modal();
});

$("#rech-btn").on("click",function(e){
    e.preventDefault();
   $('#rech').modal('show');
});

$("#signup-btn").on("click",function(e){
    e.preventDefault();
   $('#signup').modal('show');
});

$("#forgot-password-link").on("click",function(e){
    e.preventDefault();
   $('#forgot-password').modal('show');
    });

/* $("#closeButton").click(function(){
     $('body').removeClass('modal-open');
     $('body').css('padding-right', '');
     $('.modal-backdrop').remove();
     $('#login').hide();
 }) ;  
*/
    