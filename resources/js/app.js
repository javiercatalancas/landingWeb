require('./bootstrap');

// function submit(){
//     $('#button').hide();
//   //  $('.modal').modal('show');
//   };

// $("#formulario").submit(function(){
//   $(".spinner").addClass("active");
// });

$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});