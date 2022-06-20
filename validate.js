const form = document.getElementById("regisForm");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmpw = document.getElementById("passwordconfirmation");
const gender = document.getElementById("gender");
const checkbox = document.getElementById("checkbox");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");

form.addEventListener('submit', e =>{
    if(!(validateFirstName() && validateLastName() && validateEmail() && validatePassword() && validatePasswordConfirm() && validateGender() && validateCheckbox())){
        e.preventDefault();
        alert("Please fill the information correctly.");
    }
    else{
        alert("Registration successful!");
    }
})

function showmsg(target, msg){
    const formContent = target.parentElement;
    var small = formContent.querySelector("small");
    small.innerText = msg;
    $(small).css('visibility', 'visible');
}

function clearmsg(target){
    const formContent = target.parentElement;
    var small = formContent.querySelector("small");
    $(small).css('visibility', 'collapse');
}

function validateFirstName(){
    const firstNameValue = firstName.value;
    console.log(firstNameValue);
    if(firstNameValue == "" || firstNameValue == null){
        showmsg(firstName, "Name can not be empty.");
        return false;
    }
    else if(firstNameValue.length == 1){
        showmsg(firstName, "Name is too short.");
        return false;
    }
    else{
        clearmsg(firstName);
        return true;
    }
}

function validateLastName(){
    const lastNameValue = lastName.value;
    if(lastNameValue == "" || lastNameValue == null){
        showmsg(lastName, "Name can not be empty.");
        return false;
    }
    else if(lastNameValue.length == 1){
        showmsg(lastName, "Name is too short.");
        return false;
    }
    else{
        clearmsg(lastName);
        return true;
    }
}

function validateEmail(){
    const emailValue = email.value.trim();
    const n = emailValue.length;
    if(emailValue === ""){
        showmsg(email, "Email can not be empty.");
        return false;
    }
    else{
        var at = emailValue.indexOf("@");
        var dot = emailValue.lastIndexOf(".", n);
        if(at < 1 || dot - at < 2 || dot == n-1){
            showmsg(email, "Email is invalid.");
            return false;
        }
    }
    clearmsg(email);
    return true;
}

function validatePassword(){
    const passwordValue = password.value.trim();
    const n = passwordValue.length;
    if(n == 0){
        showmsg(password, "Password can not be empty.");
    }
    if(n < 8 ){
        showmsg(password, "Password should be at least 8 characters.");
        return false;
    }
    else if(n > 30){
        showmsg(password, "Password is too long.");
        return false;
    }
    else{
        var space = passwordValue.indexOf(" ");
        if(space > -1){
            showmsg(password, "Password can not contain any space.");
            return false;
        }
    }
    clearmsg(password);
    return true;
}

function validatePasswordConfirm(){
    const passwordValue = password.value.trim();
    const confirmpwVal = confirmpw.value.trim();
    if(confirmpwVal === passwordValue){
        clearmsg(confirmpw);
        return true;
    }
    else{
        showmsg(confirmpw, "Password is incorrect.");
        return false;
    }
}

function validateGender(){
    var genderValue = gender.value;
    if(genderValue == 0){
        showmsg(gender, "Please pick a gender.");
        return false;
    }
    else{
        clearmsg(gender);
        return true;
    }
}

function validateCheckbox(){
    if(checkbox.checked){
        clearmsg(checkbox.parentElement);
        return true;
    }
    else{
        showmsg(checkbox.parentElement, "Please check this box to continue.");
        return false;
    }
}