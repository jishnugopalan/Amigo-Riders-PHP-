 var namepattern=/^[a-zA-Z ]+$/
 var phonepattern = /^\d{10}$/
 var emailpattern =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.([a-zA-Z]{2,4})$/
 var emailpattern2 =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*$/
 var idpattern=/^\d{6}$/;

function validateForm()
{
 
 var x=document.forms["form1"]["header"];
 if (x.value.length <2)
   {
  
  alert("Please enter a valid blog header.It contains at least 3 letters");
    x.focus();
  return false;
   }
 
 else if(x.value.length>30)
   {
  x.value="";
 alert("Please enter less than 20 characters.");
  x.focus();
  return false;
   }


 

 x=document.forms["form1"]["blog"];

 if(x.value.length <5)
   {
alert("Please enter a valid blog.");
  x.focus();
  return false;
 } 
  else if(x.value.length>1500)
   {
  x.value="";
 alert("Please enter less than 1500 characters.");
  x.focus();
  return false;
 }
 /*else if (!namepattern.test(x.value))
   {
  x.value="";
alert("Please enter only alphabets.");
  x.focus();
  return false;
 }*/

// x=document.forms["form1"]["day"];

//  if(x.value=="")
//    {
// alert("Please enter a valid date.");
//   x.focus();
//   return false;
//  } 
 
//  x=document.forms["form1"]["nop"];

//  if(x.value<3)
//    {
// alert("Number of person should be greater than 3.");
//   x.focus();
//   return false;
//  } 

//  x=document.forms["form1"]["epf"];

//  if(x.value<100 )
//    {
// alert("Participation fee should be greater than or equal 100.");
//   x.focus();
//   return false;
//  } 
// else if(x.value>5000 ) 
// {
//   alert("Participation fee should be less than or equal 5000.");
//   x.focus();
//   return false;
// }


// x=document.forms["form1"]["ewp"];

//  if(x.value<1000 )
//    {
// alert("Winning price should be greater than or equal 1000.");
//   x.focus();
//   return false;
//  } 


// var x=document.forms["form1"]["des"];
//  if (x.value.length <5)
//    {
  
//   alert("Please enter a greater than 5.");
//     x.focus();
//   return false;
//    }
 
//  else if(x.value.length>250)
//    {
//   x.value="";
//  alert("Please enter less than 250 characters.");
//   x.focus();
//   return false;
//    }

 /*if((document.form1.gender[0].checked==false)&&(document.form1.gender[1].checked==false))
 {
  document.form1.gender[0].focus();
  document.getElementById('pointgendr').innerHTML='Please select a gender.';
  return false;
 }
 document.getElementById('pointgendr').innerHTML='';
 var dd=document.form1.dd.value;
 var mmm=document.form1.mmm.value;
 var yyyy=document.form1.yyyy.value;
 if(!validdate(dd,mmm,yyyy))
 {
  document.getElementById('pointdob').innerHTML="Plaese select a valid date.";
  return false;
 }
  
 document.getElementById('pointdob').innerHTML="";
 x= document.getElementById("address");
 if(x.value==null || x.value=="" )
 {
  x.value="";
  document.getElementById('pointadrs').innerHTML="Please enter the address.";
  x.focus();
  return false;
 }
 else if(x.value.length<20)
   {
  x.value="";
  document.getElementById('pointadrs').innerHTML="Please enter atleast 20 characters.";
  x.focus();
  return false;
 }
 document.getElementById('pointadrs').innerHTML="";

 x=document.form1.contctno;

 if(x.value=="")
 {
  
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter the contact number.";
  x.focus();
  return false;
 }
 else if(isNaN(x.value))
 {
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter only digits.";
  x.focus();
  return false;
 }
 else if(x.value.length!=10)
 {
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter only 10 digits.(Mobile number)";
  x.focus();
  return false;
 }
 else if(!phonepattern.test(x.value))
 {
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter a valid contact number.";
  x.focus();
  return false;
 }
 document.getElementById('pointcontct').innerHTML="";

 x=document.form1.email;
 if(x.value=="")
 {
  x.value="";
  document.getElementById('pointemail').innerHTML="Please enter the email id.";
  x.focus();
  return false;
 }
 else if(!emailpattern.test(x.value))
 {
  x.value="";
  document.getElementById('pointemail').innerHTML="Please enter a valid email address.";
  x.focus();
  return false;
 }
 document.getElementById('pointemail').innerHTML="";
 return confirm("Do you want to submit the form?");
}
        function validdate(dd,mm,yyyy)
 {
  var dateobj = new Date(yyyy, mm, dd);
  var datecurrent= new Date();
  if((dateobj.getMonth()!=mm)||(dateobj.getDate()!=dd)||(dateobj.getFullYear()!=yyyy)||(dateobj>datecurrent))
  {
   return false;
  }
  return true;
 }
 
 function confirmreset()
 {
  if(confirm("Do you want to reset the form?"))
{
 document.getElementById('pointfn').innerHTML="";
 document.getElementById('pointln').innerHTML="";
 document.getElementById('pointgendr').innerHTML="";
 document.getElementById('pointdob').innerHTML="";
 document.getElementById('pointadrs').innerHTML="";
 document.getElementById('pointcontct').innerHTML="";
 document.getElementById('pointemail').innerHTML="";
 return true;
}*/

 return true;
 }