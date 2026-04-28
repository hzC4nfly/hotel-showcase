
if(window.location == "http://localhost/test%20code/php_project/src/pages/contactpage.php"){

// input froms variables
const username = document.getElementsByName("username")[0];
const phone = document.getElementsByName("phone")[0];
const email = document.getElementsByName("email")[0];
const message = document.getElementsByName("message")[0];
const submit = document.getElementById("submit"); // submit button form

// to bring all p by busing parametre 
function bring_p(a){
    const er_msg = document.getElementById(`error_msg${a}`);
    return er_msg;
}

let error_input = [true,true] //username , phone errors 
//submit check
function btn_check(){
    if(error_input[0] || error_input[1] ||  email.value.length === 0 || message.value.length === 0 ){
        submit.disabled =  true;
        submit.style.background = '#00000080';
        submit.style.color = '#ffffff59';
    }else{
        submit.disabled =  false;
        submit.style.background = '#000';
        submit.style.color = '#fff';
    }
}
/* btn_check(); */

// username validation regex name
username.addEventListener('input',(e)=>{
    if(!/^[a-zA-Z](?:[a-zA-Z0-9]*[_ ]?[a-zA-Z0-9]*)$/.test(e.target.value) ){ //
        bring_p(1).innerText = "Invalid username. It must start with a letter, can include letters and numbers, and may have only one space or underscore.";
        error_input[0] = true; //if username false structure true in index 0
    }else{
        bring_p(1).innerText = '';
        error_input[0] = false;
    }
    btn_check();
});
// when user  out of focus the input check if we have a error (error_input[0]=true) so print the error msg
username.addEventListener('blur',(e)=>{
    if(e.target.value.length < 4 && !error_input[0]){
        bring_p(1).innerText = "Choose a username with 4–15 characters."
        error_input[0] = true;
    }
    btn_check();
})


// phone validation regex 
phone.addEventListener('input',(e)=>{
    if(!/^\+?(\d{1,3}[\s.-]?)?(\(\d{2,4}\)|\d{2,4})([\s.-]?\d{2,4}){2,3}$/.test(e.target.value) ||  e.target.value.length < 10 ||  e.target.value.length > 15 ){ // optional + (country code) ,spaces, dashes, parentheses
        error_input[1] = true; //if phone false structure  true in index 1
    }else{
        bring_p(2).innerText = '';
        error_input[1] = false;
    }
    btn_check();
});
// when user  out of focus the input check if we have a error (error_input[1]=true) so print the error msg
phone.addEventListener('blur',(e)=>{
    if(error_input[1] ){
        bring_p(2).innerText = 'Please enter a valid phone number with 10–15 digits, e.g. +1 212 555 0123 or (800) 555-0199';
    }
})

}



// lobbys cart in landingpage on mobile resolution 
const leftbtn = document.getElementById("leftlobbyBtn");
const rightbtn = document.getElementById("rightlobbyBtn");
const lobbycart1 = document.getElementsByClassName("cart")[5];
const lobbycart2 = document.getElementsByClassName("cart")[6];
const lobbycart3 = document.getElementsByClassName("cart")[7];
const lobbycart4 = document.getElementsByClassName("cart")[8];
const lobbycart5 = document.getElementsByClassName("cart")[9];
let numhelper = 5

rightbtn.addEventListener('click',()=>{
    if(numhelper == 9){
        document.getElementsByClassName("cart")[9].style.display = 'none';
        document.getElementsByClassName("cart")[5].style.display = 'block';
        numhelper = 5;
    }
    else{
        document.getElementsByClassName("cart")[numhelper].style.display = 'none';
        document.getElementsByClassName("cart")[numhelper+1].style.display = 'block';
        numhelper += 1;
    }
    
})

leftbtn.addEventListener('click',()=>{
    if(numhelper == 5){
        document.getElementsByClassName("cart")[5].style.display = 'none';
        document.getElementsByClassName("cart")[9].style.display = 'block';
        numhelper = 9;
    }
    else{
        document.getElementsByClassName("cart")[numhelper].style.display = 'none';
        document.getElementsByClassName("cart")[numhelper-1].style.display = 'block';
        numhelper -= 1;
    }
    
})


