function nameValidation() {
    var name = document.getElementById("name");

    if (name.value == "" || name.value == null) {
        document.getElementById("nameErr1").style.opacity = 1;
    } else {
        document.getElementById("nameErr1").style.opacity = 0;
    }
}

function emailValidation() {
    var email = document.getElementById("email");

    if (email.value == "" || email.value == null) {
        document.getElementById("emailErr").style.opacity = 1;
    } else {
        document.getElementById("emailErr").style.opacity = 0;
    }
}

function countryValidation() {
    var country = document.getElementById("country");

    if (country.value == "" || country.value == null) {
        document.getElementById("countryErr").style.opacity = 1;
    } else {
        document.getElementById("countryErr").style.opacity = 0;
    }
}

function cityValidation() {
    var city = document.getElementById("city");



    if (city.value == "" || city.value == null) {
        document.getElementById("cityErr").style.opacity = 1;
    } else {
        document.getElementById("cityErr").style.opacity = 0;
    }
}

function addressValidation() {
    var address = document.getElementById("address");



    if (address.value == "" || address.value == null) {
        document.getElementById("addressErr").style.opacity = 1;
    } else {
        document.getElementById("addressErr").style.opacity = 0;
    }
}

function phoneValidation() {
    var phone = document.getElementById("phone");

    if (phone.value == "" || phone.value == null) {
        document.getElementById("phoneErr").style.opacity = 1;
    } else {
        document.getElementById("phoneErr").style.opacity = 0;
    }
}