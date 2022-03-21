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






$(document).ready(function(){
  $("select").on('change',function(){
    var val = $(this).val();
    if(val == 3) {
      $.ajax({
        url: "/get-subjects", 
        success: function(result){
          if(result) {
            result.map(function(el,i) {
                var html = `
                    <div class="form-check">
                      <label class="form-check-label  " for="courses_id">
                        <input class="form-check-input" type="checkbox" name="courses_id[]"
                        id="${el.Courses}" value="${el.id}"> ${el.Courses}
                      </label>
                    </div>
                `;
                $(".courses").append(html);
            })
          }
      }});
    }

    else
    {
      $(".courses").html(''); 
    }

    
      // $( "select option:selected").each(function(){
      //     if($(this).attr("value")!="3")
      //     {
      //         $(".courses").hide(); 
      //     }

      //     else
      //     {
      //       $(".courses").show();
      //     }
      // });
  });
});


// $(document).ready(function()
// {
//   $('.register_btn').on('click', function(e)
//   {
//     e.preventDefault();

//     const courses_id = [];

//     $('.courses_id').each(function()
//     {
//       if($(this).is(":checked"))
//       {
//         courses_id.push($(this).val())
//       }

//       $.ajax
//       ({
//           url: "/insert-subjects",
//           type: 'POST',
//           data:
//           {
//             "_token": "{{ csrf_token() }}",
//             courses_id: courses_id
//           },
//           success:function(response)
//           {

//           }
//       });
//     });
//   });
// });