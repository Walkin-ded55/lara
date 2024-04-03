const nav = document.querySelector(".nav");
const headerBurger = document.querySelector(".header__burger");
const navCross = document.querySelector(".nav__cross");

// вешаем событие, которе будет происходит при клике на бургер
headerBurger.addEventListener("click", function(){
  nav.style.left = "0";
;})
navCross.addEventListener("click", function(){
    nav.style.left = "-100" + "%";
  })