$(document).ready(function() {
  $('.show_all_users').hide();
});

$(document).ready(
  function() {
      $(".see_all_btn").click(function() {
          $(".show_all_users").slideToggle('slow');
      });
  });


$(document).ready(function() {
  $('.grade_table').hide();
});

$(document).ready(
  function() {
      $(".grade_btn").click(function() {
          $(".grade_table").toggle();
      });
  });


var $x = jQuery.noConflict();

$x(document).ready(function () {
  $x("#subjects").hide();
  $x("select[name=designation]").change(function(){
    var selectedOption = $x(this).find('option:selected');
    if(selectedOption.hasClass('student')){
      $x("#subjects").show('slow');
    }
    else{
      $x("#subjects").hide('slow');
    }
  });
});
//Get the button
var mybutton = document.getElementById("top_button");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

$(document).ready(function(){
  $("input[name='option']").on('change',function(){
    var initial = $("input[name='option']:checked").val();
    console.log($("input[name='option']:checked").val());
    if(initial == 'Student'){
      $("#select-course").css('display','block');
    }else{
      $("#select-course").css('display','none');
    }
  });
});

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
  {
    mybutton.style.display = "block";
  } 
  
  else
  {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function back_to_top() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()