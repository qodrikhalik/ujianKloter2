// UNAME
function unameval(username) {
    var pola = /^[a-z]{5,9}$/;
    return pola.test(username);
}


if (unameval('siska')) {
    alert("Username Is Valid");
} else {
    alert("Username Is Invalid");
}



// PASSWORD
function passval(password) {
    var pattern = /^[a-z]{5}[A-Z]{1}[0-9]{1}[ !"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]{1}$/;
    return pattern.test(password);
}

// password disini
if (passval('qodriK1!')) {
    alert('Password is valid')
} else {
    alert("Password Is Invalid");
}