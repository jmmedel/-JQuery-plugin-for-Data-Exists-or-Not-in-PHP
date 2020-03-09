//check_availibilty.js
$.fn.availibilityCheck = function() {
  $(this).on("blur", function() {
    var input_value_username = $("#username").val();
    var input_type = $(this).data("type");
    var feedback = $(".invalid-feedbackusername");

    if (input_value_username == "") {
      feedback.html("* Required Field Username");
    } else {
     
      $("#username").removeClass();
      $("#username").addClass("input_check form-control form-control-lg");
      $.ajax({
        url: "check.php",
        method: "POST",
        data: { input_value: input_value_username, input_type: input_type },
        success: function(data) {
            if($.trim(data) === "Username Exist"){
                $("#username").addClass("is-invalid");
                feedback.html("");
                feedback.html(data);
            }if($.trim(data) === "valid"){
                feedback.html("");
                $("#username").addClass("is-valid");
                
            }
            
        },
        error: function(data) {
          //Something went wrong

          feedback.html(data);
        }
      });
    }
  });
};
