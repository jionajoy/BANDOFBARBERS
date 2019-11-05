
	function checkRePassword(document1,document2) {	
	  //var pwd = document.getElementById("password");
  	 
	  //var repwd = document.getElementById("rePassword");	  
	  if (document1.value != document2.value) {
		
		alert("The two passwords are not the same.");
          document2.value = "";
		document1.focus();
		return false;
	  }
	  
	  return true;
	}	

	function checkZIPCode(document) {
	  //var zip = document.getElementById("zip");
	  //var zip_msg = document.getElementById("zip_msg");
	  var isNum = /^[0-9]{4}$/.test(zip.value); // 4 digits
	  if(!isNum) {
		alert("4 digits are required.");
		document.focus();
		return false;
	  }
	   
	  return true;		
	}
	function reset_frm(document) {
		
		document.getElementById("zip_msg").innerHTML = "";	
	}	
	
	
function ValidateEmail(document)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//var email = document.getElementById("email");
    if(document.value.match(mailformat))
{
email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.value = "";
document.focus();
return false;
}
}

function inputAlphabet(document) {
var alphaExp = /^[a-zA-Z]+$/;
//var fname= document.getElementById("fname");
//var lname= document.getElementById("lname");    
    
if (document.value.match(alphaExp) ) {
    
return true;
} 
    
else {
alert("Name must be only alphabets.");
document.value = "";
document.focus();
return false;
}
}

function lengthDefine(document,min) {
if (document.value.length >= min ) {
return true;
} else {
alert("* Please enter minimum " + min + " characters *"); 
document.value = "";
document.focus();
return false;
}
}
