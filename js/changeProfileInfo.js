const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
const intRegex = /[0-9 -()+]+$/;
const letters = /^[A-Za-z]+$/;

function validateNewPasswordForm() {
    const currentPasswordField = $('currentPassword').val();
    const password = $('#newPassword').val();
    const repeatPassword = $('#repeatPassword').val();

    var passwordResult = passwordRegex.test(password);
    if (password != repeatPassword) {
        swal({
            title: "Incorrect input!",
            text: "The two passwords does not match!",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false
    } else if (passwordResult == false) {
        swal({
            title: "Incorrect input!",
            text: "Password should contain at least 1 digit, at least 1 lower case letter, at least 1 upper case letter and should be at least 8 characters  long!",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false;
    } else {
        return true;
    }
}

function validatePhoneNumber(phone) {
    if ((phone.length < 6) || (!intRegex.test(phone))) {
        swal({
            title: "Incorrect input!",
            text: "Please enter a valid phone number.",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false;
    }
    return true;
}

function validateEmail(email) {
    if (email.match(mailformat)) {
        return true;
    } else {
        swal({
            title: "Incorrect input!",
            text: "You have entered an invalid email address!",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false;
    }
}

function validateChangedInformation() {
    const firstName = $('#firstName').val();
    const lastName = $('#lastName').val();
    const phoneNumber = $('#phoneNumber').val();
    const email = $('#email').val();
    const region = $('#region').val();
    const country = $('#country').val();

    if (!firstName.match(letters)) {
        swal({
            title: "Incorrect input!",
            text: "First name must have alphabet characters only",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false;
    }

    if (!lastName.match(letters)) {
        swal({
            title: "Incorrect input!",
            text: "Last name must have alphabet characters only",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false;
    }

    if (!validatePhoneNumber(phoneNumber)) {
        return false;
    }

    if (!validateEmail(email)) {
        return false;
    }

    if (!region.match(letters)) {
        swal({
            title: "Incorrect input!",
            text: "Region must have alphabet characters only",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false;
    }

    if (!country.match(letters)) {
        swal({
            title: "Incorrect input!",
            text: "Country must have alphabet characters only",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
        return false;
    }
    return true;
}

$(window).on("load", function () {
    if (isSaved == "true") {
        swal("Done!", "Your information has been changed!", "success");
    }

    if (incorrect == "true") {
        swal({
            title: "Incorrect input!",
            text: "The current password does not match.",
            icon: "warning",
            button: true,
            dangerMode: true,
        });
    }
})

