function create() {

    document.getElementById("fname");
    document.getElementById("lname");
    document.getElementById("email");
    document.getElementById("password");
    document.getElementById("mobile");

    var f = new FormData();
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("e", email.value);
    f.append("p", password.value);
    f.append("m", mobile.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Done") {
                document.getElementById("msg2").innerHTML = t;
                document.getElementById("alertdiv").className = "alert alert-warning";
                document.getElementById("msgdiv").className = "d-block";
            } else {
                document.getElementById("msg2").innerHTML = t;
                document.getElementById("msgdiv").className = "d-block";
            }
        }
    }

    r.open("POST", "signupProcess.php", true);
    r.send(f);


}

function signin() {

    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var rememberme = document.getElementById("rememberme");

    var f = new FormData();
    f.append("e", email.value);
    f.append("p", password.value);
    f.append("r", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Done") {
                window.location = "home.php";
            } else {
                document.getElementById("msg2").innerHTML = t;
            }
        }
    };

    r.open("POST", "signinProcess.php", true);
    r.send(f);
}

var bm;
function forgotPassword() {

    var email = document.getElementById("email2");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Done") {
                alert("Verification Code has sent.Check your Inbox");
                var m = document.getElementById("forgetPasswordModal");
                bm = new bootstrap.Modal(m);
                bm.show();
            }
            alert(t);
        }
    }

    r.open("GET", "forgotpassword.php?e=" + email.value, true);
    r.send();

}


function showPassword(){
    
    var input = document.getElementById("npi");
    var eye = document.getElementById("e1");


    if(input.type == "password"){
        input.type = "text";
        eye.className="bi bi-eye";
    }else{
        input.type = "password";
        eye.className = "bi bi-eye-slash";
    }
}
function showpassword2(){

    var input = document.getElementById("npi2");
    var eye = document.getElementById("e2");

    if(input.type == "password"){
        input.type = "text";
        eye.className="bi bi-eye";
    }else{
        input.type = "password";
        eye.className = "bi bi-eye-slash";
    }
}

function changePassword(){

    var email = document.getElementById("email2");
    var npi = document.getElementById("npi");
    var npi2 = document.getElementById("npi2");
    var vcode = document.getElementById("vcode");

    var f = new FormData();
    f.append("e",email.value);
    f.append("n1",npi.value);
    f.append("n2",npi2.value);
    f.append("v",vcode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t = r.responseText;
            if(t == "Done"){

                bm.hide();
                alert("Password reset success")

            }else{
                alert(t);
            }
            
        }
    };

    r.open("POST","resetpassword.php",true);
    r.send(f);
}