function myFunction() {
    var y = document.getElementById("eyes_password");
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        y.classList.remove("fa-eye")
        y.classList.add("fa-eye-slash")
    } else {
        x.type = "password";
        y.classList.remove("fa-eye-slash")
        y.classList.add("fa-eye")
    }
}

var password = document.getElementById("password")
var email = document.getElementById("email")

function signin() {
    if (email.value == "")
        alert("Enter email")
    else if (email.value.indexOf("@", 0) < 0)
        alert("Errol value email!!")
    else if (email.value.indexOf(".", 0) < 0)
        alert("Errol value email!!")
    else if (password.value == "")
        alert("Enter password")
    else
        alert("Welcome " + email.value + " back")
}

var firstname = document.getElementById("firstname");
var lastname = document.getElementById("lastname");
var email = document.getElementById("email");
var password = document.getElementById("password");

function create() {
    if (firstname.value == "")
        alert("Enter value first name!!")
    else if (lastname.value == "")
        alert("Enter value last name!!")
    else if (email.value == "")
        alert("Enter value email!!")
    else if (email.value.indexOf("@", 0) < 0)
        alert("Errol value email!!")
    else if (email.value.indexOf(".", 0) < 0)
        alert("Errol value email!!")
    else if (password.value == "")
        alert("Errol value password!! ")
    else
        alert("Welcome " + email.value + " back")
}

function add_amt(id) {
    var amt_bx = document.getElementById(id);
    var amt = amt_bx.value;
    if (amt < 99) {
        amt_bx.value++;
    }
}

function sub_amt(id) {
    var amt_bx = document.getElementById(id);
    var amt = amt_bx.value;
    if (amt > 1) {
        amt_bx.value--;
    }
}