function onClickMenu(){
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("nav").classList.toggle("change");
	
	document.getElementById("menu-bg").classList.toggle("change-bg");
}


function startTime(){
	var today=new Date();
	var h=today.getHours();
	var ampm=h>=12?'PM':'AM';
	h=h%12;
	h=h?h:12;
	var m=today.getMinutes();
	var s=today.getSeconds();
	var weekday=new Array(7);
	weekday[0]="Sunday";
	weekday[1]="Monday";
	weekday[2]="Tuesday";
	weekday[3]="Wednesday";
	weekday[4]="Thursday";
	weekday[5]="Friday";
	weekday[6]="Saturday";
	var day=weekday[today.getDay()];
	var date=day+" "+","+" "+today.getDate()+"-"+(today.getMonth()+1)+"-"+today.getFullYear();
	m=checkTime(m);
	s=checkTime(s);
	document.getElementById("clock").innerHTML=h+":"+m+":"+s+" "+ampm;
	document.getElementById("date").innerHTML=date;
	var t=setTimeout(startTime,1000);
	}
	
function checkTime(i){
	if(i<10){i="0"+i};      //add zero in front of numbers less than 10
	return i;
}


window.addEventListener('scroll',function(){
	var scroll=document.querySelector('.scrollTop');
	scroll.classList.toggle("active" , window.scrollY > 300)
})


function scrollToTop(){
		document.body.scrollTop=0;
		behavior:'smooth'
}


function mySearchFunction(){
	document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction(){
	var input,filter,ul,a,i;
	input=document.getElementById("myInput");
	filter=input.value.toUpperCase();
	div=document.getElementById("myDropdown");
	a=div.getElementsByTagName("a");
	for(i=0 ; i<a.length ; i++){
		txtValue= a[i].textContent || a[i].innerText;
		if(txtValue.toUpperCase().indexOf(filter) > -1){
			a[i].style.display="";
		}
		else{
			a[i].style.display="none";
		}
	}
}



function admindash(){
document.body.scrollTop=0;
document.getElementById("topicshead").style="display:none";
document.getElementById("topicspost").style="display:none";
document.getElementById("viewusershead").style="display:none";
document.getElementById("viewuserspost").style="display:none";
document.getElementById("updateusershead").style="display:none";
document.getElementById("updateuserspost").style="display:none";
document.getElementById("deleteusershead").style="display:none";
document.getElementById("deleteuserspost").style="display:none";
document.getElementById("updatedata").style="display:none";
document.getElementById("admindashhead").style="display:block";
document.getElementById("admindashpost").style="display:block";
document.getElementById("dash").style="background:#1f45fc";
document.getElementById("users").style="background:#c11b17";
document.getElementById("topics").style="background:#c11b17";
document.getElementById("update").style="background:#c11b17";
document.getElementById("delete").style="background:#c11b17";
}

function topics(){
document.body.scrollTop=0;
document.getElementById("admindashhead").style="display:none";
document.getElementById("admindashpost").style="display:none";
document.getElementById("viewusershead").style="display:none";
document.getElementById("viewuserspost").style="display:none";
document.getElementById("updateusershead").style="display:none";
document.getElementById("updateuserspost").style="display:none";
document.getElementById("deleteusershead").style="display:none";
document.getElementById("deleteuserspost").style="display:none";
document.getElementById("updatedata").style="display:none";
document.getElementById("topicshead").style="display:block";
document.getElementById("topicspost").style="display:block";
document.getElementById("topics").style="background:#1f45fc";
document.getElementById("users").style="background:#c11b17";
document.getElementById("dash").style="background:#c11b17";
document.getElementById("update").style="background:#c11b17";
document.getElementById("delete").style="background:#c11b17";
}

function viewusers(){
document.body.scrollTop=0;
document.getElementById("admindashhead").style="display:none";
document.getElementById("admindashpost").style="display:none";
document.getElementById("topicshead").style="display:none";
document.getElementById("topicspost").style="display:none";
document.getElementById("updateusershead").style="display:none";
document.getElementById("updateuserspost").style="display:none";
document.getElementById("deleteusershead").style="display:none";
document.getElementById("deleteuserspost").style="display:none";
document.getElementById("updatedata").style="display:none";
document.getElementById("viewusershead").style="display:block";
document.getElementById("viewuserspost").style="display:block";
document.getElementById("users").style="background:#1f45fc";
document.getElementById("topics").style="background:#c11b17";
document.getElementById("dash").style="background:#c11b17";
document.getElementById("update").style="background:#c11b17";
document.getElementById("delete").style="background:#c11b17";
}

function updateusers(){
document.body.scrollTop=0;
document.getElementById("admindashhead").style="display:none";
document.getElementById("admindashpost").style="display:none";
document.getElementById("topicshead").style="display:none";
document.getElementById("topicspost").style="display:none";
document.getElementById("viewusershead").style="display:none";
document.getElementById("viewuserspost").style="display:none";
document.getElementById("deleteusershead").style="display:none";
document.getElementById("deleteuserspost").style="display:none";
document.getElementById("updatedata").style="display:none";
document.getElementById("updateusershead").style="display:block";
document.getElementById("updateuserspost").style="display:block";
document.getElementById("update").style="background:#1f45fc";
document.getElementById("topics").style="background:#c11b17";
document.getElementById("dash").style="background:#c11b17";
document.getElementById("users").style="background:#c11b17";
document.getElementById("delete").style="background:#c11b17";
}

function updatedata(){
document.body.scrollTop=0;
document.getElementById("admindashhead").style="display:none";
document.getElementById("admindashpost").style="display:none";
document.getElementById("topicshead").style="display:none";
document.getElementById("topicspost").style="display:none";
document.getElementById("viewusershead").style="display:none";
document.getElementById("viewuserspost").style="display:none";
document.getElementById("deleteusershead").style="display:none";
document.getElementById("deleteuserspost").style="display:none";
document.getElementById("updateusershead").style="display:block";
document.getElementById("updateuserspost").style="display:none";
document.getElementById("updatedata").style="display:block";
document.getElementById("update").style="background:#1f45fc";
document.getElementById("topics").style="background:#c11b17";
document.getElementById("dash").style="background:#c11b17";
document.getElementById("users").style="background:#c11b17";
document.getElementById("delete").style="background:#c11b17";
}

function deleteusers(){
document.body.scrollTop=0;
document.getElementById("admindashhead").style="display:none";
document.getElementById("admindashpost").style="display:none";
document.getElementById("topicshead").style="display:none";
document.getElementById("topicspost").style="display:none";
document.getElementById("viewusershead").style="display:none";
document.getElementById("viewuserspost").style="display:none";
document.getElementById("updateusershead").style="display:none";
document.getElementById("updateuserspost").style="display:none";
document.getElementById("updatedata").style="display:none";
document.getElementById("deleteusershead").style="display:block";
document.getElementById("deleteuserspost").style="display:block";
document.getElementById("delete").style="background:#1f45fc";
document.getElementById("topics").style="background:#c11b17";
document.getElementById("dash").style="background:#c11b17";
document.getElementById("users").style="background:#c11b17";
document.getElementById("update").style="background:#c11b17";
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