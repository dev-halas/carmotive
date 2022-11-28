const navSlide = () => {
    const burger = document.querySelector('.hamburger');
    const nav = document.querySelector('.header');
    const navLinks = document.querySelectorAll('.headerLinks li:not(.linkSubmenu)');

    const linkSubmenu = document.querySelector('.linkSubmenu');
    const submenu = document.querySelector('.sub-menu');



    // you can use forEach here too
    [].forEach.call(navLinks, link => {
        link.addEventListener('click', btnClick, false)
    })
    
    function btnClick() {
        // use Array function for lexical this
        [].forEach.call(navLinks, link => {
            // except for the element clicked, remove --active class
            if (link !== nav) link.classList.remove('--active');
        });
    
        // toggle active on the clicked button
        nav.classList.toggle('--active');
    }

    burger.addEventListener('click', () => {
        nav.classList.toggle('--active');
    });

    const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
    if (viewportWidth < 1024) {
        linkSubmenu.addEventListener('click', () => {
            submenu.classList.toggle('sumbenu--opened');
        });
    } 



}

navSlide();



const headerScroll = document.querySelector('.header');

window.onscroll = function() {
    let top = window.scrollY; 
    if (top >= 300) {
        headerScroll.classList.add('scrolled')
    }
    else {
        headerScroll.classList.remove('scrolled')
    }
}