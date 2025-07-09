function validation(){
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;

    if(username === ""){
        alert("Please fill the username");
        return false;
    }

    if(password === ""){
        alert("Don't keep password feild empty");
        return false;
    }
}