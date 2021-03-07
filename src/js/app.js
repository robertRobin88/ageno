import "../scss/main.scss";

const hamburger = document.querySelector(".hamburger");
const mobileNav = document.querySelector(".mobileNav");
const bodyPage = document.querySelector("body");
const menuTop = document.querySelector(".menuTop");

const handleClick = () => {
    menuTop.classList.toggle('noneDisplay');
	hamburger.classList.toggle('hamburger--active');
    bodyPage.classList.toggle('bodyOverflow');
	mobileNav.classList.toggle('mobileNav--active');
    
}
hamburger.addEventListener('click', handleClick);