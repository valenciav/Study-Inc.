const signInForm = document.getElementById('signInForm');
const username = document.getElementById('username');
const password = document.getElementById('password');

signInForm.addEventListener('submit', (e) =>{
    if(!validate()){
        e.preventDefault();
        invalidMessage();
    }
});

function validate(){
    if(username.value === 'admin' && password.value === 'admin') return true;
    else return false;
}

function invalidMessage(){
    var small = signInForm.querySelector('small');
    small.innerText = "Invalid username or password.";
    $(small).css('color', 'red').css('visibility', 'visible');
}

const searchbar = document.getElementById('searchbar');
const searchQuery = document.getElementById('searchQuery');

searchbar.addEventListener('submit', search());

function search(){
    if(searchQuery){
        return;
    }
}