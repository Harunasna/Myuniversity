// check password behaviour 3 for login page;
let eyeIcon3 = document.getElementById("eyeIcon3");
let password3 = document.getElementById("password3");

eyeIcon3.onclick = function() {
  if(password3.type == "password") {
     password3.type = "text";
     eyeIcon3.src = "css/backgrounds/eye-open.png";
  } else{
     password3.type = "password";
     eyeIcon3.src = "css/backgrounds/eye-closed.png";
  }
}
