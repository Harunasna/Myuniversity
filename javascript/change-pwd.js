// check password behaviour 1;
let eyeIcon1 = document.getElementById("eyeIcon1");
let password1 = document.getElementById("password1");

eyeIcon1.onclick = function() {
  if(password1.type == "password") {
     password1.type = "text";
     eyeIcon1.src = "css/backgrounds/eye-open.png";
  } else{
     password1.type = "password";
     eyeIcon1.src = "css/backgrounds/eye-closed.png";
  }
}

// check password behaviour 2;
let eyeIcon2 = document.getElementById("eyeIcon2");
let password2 = document.getElementById("password2");

eyeIcon2.onclick = function() {
  if(password2.type == "password") {
     password2.type = "text";
     eyeIcon2.src = "css/backgrounds/eye-open.png";
  } else{
     password2.type = "password";
     eyeIcon2.src = "css/backgrounds/eye-closed.png";
  }
}
// check password behaviour 2;
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

