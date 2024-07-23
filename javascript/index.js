

// hambuger menur behaviour;
const hamburgerMenu = document.querySelector('.hamburger-menu');
const headerBar = document.querySelector('.navbar');

hamburgerMenu.addEventListener('click', () => {
hamburgerMenu.classList.toggle('open');
headerBar.classList.toggle('open');
});

// button scroll-to-login/sign behaviour;
const scrollToTopBtn = document.getElementById("scroll-to-top");
const header = document.querySelector("international");

function handleScroll() {
  if ((document.documentElement.scrollTop || document.body.scrollTop) > 550) {
    scrollToTopBtn.classList.add("show");
  } else {
    scrollToTopBtn.classList.remove("show");
  }
}

function scrollToTop(targetId) {
  const targetElement = document.getElementById(targetId);
  if (targetElement) {
    targetElement.scrollIntoView({ behavior: "smooth" });
     scrollToTopBtn.classList.remove("show");
  }
}

scrollToTopBtn.addEventListener("click", () => scrollToTop("international"));
window.addEventListener("scroll", handleScroll);