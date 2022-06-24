const signInForm = document.getElementById('signInForm');
const email = document.getElementById('email');
const password = document.getElementById('password');

signInForm.addEventListener('submit', (e) =>{
    if(!validate()){
        e.preventDefault();
        invalidMessage();
    }
});

function validate(){
    if(email.value === 'admin@gmail.com' && password.value === 'admin') return true;
    else return false;
}

function invalidMessage(){
    var small = signInForm.querySelector('small');
    small.innerText = "Invalid email or password.";
    $(small).css('color', 'red').css('visibility', 'visible');
}

const searchbar = document.getElementById('searchbar');
const searchQuery = document.getElementById('searchQuery');