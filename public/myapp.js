    // Chosen validation
    $('.selected').chosen();
    $.validator.setDefaults({
      ignore: ":hidden:not(select)"
    });

    // validation of chosen on change
    if ($("select.selected").length > 0) {
      $("select.selected").each(function() {
        if ($(this).attr('required') !== undefined) {
          $(this).on("change", function() {
            $(this).valid();
          });
        }
      });
    }

    // validation
    $('.register_form').validate({
      errorPlacement: function(error, element) {
        console.log("placement");
        if (element.is("select.chosen-select")) {
          console.log("placement for chosen");
          // placement for chosen
          element.next("div.chzn-container").append(error);
        } else {
          // standard placement
          error.insertAfter(element);
        }
      }
    });


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