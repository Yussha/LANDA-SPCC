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


