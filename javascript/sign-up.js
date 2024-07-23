
// check password behaviour 1;
let eyeIcon = document.getElementById("eyeIcon");
let password = document.getElementById("password");

eyeIcon.onclick = function() {
  if(password.type == "password") {
     password.type = "text";
     eyeIcon.src = "css/backgrounds/eye-open.png";
  } else{
     password.type = "password";
     eyeIcon.src = "css/backgrounds/eye-closed.png";
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

// TO-up button behaviour;
const scrollToTopBtn = document.getElementById("scroll-to-top");
const header = document.querySelector("header");

function handleScroll() {
  if ((document.documentElement.scrollTop || document.body.scrollTop) > 100) {
    scrollToTopBtn.classList.add("show");
  } else {
    scrollToTopBtn.classList.remove("show");
  }
}

function scrollToTop() {
  document.documentElement.scrollTop = 0;
  document.body.scrollTop = 0;
  header.style.transition = "all 0.3s ease";
  header.style.transform = "translateY(-100px)";
  setTimeout(() => {
    header.style.transform = "translateY(0)";
  }, 300);
}

scrollToTopBtn.addEventListener("click", scrollToTop);
window.addEventListener("scroll", handleScroll);