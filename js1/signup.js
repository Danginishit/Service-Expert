
var nameexp=/^[A-Za-z ]{3,20}$/;
var mobileexp=/^[0-9]+$/;
var emailexp=/^[a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;

//for Name or name=sname
function regname()
{
	var empt = document.frm.sname.value;
	if (empt === "")
	{
	
			confirm("Please Enter Name.");
			document.frm.sname.style.border='1px solid red';


	}
	else 
	{
		if(empt.match(nameexp))
		{
			/*alert('Code has accepted : you can try another');*/
			document.frm.semail.focus;
		} 
		else
		{
			alert("Name must be character. \n and \nEnter minimum 3 character.");
			document.frm.sname.autofocus=true;


		}
	}
}

function regtel()
{
	var empt = document.frm.stel.value;
	if (empt === "")
	{
	
			alert("Please Enter Mobile Number.");
	}
	else 
	{
		if(empt.match(mobileexp))
		{
			/*alert('Code has accepted : you can try another');*/
			document.frm.semail.focus;
		} 
		else
		{
			alert("Name must be character. \n and \nEnter minimum 3 character.");
			document.frm.sname.autofocus=true;


		}
	}

}

function conpass()
{
	var pass=document.frm.spass.value;
	var cpass=document.frm.sconfirmpass.value;
	if(cpass==="")
	{
		alert("Please enter Confirmpassword");
	}
	else
	{
		if(pass===cpass)
		{
			/*alert('Code has accepted : you can try another');*/
			alert("abc");
			
		} 
		else
		{
			alert("Enter Confirmpassword same as a Password");
			
		}
	}
}
function check()
{
	var name = document.frm.sname.value;
var tel = document.frm.stel.value;
var email = document.frm.semail.value;
var pass = document.frm.spass.value;
var cpass = document.frm.sconfirmpass.value;
var ck_pass="^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}";
var ck_cpass="^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}"; 



	if(name,tel,email,pass,cpass==="")
	{
		alert("Please enter valid data in all the fields.");
	}
	else
	{
		if(cpass===pass)
		{

				alert("Your data is registered successfully");
				window.location.href = "login.html";
				
				
		}
		else
		{
			alert("Both Password not matched");
		}
	}


}





/*var ck_name = /^[A-Za-z0-9]{3,20}$/;
var ck_tel = /^[0-9]{10}$/;
var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
var ck_pass =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_scpass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;


function validate(){
	
var name = document.frm.sname.value;
var tel = document.frm.stel.value;
var email = document.frm.semail.value;
var pass = document.frm.spass.value;
var scpass = document.frm.sconfirmpass.value;

  
var errors = [];
 
 if (!ck_name.test(name)) {
  errors[errors.length] = "Enter Your valid Name .";
 }

 if (!ck_tel.test(tel)) {
  errors[errors.length] = "Enter Your Mobile Number .";
 }
  
 if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }
 if (!ck_pass.test(pass)) {
  errors[errors.length] = "You must enter a valid Password min 6 char.";
 }

 if (!ck_scpass.test(scpass)) {
  errors[errors.length] = "You must enter Confirmpassword same as Password";
 }
 if(!pass===scpass){
  errors[errors.length] = "You must enter Confirmpassword same as Password";
 }
 
 
 
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 
 return true;
}

function reportErrors(errors){
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
 }
 alert(msg);
}
*/