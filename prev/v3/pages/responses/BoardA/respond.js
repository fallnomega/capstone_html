


	function responds(){

		var candidate ={
			"name":$("#name").val(),
			"email":$("#email").val(),
			"resume":$("#resume").val(),
			"jobreq":$("#jobreq").val(),
		}



		 $.ajax
            ({
              type: "POST",
              url: "apply.php",
              data:candidate,
                dataType:'json',
                encode:true,
            });

	}


  function updateForm(){
          var backButton = "<form action='../../index.php'><button type='submit'>Back</button>";
          var successMessage = "Thank you,  your application has been submitted for this position. We will review your resume and get back to you.";
          return $("div.applied").html(successMessage + backButton);
        }
