//  GESTION DU RESPONSIVE DE LA NAV //

const hamburgerToggler = document.querySelector(".hamburger");
const navLinksContainer = document.querySelector(".navlinks-container");

const toggleNav = () => {
    hamburgerToggler.classList.toggle("open");

    const ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ? "false" : "true";
    hamburgerToggler.setAttribute("aria-expanded", ariaToggle);

    navLinksContainer.classList.toggle("open");
};

hamburgerToggler.addEventListener("click" , toggleNav);

new ResizeObserver(entries =>{
    if(entries[0].contentRect.width <= 900){
        navLinksContainer.style.transition = "transform 0.3s ease-out"}
    else{navLinksContainer.style.transition = "none"}
}).observe(document.body);

// FIN DU RESPONSIVE DE LA NAV //

document.querySelectorAll('.navlinks-container a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        window.scrollTo({
            top: targetSection.offsetTop,
            behavior: 'smooth'
        });

        if(navLinksContainer.classList.contains('open')){
            navLinksContainer.classList.remove('open');
            hamburgerToggler.classList.toggle("open");
        };
    });
});

const scrollToTop = document.querySelector(".text-logo a");
scrollToTop.addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
    
    if(navLinksContainer.classList.contains('open')){
        navLinksContainer.classList.remove('open');
        hamburgerToggler.classList.toggle("open");
    };
});
