function val() {
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var p_address = document.getElementById("p_address").value;
    var error_messege = document.getElementById("error_messege");
    var text;


    if (id == "" || name == "" || email == "" || mobile == "" || gender == "" || dob == "" || p_address == "") {
        text = "Fill in all the required information.";
        error_messege.innerHTML = text;
        return false;
    }else {
                if (email.length < 6) {
                    text = "Please Enter your Email";
                    error_messege.innerHTML = text;
                    return false;
                }
                else {
                    if (id.length == 0) {
                        text = "UIN cannot be empty";
                        error_messege.innerHTML = text;
                        return false;
                    }
                    if (mobile.length != 10) {
                        text = "Mobile Number must be 10 digit";
                        error_messege.innerHTML = text;
                        return false;
                    }

                    if (name.length < 3) {
                        text = "Name is too short";
                        error_messege.innerHTML = text;
                        return false;
                    }
                    alert("Form Submited Sucessfully!")
                    return true;
                }
            }
        }
    
