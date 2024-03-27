var fname=document.getElementById('fname');
var lname=document.getElementById('lname');
var email=document.getElementById('email');
var password=document.getElementById('password');
var cpassword=document.getElementById('cpassword');
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
var form=document.forms[0];
function validate(){
correct=true
    if(fname.value=="")
{
    correct=false;
    setError(fname,"First Name Required");
}
else
setSuccess(fname,"FirstName");
if(lname.value=="")
{
    correct=false;
    setError(lname,"Last Name Required");
}
else
setSuccess(lname,"LastName");

if(email.value==""){
    setError(email,"Email Cannot be empty");
    correct=false
}
else if(!emailRegex.test(email.value)){
    setError(email,"Please enter a valid email");
    correct= false;
}
else
setSuccess(email,'Email');

if(password.value==""){
    setError(password,"Password Cannot be empty");
    correct= false;
}
else
setSuccess(password,"Password");

if(cpassword.value==""){
    setError(cpassword,"Password Cannot be empty");
    correct= false;
}
else if(password.value!=cpassword.value){
setError(cpassword,"Password does not match");
cpassword.nextElementSibling.style.color="red";
correct=false;
}
else 
setSuccess(cpassword,"Confirm Password")

if(correct)
form.submit();
else 
return false;

}
function setError(element,messg){
    element.nextElementSibling.textContent=messg;
    
    }
    function setSuccess(element,messg){
        element.nextElementSibling.textContent=messg; 
    }