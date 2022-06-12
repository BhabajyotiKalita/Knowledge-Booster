function onClickMenu(){
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("nav").classList.toggle("change");
	
	document.getElementById("menu-bg").classList.toggle("change-bg");
}

$(function() {

         $("#fname_error_message").hide();
         $("#sname_error_message").hide();
        $("#email_error_message").hide();
		 $("#mobile_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();
		 $("#securityqtn_error_message").hide();

         var error_fname = false;
         var error_sname = false;
         var error_sname = false;
		 var error_mnum = false;
         var error_password = false;
         var error_retype_password = false;
		 var error_securityqtn = false;

         $("#form_fname").focusout(function(){
            check_fname();
         });
         $("#form_sname").focusout(function() {
            check_sname();
         });
        $("#form_email").focusout(function() {
            check_email();
         });
		 $("#form_mnum").focusout(function() {
            check_mnum();
			});
         $("#form_password").focusout(function() {
            check_password();
         });
         $("#form_retype_password").focusout(function() {
            check_retype_password();
         });
		 $("#form_securityqtn").focusout(function(){
            check_securityqtn();
         });

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_sname() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#form_sname").val()
            if (pattern.test(sname) && sname !== '') {
               $("#sname_error_message").hide();
               $("#form_sname").css("border-bottom","2px solid #34F458");
            } else {
               $("#sname_error_message").html("Should contain only Characters");
               $("#sname_error_message").show();
               $("#form_sname").css("border-bottom","2px solid #F90A0A");
               error_sname = true;
            }
         }
		 
			function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }
		 
         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#form_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#form_retype_password").css("border-bottom","2px solid #34F458");
            }
         }

		 function check_mnum() {
            var pattern = /^[0-9]*$/;
            var mnum = $("#form_mnum").val();
            if (pattern.test(mnum) && mnum !== '') {
               $("#mobile_error_message").hide();
               $("#form_mnum").css("border-bottom","2px solid #34F458");
            } else {
               $("#mobile_error_message").html("Invalid Number");
               $("#mobile_error_message").show();
               $("#form_mnum").css("border-bottom","2px solid #F90A0A");
               error_mnum = true;
            }
         }
		 
		 function check_securityqtn() {
			 var securityqtn = $("#form_securityqtn").val();
			 if (securityqtn !== ''){
				 $("#securityqtn_error_message").hide();
				 $("#form_securityqtn").css("border-bottom","2px solid #34F458");
            } else {
               $("#securityqtn_error_message").html("Cannot be Null");
               $("#securityqtn_error_message").show();
               $("#form_securityqtn").css("border-bottom","2px solid #F90A0A");
               error_securityqtn = true;
            }
         }
			 

         $("#registration_form").submit(function() {
            error_fname = false;
            error_sname = false;
            error_email = false;
			error_mnum = false;
            error_password = false;
            error_retype_password = false;

            check_fname();
            check_sname();
            check_email();
			check_mnum();
            check_password();
            check_retype_password();
			check_securityqtn();

            if (error_fname === false && error_sname === false && error_email === false && error_mnum === false  && error_password === false && error_retype_password === false && error_securityqtn === false) {
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });