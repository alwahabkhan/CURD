

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function validateForm() {
  var email = document.forms["myForm"]["email"].value;
  var psw = document.forms["myForm"]["psw"].value;
  
  if (email == "") {
    alert("Please enter your Email.");
    return false;
  }
  
  if (psw == "") {
    alert("Please enter your password.");
    return false;
  }
  
  if (psw.length < 4) {
    alert("Password should be at least 4 characters long.");
    return false;
  }

  if (email.indexOf('@') === -1) {
    alert("Email must contain the '@' symbol.");
    return false;
  }

  // Add more validation rules as needed
  
  return true;
}





