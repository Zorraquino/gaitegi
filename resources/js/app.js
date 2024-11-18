/* COOKIE CONSENT */
import * as cookieconsent from './cookieConsentConfig.js';

/* ANALYTICS */
import * as analytics from './analytics.js';

document.addEventListener('livewire:navigated', () => { 
    cookieconsent.initCookieConsent();
    analytics.initAnalytics();
})