"use strict";

//*****************************NAVBAR smooth scrolling & mobile resolution

let burgerButton = document.querySelector(".nav__burger");
let navList = document.querySelector(".nav__list");

//smooth scrolling
$('a[href*="#"]').on("click", function (event) {
  let hash = this.hash;

  if (hash) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: $(hash).offset().top - 140 }, 800);
    navList.classList.remove("nav__mobile"); //once target achieved, mobile ul is removed
  }
});
//on  burger click
burgerButton.addEventListener("click", function () {
  navList.classList.toggle("nav__mobile");
});
//on window resize
window.addEventListener("resize", function () {
  if (innerWidth > 900) {
    navList.classList.remove("nav__mobile");
  }
});
