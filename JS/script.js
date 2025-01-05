function validation(event) {
    var firstname = document.getElementById("fname").value;
    if (firstname === '') {
        alert("Enter Your First Name!");
        return;
    }
    var lastname = document.getElementById("lname").value;
    if (lastname === '') {
        alert("Enter Your Last Name!");
        return;
    }
    var email = document.getElementById("email").value;
    if (email === '') {
        alert("Enter Your Email!");
        return;
    }
    var pass = document.getElementById("pass").value;
    if (pass === '') {
        alert("Enter Your Password!");
        return;
    }
    var passc = document.getElementById("passc").value;
    if (passc === '') {
        alert("Enter Your Password Confirmation!");
        return;
    }

    if (passc !== pass) {
        alert("The Password Confirmation is Wrong!");
        return;
    }

    var r = confirm("Are You Sure To Continue?!");
    if (r === true) {
        document.getElementById("registerForm").submit();
    }
}
