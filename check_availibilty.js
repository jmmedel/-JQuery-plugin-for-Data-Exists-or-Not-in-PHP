//check_availibilty.js  
$.fn.availibilityCheck = function(){  

         $(this).on('blur', function(){  
              var input_value_username = $('#username').val();  
              var input_value_email = $('#email').val(); 
              var input_type = $(this).data("type");  
              var feedback = $('.invalid-feedback'); 
            
              if(input_value_username == '')  
              {  
                   feedback.html("* Required Field Username");  
              }
             else
              {  
                   feedback.html("");  
                   $.ajax({  
                        url:"check.php",  
                        method:"POST",  
                        data:{input_value:input_value_username, input_type:input_type},  
                        success:function(data)  
                        {  
                             feedback.html(data);  
                        },  
                        error:function(){  
                             //Something went wrong  
                        }  
                   });  
              }  
         });  
   
}  