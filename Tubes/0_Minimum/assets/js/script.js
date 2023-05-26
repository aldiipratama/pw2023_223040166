let toTop = document.querySelector(".scrollTop");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 150) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});
