function validation(){
    const fullname = document.getElementById('fullname').value.trim();
    const email = document.getElementById('email').value.trim();
    const contact = document.getElementById('contact').value;
    const comment = document.getElementById('comment').value;
    
    if(fullname === ""){
        alert("Please enter the Full name");
        return false;
    }

    if(email ===""){
        alert("Please enter your email");
        return false;
    }

    if(contact ===""){
        alert("Please fill your contact ");
        return false;
    }

    if(comment === ""){
        alert("Don't keep the message feild empty");
        return false;
    }

}