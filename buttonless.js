const form=document.getElementById("courseFilter");
const major=document.getElementById("major");
const level=document.getElementById("level");
// const col = document.getElementsByClassName("col");

function submitform(){
    if(major.value != 0 && level.value != 0){
        console.log(major.value);
        console.log(level.value);
        form.submit();
        // filter();
    }
}

function filter(){
    // for(var i = 0; i<col.length; i++){
    //     console.log(col[i].getElementsByClassName("majorhidden")[0].indexOf(major));
    //     if(col[i].getElementsByClassName("majorhidden")[0].innerHTML.indexOf(major) == -1) col[i].style.display = "";
    //     // else 
    // }   
}