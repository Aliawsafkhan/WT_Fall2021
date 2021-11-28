function validateFrom() 
            {
                var fname = document.getElementById("fname").value;
                var lname = document.getElementById("lname").value;

                if (fname == "" || lname == "" ) 
                {
                    ducument.getElementById("massage").innerHTML= "please enter all feilds" ;
                    return false;
                }
                return true
            }