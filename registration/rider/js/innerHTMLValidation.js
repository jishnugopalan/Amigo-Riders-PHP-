var namepattern=/^[a-zA-Z .]+$/
 var phonepattern = /^\d{10}$/
 var emailpattern =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.([a-zA-Z]{2,4})$/
 var emailpattern2 =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*$/
 var idpattern=/^\d{6}$/;
function validateForm()
{

x=document.forms["form1"]["name1"];
if(x.value.length<2 || x.value.length>45 || !namepattern.test(x.value) )
   {
  x.value="";
 alert("Please enter a valid name ");
  x.focus();
  return false;
 }
x=document.forms["form1"]["house"];
if(x.value.length<2 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter a valid house name ");
  x.focus();
  return false;
 }
 
 x=document.forms["form1"]["street"];
if(x.value.length<2 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter a valid street name.");
  x.focus();
  return false;
 }
/* x=document.forms["form1"]["dis"];
if(x.value.length<0 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter a valid district.");
  x.focus();
  return false;
 }
  x=document.forms["form1"]["state"];
if(x.value.length<0 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter a valid state");
  x.focus();
  return false;
 }*/
x=document.forms["form1"]["pin"];

 if(x.value.length<6 || x.value.length>6 || isNaN(x.value))
   {
  alert("Please enter a valid pin code \n in the format 123456.");
  x.focus();
  return false;
 } 
x=document.forms["form1"]["country"];
if(x.value.length<0 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter the house name which is less than 45 characters.");
  x.focus();
  return false;
 }
 x=document.forms["form1"]["work"];
if(x.value.length<2 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter the house name which is less than 45 characters.");
  x.focus();
  return false;
 }
x=document.forms["form1"]["exp"];
if(x.value.length<2 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter the house name which is less than 45 characters.");
  x.focus();
  return false;
 }
  x=document.forms["form1"]["ph"];

 if(x.value.length<10 || x.value.length>10 || isNaN(x.value))
   {
  alert("Please enter a valid phone number \n in the format 0123456789.");
  x.focus();
  return false;
 } 

  x=document.forms["form1"]["email"];
 if(x.value=="")
 {
  x.value="";
alert("Please enter the email id.");
  x.focus();
  return false;
 }
 else if(!emailpattern.test(x.value))
 {
  x.value="";
  alert("Please enter a valid email address.");
  x.focus();
  return false;
 }
 x=document.forms["form1"]["ans1"];
if(x.value.length<2 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter a valid answer");
  x.focus();
  return false;
 }
 x=document.forms["form1"]["ans2"];
if(x.value.length<2 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter a valid answer");
  x.focus();
  return false;
 }
 x=document.forms["form1"]["ans3"];
if(x.value.length<2 || x.value.length>45 )
   {
  x.value="";
 alert("Please enter a valid answer");
  x.focus();
  return false;
 }
 
 x=document.forms["form1"]["pass"];

 if(x.value.length <8)
   {
  alert("Please enter a valid password \n A strong password should contain more than 8 characters.");
  x.focus();
  return false;
 } 
 var e=x.value;
 y=document.forms["form1"]["pass1"];
 if(y.value=="" || y.value != e)
 {
  y.value="";
   alert("Please enter the above password");
  x.focus();
  return false;
 }
 return true;
}