var valid = true;


function formCheck(evt)
{
	if(!formValidation())
	{
		evt.preventDefault();
	}
	else {
		document.getElementById("subButton").removeEventListener("click",formCheck);
	}
}
function formValidation()
	{

		var fname=document.register.first;
        var lname = document.register.last;
		var email=document.register.email;
		var user=document.register.user;
		var pass = document.register.pass;
        var cpass = document.register.cpass;
		if(nameVal(fname))
		{
			if(nameVal(lname))
			{
				if(emailVal(email))
				{
					if(passVal(pass,cpass))
					{
								return true;
					}

					else
					{

						return false;

					}

				}
				else
				{
					alert("invalid email");

					return false;

				}

			}
			else
			{
				alert("kindly enter only characters in your name");
				return false;

			}

		}
		else
			{
				alert("kindly enter only characters in your name");
				return false;

			}

	}
	function nameVal(name)
	{
		var letters=/^['A-Za-z']+$/;//regular expression in java script, A-Z for accepting capital letters and a-z is for accepting small letters
		return name.value.match(letters);//since 'letters' does not contain any specific value,rather it has a pattern so we can't use == we must use match() function

	}
	function emailVal(email)
	{
		var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		return email.value.match(mailformat);
	}
	function passVal(pass,cpass)
    {
		var expr  = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
        if(pass.value.length<8)
        {
            alert("Password must have atleast 8 characters");
            return false;
        }
        else if(!pass.value.match(expr))
        {
            alert("Password must follow the given parameters");
            return false;
        }
        else if(pass.value!=cpass.value)
         {
             alert("Confirm password does ...not match");
             return false;
         }
        
        return true;
    }
