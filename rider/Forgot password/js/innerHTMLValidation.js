var namepattern=/^[a-zA-Z .]+$/
 var phonepattern = /^\d{10}$/
 var emailpattern =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.([a-zA-Z]{2,4})$/
 var emailpattern2 =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*$/
 var idpattern=/^\d{6}$/;
function validateForm()
{
  x=document.forms["form1"]["password"];

 if(x.value.length <8)
   {
  alert("Please enter a valid password \n A strong password should contain more than 8 characters.");
  x.focus();
  return false;
 } 
 var e=x.value;
 y=document.forms["form1"]["conpassword"];
 if(y.value=="" || y.value != e)
 {
  y.value="";
   alert("Please enter the above password");
  x.focus();
  return false;
 }
 return true;
}