


	function runReport(){

		var report ={
			"reportMonth":$("#reportMonth").val(),
			// "email":$("#email").val(),
			// "resume":$("#resume").val(),
			// "jobreq":$("#jobreq").val(),
   //    "boardsrc":$("#boardsrc").val(),
		}



		 $.ajax
            ({
              type: "POST",
              url: "monthly.php",
              data:report,
                dataType:'json',
                encode:true,
                success: function(result){
                 return  alert(result);
                }
                
            });

	}


  // function updateForm(){
  //         var backButton = "<form action='http://www.google.com'><button type='submit'>Back</button>";
  //         var successMessage = "Thank you,  your application has been submitted for this position. We will review your resume and get back to you.";
  //         return $("div.applied").html(successMessage + backButton);
  //       }
