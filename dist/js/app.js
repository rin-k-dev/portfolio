const ham = document.querySelector("#js-hamburger");
const nav = document.querySelector("#js-nav");

const onClickHamburger = () => {
    ham.classList.toggle("active");
    nav.classList.toggle("active");
}

ham.addEventListener("click", onClickHamburger);

const scrollBtn = document.querySelector(".page-top");
const btnVisibility = () => {
  if (window.scrollY > 400) {
      scrollBtn.style.visibility = "visible";
  } else {
      scrollBtn.style.visibility = "hidden";
  }
};
document.addEventListener("scroll", () => {
  btnVisibility();
});

const pagetopBtn = document.querySelector('#page-top');
pagetopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});



