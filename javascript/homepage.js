// hambuger menur behaviour;
const hamburgerMenu = document.querySelector('.hamburger-menu');
const headerBar = document.querySelector('.navbar');

hamburgerMenu.addEventListener('click', () => {
hamburgerMenu.classList.toggle('open');
headerBar.classList.toggle('open');
});

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

  // Get the button and div elements
  var button = document.getElementById("myButton");
  var div = document.getElementById("myDiv");
  
  // Add a click event listener to the button
  button.addEventListener("click", function() {
    // Toggle the display of the div
    if (div.style.display === "block") {
      div.style.display = "none";
      button.innerHTML = "show";
    } else {
      div.style.display = "block";
      button.innerHTML = "hide";
    }
  });