/* COOKIE CONSENT */
import * as cookieconsent from './cookieConsentConfig.js';

/* ANALYTICS */
import * as analytics from './analytics.js';

/* GSAP */
import { gsap } from 'gsap';

/* GOOGLE MAPS */
import { loadGoogleMapsScript, initMap } from './GoogleMaps.js';

var menuClosed = true;

document.addEventListener('livewire:navigated', () => { 
    /* LOAD COOKIE CONSENT & ANALYTICS */
    cookieconsent.initCookieConsent();
    analytics.initAnalytics();

    /* RESET MOBILE MENU */
    gsap.set('#mobileMenu', { x: '100%' });
    document.body.style.overflow = 'auto';
    menuClosed = true;

    if(document.getElementById('map')) {
        console.log('map found');
        loadGoogleMapsScript().then(() => {
            console.log('loading map');
            initMap();
        });
    }
})

document.addEventListener('click', (event) => {
    if (event.target.id === 'toggleMenu') {
        if (menuClosed) {
            gsap.to('#mobileMenu', { duration: 0.25, x: 0 });
            event.target.classList.add('bg-gaitegi-originals-black');
            event.target.querySelectorAll('svg path').forEach(element => {
                element.classList.add('stroke-gaitegi-originals-white');
            });
            document.body.style.overflow = 'hidden';
        } else {
            gsap.to('#mobileMenu', { duration: 0.25, x: '100%' });
            console.log(event.target);
            event.target.classList.remove('bg-gaitegi-originals-black');
            event.target.querySelectorAll('svg path').forEach(element => {
                element.classList.remove('stroke-gaitegi-originals-white');
            });
            document.body.style.overflow = 'auto';
        }
        menuClosed = !menuClosed;
    }
    if (event.target.closest('#mobileMenu') && event.target.tagName === 'a') {
        menuClosed = true;
    }
});