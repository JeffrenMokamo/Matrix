const links = document.querySelectorAll('nav ul li a');

function setActiveLink(){
    const currentPath = document.location.pathname; 

    links.forEach(link =>{
        link.classList.remove('link-active');

        const linkPath = "/" + link.getAttribute('href');

        if(currentPath == linkPath){
            link.classList.add('link-active');
        }

    })

}

window.addEventListener('load', setActiveLink());

// Preload

const Preload = document.querySelector('.preload');

setTimeout(() => {
    
    Preload.style.display = 'none';

}, 3000);