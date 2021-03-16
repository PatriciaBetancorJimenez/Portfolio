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
