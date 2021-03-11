import "../scss/main.scss";

const hamburger = document.querySelector(".hamburger");
const mobileNav = document.querySelector(".mobileNav");
const bodyPage = document.querySelector("html");
const header = document.querySelector(".header");
const menuTop = document.querySelector(".menu-top-menu-container");

const handleClick = () => {
    menuTop.classList.toggle('noneDisplay');
	hamburger.classList.toggle('hamburger--active');
    bodyPage.classList.toggle('bodyOverflow');
	mobileNav.classList.toggle('mobileNav--active');
    header.classList.toggle('header--active');
    
}
hamburger.addEventListener('click', handleClick);