//Sign Up validations
const form = document.getElementById('sign-up-form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const contact = document.getElementById('contact');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const pass_reg_email = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const pass_reg_pass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
const pass_reg_phone = /^[6-9]\d{9}$/;

console.log("Running");


const setErrorMsg = (input, errorMssg) => {
    const formControl = input.parentElement;
//    console.log(formControl);
    const small = formControl.querySelector('small');
    small.innerText = errorMssg;
    formControl.className = "input-field error";
}   

const setSuccessMsg = (input) => {
    const formControl = input.parentElement;
//        console.log(formControl);
    formControl.className = "input-field success";
}

const validateFields = (e) => {
    let target = e.target;
    let name = e.target.name;
    let val = e.target.value.trim();
    
//    console.log(target);
//    console.log(name);
//    console.log(val);
    
    //Validate username
    if(name == "username") {
        if(val === "") {
            setErrorMsg(target, "Username cannot be blank.");
        }
        else if(val.length <= 2) {
            setErrorMsg(target, "Username minimum 3 characters.");
        }
        else {
            setSuccessMsg(target);
        }
    }
    
    //Validate email
    else if(name == "email") {
        if(val === "") {
            setErrorMsg(target, "Email cannot be blank.");
        }
        else {
            if(pass_reg_email.test(val)) {
                 setSuccessMsg(target);
            }
            else {
                setErrorMsg(target, "Not a valid email!");
            }
        }   
    }
    
    //Validate contact
    else if(name == "contact") {
        if(val === "") {
            setErrorMsg(target, "Phone Number cannot be blank.");
        }
        else if(pass_reg_phone.test(val)) {
            setSuccessMsg(target);
        }
        else {
            setErrorMsg(target, "Not a valid phone number!");
        }
    }
    
    //Validate password
    else if(name == "password") {
        if(val === "") {
            setErrorMsg(target, "Password cannot be blank.");
        }
        else if(pass_reg_pass.test(val)) {
            setSuccessMsg(target);
        }
        else {
            setErrorMsg(target, "Password must have a number and a special character.");
        }
    }
    
    //Validate confirm password
    else if(name == "cpassword") {
        const ps = document.getElementById('password');
        const passwordVal = ps.value.trim();
        if(val == "") {
            setErrorMsg(target, "Enter password to re-check.");
        }
        else if(val != passwordVal) {
            setErrorMsg(target, "Passwords do not match.");
        }
        else {
            setSuccessMsg(target);
        }
    }
}

//For final data validation
const successMsg = () => {
    let section = document.getElementById("sign-up-form");
    let formControl = section.getElementsByClassName("input-field");
    console.log(formControl);
    var count = formControl.length - 1;
    for(var i = 0; i < formControl.length; i ++) {
        if(formControl[i].className === "input-field success") {
            if(i === count) {
                console.log("Success");
                return true;
            }
        }
        else {
            return false;
        }
    }
}

//define validate function
const validate = () => {
    if(successMsg()) {
        return true;
    }
    else {
        return false;
    }
}  

username.addEventListener('input', validateFields);
email.addEventListener('input', validateFields);
contact.addEventListener('input', validateFields);
password.addEventListener('input', validateFields);
cpassword.addEventListener('input', validateFields);

//Event listeners for forms and various otherd form fields
form.addEventListener('submit', (e) => {
    if (!validate())    e.preventDefault(); 
});



