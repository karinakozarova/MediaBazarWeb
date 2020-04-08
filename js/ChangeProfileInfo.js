function validateNewPasswordForm() {
    const password = $('#newPassword').val();
    const repeatPassword = $('#repeatPassword').val();
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
    var passwordResult = passwordRegex.test(password);

    if (password != repeatPassword) {
        alert("The two passwords does not match!");
        return false
    } else if (passwordResult == false) {
        alert("Password should contain at least 1 digit, at least 1 lower case letter, at least 1 upper case letter and should be at least 8 characters  long!");
        return false;
    } else {
        return true;
    }
}

function phonenumber(phone) {
    var intRegex = /[0-9 -()+]+$/;
    if ((phone.length < 6) || (!intRegex.test(phone))) {
        alert('Please enter a valid phone number.');
        return false;
    }
    return true;
}

function validateChangedInformation() {
    const firstName = $('#firstName').val();
    const lastName = $('#lastName').val();
    const phoneNumber = $('#phoneNumber').val();
    const email= $('#email').val();
    const region = $('#region').val();
    const country = $('#country').val();
    var letters = /^[A-Za-z]+$/;
    if (!firstName.match(letters)) {
        alert('first name must have alphabet characters only');
        return false;
    }
    if (!lastName.match(letters)) {
        alert('last name must have alphabet characters only');
        return false;
    }
    if (!phonenumber(phoneNumber)) {
        alert('Please enter a valid phone number');
        return false;
    }
    if (email.indexOf("@") == -1) {
        alert('Please enter a valid email');
        return false;
    }
    if (!region.match(letters)) {
        alert('Region must have alphabet characters only');
        return false;
    }
    if (!country.match(letters)) {
        alert('Country must have alphabet characters only');
        return false;
    }
    alert('Information changed successfully');
    return true;
}

