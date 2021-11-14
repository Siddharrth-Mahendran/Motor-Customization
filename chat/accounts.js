// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
	
    var name = document.account.name.value;
    var email = document.account.email.value;
	var type = document.account.type.value;
	var pwd = document.account.pwd.value;
    var phone = document.account.phone.value;
	
    if(name=="") {
     document.getElementById("nameErr").innerHTML="! Please Enter the Name"
	   
	    return false;
    }
 
	 
   	else if(type=="0"){
		 document.getElementById("accountErr").innerHTML="! Please select atleast one type"
		 
		 return false;
	}
		
	else if(email==""){
		document.getElementById("emailErr").innerHTML="! Please Enter the Email"
		
		return false;
	}
	
    else if(pwd==""){
		document.getElementById("passwordErr").innerHTML="! Please Enter the Password"
		
		return false;
	}
	
	else if(repwd==""){
		document.getElementById("repasswordErr").innerHTML="! Please Re-enter the password "
		return false;
	}
	
	else if(phone==""){
		document.getElementById("phoneErr").innerHTML="! Please Enter the Mobile Number"
		
		return false;
	}
	
    
	else {
		
		return true;
           
	}
    
}

function validatename(evt)
{
	try
	{
if(window.event)
{
var charcode=window.event.keyCode;	
}
else if(evt)
{
	var charcode=evt.which;
}
else{
	return true ;
}
if((charcode>64 && charcode<91) || (charcode>96 && charcode<123))
{
	document.getElementById("nameErr").innerHTML=""
	return true;
}
else{
	document.getElementById("nameErr").innerHTML="Only Alhpabets Allowed"
	return false;
	}}
	catch(err)
	{
		alert(err.Description);
	}
}

function validatephone()
{
try
	{
if(window.event)
{
var charcode=window.event.keyCode;	
}
else if(evt)
{
	var charcode=evt.which;
}
else{
	return true ;
}
if(charcode<48  || charcode>57)
{
	document.getElementById("phoneErr").innerHTML="Only numbers Allowed"
	return false;
	}
else{
	
	document.getElementById("phoneErr").innerHTML=""
	return true;

	}}
	catch(err)
	{
		alert(err.Description);
	}
}
	

function validatepwd()
{
check_pass();
}

function check_pass()
{
var pwd=document.getElementById("pwd").value;
var meter=document.getElementById("meter");
var no=0;
if(pwd!="")
{
	if(pwd.length<=6) 
	{
		no=1;
	}
	if(pwd.length>6 && (pwd.match(/[a-z]/) || pwd.match(/\d+/) || pwd.match(/.[!,@,#,$,%,^,&,*,?,~,(,),_,-]/) )) 
	{
		no=2; 
	}
	if(pwd.length>6 && ((pwd.match(/[a-z]/) && pwd.match(/\d+/)) || (pwd.match(/\d+/) && pwd.match(/.[!,@,#,$,%,^,&,*,?,~,(,),_,-]/)) || (pwd.match(/[a-z]/) && pwd.match(/.[!,@,#,$,%,^,&,*,?,~,(,),_,-]/)))) 
	{
		no=3;
	}
	
	
	if(pwd.length>6 && pwd.match(/[a-z]/) && pwd.match(/\d+/) && pwd.match(/.[!,@,#,$,%,^,&,*,?,~,(,),_,-]/))
	{
		no=4;
	}
	
    if(no==1){
        $("#meter").animate({width:'50px'},300);
        meter.style.backgroundColor="red";
        document.getElementById("pass_type").innerHTML="very weak";
    }
    if(no==2){
        $("#meter").animate({width:'100px'},300);
        meter.style.backgroundColor="#F5BCA9";
        document.getElementById("pass_type").innerHTML="weak";
    }
    if(no==3){
        $("#meter").animate({width:'150px'},300);
        meter.style.backgroundColor="#FF8000";
        document.getElementById("pass_type").innerHTML="Good";
    }
    if(no==4){
        $("#meter").animate({width:'200px'},300);
        meter.style.backgroundColor="#00FF40";
        document.getElementById("pass_type").innerHTML="strong";
    }
    else{
        meter.style.backgroundColor="";
        document.getElementById("pass_type").innerHTML="";
    }
}

}
		



function removenameErr()
{
	var name = document.account.name.value;
    
	if(name =="")
	{
		document.getElementById("nameErr").innerHTML="! Please Enter the Name"
	   
	    return false;
	}
	else{
		if (name.lenght > 3)
		{
			document.getElementById("nameErr").innerHTML="Name should be"
			
			return false;
		}
			
		document.getElementById("nameErr").innerHTML=""
	   
	    return true;
	}
		
}

function removetypeErr()
{
	var type = document.account.type.value;
    
	if(type =="")
	{
		document.getElementById("accountErr").innerHTML="! Please select atleast one account type"
	   
	    return false;
	}
	else{
		document.getElementById("accountErr").innerHTML=""
	   
	    return true;
	}
		
}

function removeemailErr()
{
	var email = document.account.email.value;
    
	if(email =="")
	{
		document.getElementById("emailErr").innerHTML="! Please Enter the Email"
	   
	    return false;
	}
	else{
		document.getElementById("emailErr").innerHTML=""
	   
	    return true;
	}
		
}

function removepwdErr()
{
	var pwd = document.account.pwd.value;
    
	if(pwd =="")
	{
		document.getElementById("passwordErr").innerHTML="! Please Enter the Password"
	   
	    return false;
	}
	else{
		document.getElementById("passwordErr").innerHTML=""
	   
	    return true;
	}
		
}

function removerepwdErr()
{
	var repwd = document.account.repwd.value;
    
	if(repwd =="")
	{
		document.getElementById("repasswordErr").innerHTML="! Please Re-enter the password "
	   
	    return false;
	}
	else{
		document.getElementById("repasswordErr").innerHTML=""
	   
	    return true;
	}
		
}

function removephoneErr()
{
	var phone = document.account.phone.value;
    
	if(phone =="")
	{
		document.getElementById("phoneErr").innerHTML="! Please Enter the Mobile Number"
	   
	    return false;
	}
	else{
		document.getElementById("phoneErr").innerHTML=""
	   
	    return true;
	}
		
}


		
	

	