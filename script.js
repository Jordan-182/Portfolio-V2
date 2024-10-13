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


// Cette partie gère le scroll au clic des liens de la nav

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

// Cette partie gère la classe active de la nav qui met l'indicateur sous le lien correspondant à la section en lecture

const sections = document.querySelectorAll('section'); // Récupère les sections correspondant aux liens de la nav
const links = document.querySelector('.navlinks-container a'); // Récupère les liens de la nav

const observerOptions = {
    root: null, // Utilise la fenêtre du navigateur comme root
    rootMargin: '0px',
    threshold: 0.5 // A changer selon les besoins (0.5 signifie que 50% de la section doit être visible)
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const id = entry.target.getAttribute('id'); // Prends l'ID de la section
        const navLink = document.querySelector(`.navlinks-container a[href="#${id}"]`);

        if (entry.isIntersecting) {
            // Ajouter la classe active au lien correspondant
            links.querySelectorAll('a').forEach(link => link.classList.remove('active'));
            navLink.classList.add('active');
        } else{
            navLink.classList.remove('active');
        };
    });
}, observerOptions);

// Observer chaque section
sections.forEach(section => {
    observer.observe(section);
});

// Cette partie gère le scroll to top en cliquant sur le logo

const scrollToTop = document.querySelector(".nav-icon");
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