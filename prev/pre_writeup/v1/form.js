
$(document).ready(function() {
  
    // Setup form validation on the #register-form element
    $("#post_form").validate({
    
        // Specify the validation rules
        rules: {
            recruiter_name: "required",
            recruiter_email: {
                required: true,
                email: true
            },
            form_company: "required",
            form_ats: "required",
            form_tos: "required",
        
        
        },
        
        // Specify the validation error messages
        messages: {
            recruiter_name: "<br>Please enter your full name",
        
            recruiter_email: "<br>Please enter a valid email address",
  
        },
        
        submitHandler: function(form) 
        {
            var request;
            //bind submit event to our form
      


            var job = {
            	"name": $("#recruiter_name").val(),
            	"emailf": $("#recruiter_email").val(),
                "title":$("#position_title").val(),
                "req":$("#req").val(),
     

                 };

            $.ajax
            ({
            	type: "POST",
            	url: "submit.php",
            	data:job,
                dataType:'json',
                encode:true,
            });


            
           $("div.reg_form").html(function()
           	{
           		var successMessage = "Thank you,  " + job.name + " for submiting the registration request. " +
                "The following information has been submitted to eQuest Support for review :<hr />" + "<b>Name</b>: " + job.name + "<br /><b>Email: </b>" + 
                job.emailf +"<br/><b>Position Title: </b>" + job.title 
                + "<br/><b>Requsition Number:</b> " + job.req + "<br/> We will be emailing you shortly with steps on how to complete the activation of your account.";

           		var backButton = "<form action='post.html'><button type='submit'>Back</button>";
           		return successMessage  + backButton;
            });

            

        }


    });

  });



