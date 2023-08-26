
function validateEmail(email) {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

function validatePassword(password) {
    var passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return passwordPattern.test(password);
}

function showEmailHint() {
    var emailInput = document.getElementById("email");
    var emailIsValid = validateEmail(emailInput.value);

    if (emailInput.value === "") {
        document.getElementById("emailHint").innerHTML = "";
    } else if (!emailIsValid) {
        document.getElementById("emailHint").innerHTML = "Email must have format as 'Exam@gmail.com'";
    } else {
        document.getElementById("emailHint").innerHTML = "";
    }
}

function showPasswordHint() {
    var passwordInput = document.getElementById("password");
    var passwordIsValid = validatePassword(passwordInput.value);

    if (passwordInput.value === "") {
        document.getElementById("passwordHint").innerHTML = "";
    } else if (!passwordIsValid) {
        document.getElementById("passwordHint").innerHTML = "Password must contain at least one uppercase letter, one lowercase letter, one number and one special character";
    } else {
        document.getElementById("passwordHint").innerHTML = "";
    }
}