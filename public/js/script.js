//STAR BUYER REGISTATION FORM VALIDATION
//STAR BUYER REGISTATION FORM VALIDATION
//STAR BUYER REGISTATION FORM VALIDATION

//PSW show & hide registation form
//PSW show & hide registation form
function myFunction() {
    var x = document.getElementById("reg_psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
};



//PSW buyer_reg validation
//PSW buyer_reg validation
function pass_validation() {
    var name = document.user_reg_form.user_name.value;
    var phone = document.user_reg_form.user_phone.value;
    var reg_phone = /^01\d{9}$/;
    //+ means 1 to any range we canalso put range {2,20}
    // /abc/ only same as
    // /^abc$/ pattern or like as
    //([a-zA-Z0-9\-]+\.) or([a-zA-Z0-9\-]+)\. same
    //[] outside mandatory
    // ? optional
    var regx = /^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z]{2,5})(\.[a-z]{2,5})?$/;
    var email = document.user_reg_form.user_email.value;
    
    
    //user_name validation
    if (name == null || name == "") {
        document.getElementById('name_msg').innerHTML = "Please enter your name";
        return false;
    }
    if (name.length < 3 || name.length > 15) {
        document.getElementById('name_msg').innerHTML = "Name length must be between 3 and 15";
        return false;
    }
    if (!isNaN(name)) {
        document.getElementById('name_msg').innerHTML = "Name cann't be a number";
        return false;
    }

    //user_email validation
    //function return false for invalid mail then it !false = true
    if (!regx.test(email)) {
        document.getElementById('email_msg').innerHTML = "Invalid email address";
        return false;
    }
    
    
    //phone number validation
    if (!reg_phone.test(phone)) {
        document.getElementById('phone_msg').innerHTML = "Invalid phone number";
        return false;
    }
    //user_mail validation
    //    if (email == null || email == "") {
    //        document.getElementById('email_msg').innerHTML = "Please enter your email address";
    //        return false;
    //    }
    //    if (email.length < 3 || email.length > 15) {
    //        document.getElementById('email_msg').innerHTML = "Name length must be between 3 and 15";
    //        return false;
    //    }




    //    if (password == null || password == "") {
    //        document.getElementById('psw_msg').innerHTML = "Password cannot be blank";
    //        document.getElementById('psw_msg').style.color = "red";
    //        return false;
    //    } 
    //    else {
    //        if (password.length < 8) {
    //            document.getElementById('psw_msg').innerHTML = "Length should be 8 character";
    //            document.getElementById('psw_msg').style.color = "red";
    //        }
    //
    //        if (password.length > 8) {
    //            document.getElementById('psw_msg').style.display = "none";
    //        }
    //    }
}


//PSW buyer_reg confirmation validation
//PSW buyer_reg confirmation validation
function confirm_psw() {
    var p1 = document.user_reg_form.reg_psw.value;
    var p2 = document.user_reg_form.con_psw.value;

    if (p1 == p2) {
        document.getElementById('con_msg').innerHTML = 'Password Match';
        document.getElementById('con_msg').style.color = 'green';
    } else {
        document.getElementById('con_msg').innerHTML = 'Password Not Match';
        document.getElementById('con_msg').style.color = 'red';

    }
}

//END BUYER REGISTATION FORM VALIDATION
//END BUYER REGISTATION FORM VALIDATION
//END BUYER REGISTATION FORM VALIDATION
