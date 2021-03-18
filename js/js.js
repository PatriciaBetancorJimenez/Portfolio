"use strict";

//*****************************NAVBAR Animation

//smooth scrolling
$('a[href*="#"]').on("click", function (event) {
  let hash = this.hash;

  if (hash) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: $(hash).offset().top - 140 }, 800);
  }
});

let burgerButton = document.querySelector(".nav__burger");
let navList = document.querySelector(".nav__list");

burgerButton.addEventListener("click", function () {
  navList.classList.toggle("nav__mobile");
});

window.addEventListener("resize", function () {
  if (innerWidth > 900) {
    navList.classList.remove("nav__mobile");
  }
});
