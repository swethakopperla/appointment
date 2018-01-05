funtion phonenumber(inputtxt)  
{  
  var phoneno = /^\d{10}$/;  
  if(inputtxt.value.match(phoneno))  
  {  
        alert(" a valid Phone Number");
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }
}
