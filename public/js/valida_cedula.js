$(function() {	
	$("#cedula_error_message").hide();
	$("#telefono_error_message").hide();
	$("#email_error_message").hide();
	
	var error_cedula = false;
	var error_telefono = false;
	var error_email = false;	

	$("#form_cedula").focusout(function() {

		//check_cedula();
		
	});

	$("#form_telefono").focusout(function() {

		check_telefono();
		
	});

	$("#form_email").focusout(function() {

		check_email();
		
	});

	function check_cedula() {

		if (isNaN($('#form_cedula').val()) == true) {
			$("#cedula_error_message").html("Not a number");
			$("#cedula_error_message").show();
			error_number = true;
		} else {
			$("#cedula_error_message").hide();
		}	
	}

	function check_telefono() {

		if (isNaN($('#form_telefono').val()) == true) {
			$("#telefono_error_message").html("Not a number");
			$("#telefono_error_message").show();
			error_number = true;
		} else {
			$("#telefono_error_message").hide();
		}	
	}

	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Invalid email address");
			$("#email_error_message").show();
			error_email = true;
		}
	
	}

	$("#registration_form").submit(function() {
							
		error_cedula = false
		error_telefono = false															
		error_email = false;		
											
		check_cedula();
		check_telefono();
		check_email();
		
		if(error_cedula == false && error_telefono == false && error_email == false) {
			return true;
		} else {
			return false;	
		}

	});

});