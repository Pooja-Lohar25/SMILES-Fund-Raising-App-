
function formCheck(evt)
{
    
    var pass = document.changePass.pass;
    var cpass = document.changePass.cpass;
	if(!passVal(pass,cpass))
	{
		evt.preventDefault();
	}
	else {
		document.getElementById("resetP").removeEventListener("click",formCheck);
	}
}
function passVal(pass,cpass)
    {
       
        var expr  = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
        if(pass.value.length<8)
        {
            alert("Password must have atleast 8 characters");
            return false;
        }
        if(!pass.value.match(expr))
        {
            alert("Password must follow the given parameters");
            return false;
        }
        if(pass.value!=cpass.value)
         {
             alert("Confirm password does not match");
             return false;
         }
        
        return true;
    }