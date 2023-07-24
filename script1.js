function validateId()
{
	if(document.apply.plantiffid.value.length != 11)
	{
		alert("Id length must be 11 characters.");
		document.apply.plantiffid.focus();
		return false;
	}
 	return true;
}

function validatePName()
{
	let patt = /[0-9]+/;
	if(document.apply.plantiffname.value.match(patt))
		{
			alert("Name cannot contain digits.");
			document.apply.plantiffname.focus();
			return false;
		}
 	return true;
}
function validatePCity()
{
	let patt = /[0-9]+/;
	if(document.apply.plantiffcity.value.match(patt))
		{
			alert("City name cannot contain digits.");
			document.apply.plantiffcity.focus();
			return false;
		}
 	return true;
}
function validateDName()
{
	let patt = /[0-9]+/;
	if(document.apply.defendantname.value.match(patt))
		{
			alert("Name cannot contain digits.");
			document.apply.defendantname.focus();
			return false;
		}
 	return true;
}
function validateDCity()
{
	let patt = /[0-9]+/;
	if(document.apply.defendantcity.value.match(patt))
		{
			alert("City name cannot contain digits.");
			document.apply.defendantcity.focus();
			return false;
		}
 	return true;
}
function validateLawyer()
{
	let patt = /[0-9]+/;
	if(document.getElementById(law).value.match(patt))
		{
			alert("Name cannot contain digits.");
			document.getElementById(law).focus();
			return false;
		}
 	return true;
}
function validateEmail()
{
	let mail ="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
	let email = document.getElementById(email).value;
	if(!mail.test(email))
         {
            alert( " Length of email cannot be less than 6 or email has a wrong format");
            document.getElementById(email).focus();
            return false;
         }
	return true;	 
} 
function validatePhone()
{       
		  if(document.apply.plantiffphone.value.length!=10 || isNaN(document.apply.plantiffphone.value))
         {
            alert( " Length of phone must be 10 digits or phone should not contain a character" );
            document.apply.plantiffphone.focus() ;
            return false;
         }
		 return true;
}
function validateType(){
	   var c = document.apply.casetype.value;
		var isChecked=false;
		for(let i=0;i<c.length;i++){
         if(c[i].checked){
			  	isChecked=true;
		      break; } }
	if(!isChecked)
	{
     	alert("Please select case type.");
		return false;
   }
  else
  		return true;	  
}
function validatePRegion(){
	if(document.getElementById("pregion").selectedIndex==0)	  {
      alert("Please choose your country" );
      document.getElementById("pregion").focus() ;
      return false;
         }
     return true; 
}
function validateDRegion(){
	if(document.getElementById("dregion").selectedIndex==0)	  {
      alert("Please choose your country" );
      document.getElementById("dregion").focus() ;
      return false;
         }
     return true; 
}
function validateForm()
{
	if(!validateId())
		return false;
	if(!validatePName())
		return false;
	if(!validatePCity())
		return false;
	if(!validateDName())
		return false;
	if(!validateDCity())
		return false;
	if(!validateLawyer())
		return false;
	if(!validatePRegion())
		return false;
	if(!validateDRegion())
		return false;
	if(!validateEmail())
		return false;
	if(!validateType())
		return false;
	if(!validatePhone())
		return false;
	return true;
}
