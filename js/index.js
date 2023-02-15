function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
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
        alert ("Welcome " + email.value + " back")
}