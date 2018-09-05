$(document).ready(function(){

	/**
	 * jQuery Validate Form
	 *
	 * @author Rochelle Lewis <rlewis37@cnm.edu>
	 **/

	// begin handling function here
	$("#form").validate({

		//setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		//rules defining what is good or bad input
		rules: {
			name: {
				required: true
			},
			email: {
				email: true,
				required: true
			},
			message: {
				required: true,
				maxlength: 2000
			}
		},

		//error messages to display to the end user when rules above don't pass
		messages: {
			name: {
				required: "Please enter your name."
			},
			email: {
				email: "Please enter a valid email address.",
				required: "Please enter a valid email address."
			},
			message: {
				required: "Please enter a message.",
				maxlength: "2000 characters max."
			}
		},

		//AJAX submit the form data to back end if rules pass
		submitHandler: function(form) {
			$("#form").ajaxSubmit({
				type: "POST",
				url: $("#form").attr("action"),

				success: function(ajaxOutput) {
					//clear the output area's formatting
					$("#output-area").css("display", "");

					//write the server's reply to the output area
					$("#output-area").html(ajaxOutput);

					//reset the form if it was successful
					if($(".alert-success").length >= 1) {
						$("#form")[0].reset();
					}
				}
			})
		}
	}); //end validate function here

}); //end document.ready()
