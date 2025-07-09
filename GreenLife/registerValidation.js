function validation(){
    const fname = document.getElementById('fname').value.trim();
    const lname = document.getElementById('lname').value.trim();
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const gender = document.querySelector('input[name="gender"]:checked');

    if(fname === ""){
        alert("Please fill the first name");
        return false;
    }

    if(lname ===""){
        alert("Please fill the last name");
        return false;
    }

    if(username ===""){
        alert("Please fill the username");
        return false;
    }

    if(password === ""){
        alert("Don't keep password feild empty");
        return false;
    }

    if(confirmPassword === ""){
        alert("Don't keep confirm password feild empty");
        return false;
    }

    if (!gender) {
    alert("Please select your gender.");
    return false;
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false;
  }
}

