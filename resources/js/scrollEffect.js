window.addEventListener("scroll", () => {
    const headerNav = document.querySelector('header');

    if (window.scrollY > 0) {
        headerNav.classList.add("shadow", "bg-[#1a1919]"); // Add new classes when scrolling
        headerNav.classList.remove("bg-transparent"); // Remove the default class
    } else {
        headerNav.classList.remove("shadow", "bg-gray-900");
        headerNav.classList.add("bg-transparent"); // Reapply default class when at the top
    }
})


const progress = document.getElementById('progress');
const home3rdSection = document.getElementById("home-third-section");
const contentsPara = document.querySelectorAll(".content-para");
const contentTitle = document.querySelectorAll(".third-section-title");
let currentIndex = 0; // Track which content is showing
let scrollCount = 0;

console.log(contentTitle);


function changeContent(direction) {
    if (direction === "down" && currentIndex < contentsPara.length - 1) {
        contentsPara[currentIndex].classList.remove("active");
        contentTitle[currentIndex].classList.remove("active");
        currentIndex++;
        contentsPara[currentIndex].classList.add("active");
        contentTitle[currentIndex].classList.add("active");

        // update progress
        if (currentIndex === 0) {
            progress.style.height = "40%"
        } else {
            progress.style.height = (currentIndex / (contentsPara.length - 1)) * 100 + "%";

        }
    } else if (direction === "up" && currentIndex > 0) {
        contentsPara[currentIndex].classList.remove("active");
        contentTitle[currentIndex].classList.remove("active");
        currentIndex--;
        contentsPara[currentIndex].classList.add("active");
        contentTitle[currentIndex].classList.add("active");

        // update progress
        if (currentIndex === 0) {
            progress.style.height = "10vh"
        } else {
            progress.style.height = (currentIndex / (contentsPara.length - 1)) * 100 + "%";

        }
    }
}

function handleScroll(event) {
    // event.preventDefault(); // Prevent page scrolling

    let direction = event.deltaY > 0 ? "down" : "up";
    changeContent(direction);
}

home3rdSection.addEventListener("wheel", handleScroll, { passive: true });
