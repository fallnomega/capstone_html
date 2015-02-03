
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
    });
  });


        function formSubmit() 
        {

            var request;
            //bind submit event to our form
            var job = {
                "jreq":$("#req").val(),
                "jname": $("#recruiter_name").val(),
                "jemailf": $("#recruiter_email").val(),
                "jtitle":$("#position_title").val(),
                "jcompanyname":$("#companyname").val(),
                 "jcompanydescription":$("#companydescription").val(),
                 "jjobcountry":$("#jobcountry").val(),
                 "jjobstate":$("#jobstate").val(),
                 "jjobcity":$("#jobcity").val(),
                 "jjobzip":$("#zipcode").val(),
                 "jjobtype":$("#jobtype").val(),
                 "jjobtime":$("#jobtime").val(),
                 "jcompensation":$("#compensationtype").val(),
                 "jcurrency":$("#currency").val(),
                 "jjobskills":$("#jobskills").val(),
                 "jjobdescription":$("#jobdescription").val(),
                 "jjobbenefits":$("#jobbenefits").val(),
                 "jresponseurl":$("#responseurl").val(),
                 "jresponseemail":$("#responseemail").val(),
                 "boarda":$("#BoardA").val(),
                 "boardb":$("#BoardB").val(),
                 "boardc":$("#BoardC").val(),
                 }

            $.ajax
            ({
              type: "POST",
              url: "submit.php",
              data:job,
                dataType:'json',
                encode:true,
            });
        }

        function updateForm(){
          var backButton = "<form action='post.html'><button type='submit'>Back</button>";
          var successMessage = "Thank you,  the job has been posted to the selected job boards";
          return $("div.reg_form").html(successMessage + backButton);
        }

        function authSubmit(){

            var authenticate = {
                "jname":$("#user").val();
                "jpass":$("#pass").val();
            }


        }

