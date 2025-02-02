window.addEventListener("scroll", () => {
    const headerNav = document.querySelector('header');
    headerNav.classList.toggle("sticky", window.scrollY > 0);
})
