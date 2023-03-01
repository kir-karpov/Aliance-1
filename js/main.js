const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
};

const openMenu = (event) => {
  // ф-я открыввает меню
  menu.classList.toggle("is-open"); // вешает класс на меню
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; // запрещается прокрутка сайта под менюшкой
  lightModeOn();
};

const closeMenu = (event) => {
  // ф-я закрывания меню меню
  menu.classList.remove("is-open"); // убирает класс на меню
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "hidden"; // возвращает прокрутку  сайта под менюшкой
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});
mMenuToggle.addEventListener("click", (event) => {
  // если меню открыто 1=закрыть меню, иначе 2= открыть
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
