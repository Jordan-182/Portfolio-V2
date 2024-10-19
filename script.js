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

const scrollToTopMobile = document.querySelector(".text-logo a");
scrollToTopMobile.addEventListener("click", (e) => {
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

// Split du texte à animer

let selection = Splitting();

// GSAP ANIMATIONS
gsap.registerPlugin(ScrollTrigger);

gsap.from('.intro--text--title' , {
    x: -400 ,
    opacity: 0
});

gsap.from('.intro--text--subtitle' , {
    x: 400 ,
    opacity: 0
});

gsap.from('.about--title' , {
    x: -400 ,
    opacity: 0 ,
    scrollTrigger: {
        trigger: '.about',
        start: 'top 75%',
        end: 'bottom bottom',
        scrub: true ,
        markers: false
    }
});

gsap.from('.about--illustration' , {
    x: 50 ,
    opacity: 0 ,
    scrollTrigger: {
        trigger: '.about--illustration',
        start: 'top center',
        end: '50% center',
        scrub: true ,
        markers: false
    }
});

gsap.from(selection[0].chars , {
    color: "#0F282F",
    stagger: 0.5,
    scrollTrigger: {
        trigger: '.about',
        start: 'top center',
        end: '50% center',
        scrub: true ,
        markers: false
    }
});

gsap.from('.projects--title' , {
    x: -400 ,
    opacity: 0 ,
    scrollTrigger: {
        trigger: '.projects',
        start: 'top 75%',
        end: '50% 75%',
        scrub: true ,
        markers: false
    }
});

gsap.from('.projects--card' , {
    y: 400 ,
    opacity: 0 ,
    stagger: 0.2 ,
    scrollTrigger: {
        trigger: '.projects',
        start: 'top 75%',
        end: 'bottom bottom',
        scrub: true ,
        markers: false
    }
});

gsap.from('.realisations--title' , {
    x: -400 ,
    opacity: 0 ,
    scrollTrigger: {
        trigger: '.realisations',
        start: 'top 75%',
        end: 'bottom bottom',
        scrub: true ,
        markers: false
    }
});

gsap.from('.realisations--card' , {
    y: 100 ,
    opacity: 0 ,
    scrollTrigger: {
        trigger: '.realisations',
        start: 'top 75%',
        end: 'bottom bottom',
        scrub: true ,
        markers: false
    }
});

gsap.from('.contact--title' , {
    x: -400 ,
    opacity: 0 ,
    scrollTrigger: {
        trigger: '.contact',
        start: 'top 75%',
        end: '50% bottom',
        scrub: true ,
        markers: false
    }
});

gsap.from('.contact--container' , {
    y: 200 ,
    opacity: 0 ,
    scrollTrigger: {
        trigger: '.contact',
        start: 'top 75%',
        end: 'bottom bottom',
        scrub: true ,
        markers: false
    }
});

// LENIS SMOOTH SCROLL

// Initialize a new Lenis instance for smooth scrolling
const lenis = new Lenis();

// Listen for the 'scroll' event and log the event data to the console
lenis.on('scroll', (e) => {
  console.log(e);
});

// Synchronize Lenis scrolling with GSAP's ScrollTrigger plugin
lenis.on('scroll', ScrollTrigger.update);

// Add Lenis's requestAnimationFrame (raf) method to GSAP's ticker
// This ensures Lenis's smooth scroll animation updates on each GSAP tick
gsap.ticker.add((time) => {
  lenis.raf(time * 1000); // Convert time from seconds to milliseconds
});

// Disable lag smoothing in GSAP to prevent any delay in scroll animations
gsap.ticker.lagSmoothing(0);