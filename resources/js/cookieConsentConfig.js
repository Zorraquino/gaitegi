import * as CookieConsent from 'vanilla-cookieconsent';

export function initCookieConsent() {
    CookieConsent.reset();
    CookieConsent.run({
        categories: {
            necessary: {
                enabled: true,  // this category is enabled by default
                readOnly: true  // this category cannot be disabled
            },
            analytics: {}
        },
        guiOptions: {
            consentModal: {
                layout: 'box wide',
                position: 'bottom right',
                flipButtons: false,
                equalWeightButtons: true
            },
            preferencesModal: {
                layout: 'box',
                flipButtons: false,
                equalWeightButtons: true
            }
        },
        language: {
            default: 'eu',
            autoDetect: 'document',
            translations: {
                eu: {
                    consentModal: {
                        title: 'Cookieen konfigurazioa',
                        description: 'Gure zerbitzuak aztertzeko eta zure lehentasunekin lotutako publizitatea erakusteko, zure nabigazio-ohituretan oinarritutako profil batetik abiatuta (adibidez, bisitatutako orriak) cookie propioak erabiltzen ditugu.',
                        acceptAllBtn: 'Denak onartu',
                        acceptNecessaryBtn: 'Beharrezkoak bakarrik',
                        showPreferencesBtn: 'Konfiguratu'
                    },
                    preferencesModal: {
                        title: 'Pribatutasun Hobespenen Zentroa',
                        acceptAllBtn: 'Denak onartu',
                        acceptNecessaryBtn: 'Beharrezkoak bakarrik',
                        savePreferencesBtn: 'Uneko hautaketa onartu',
                        closeIconLabel: 'Itxi modala',
                        sections: [
                            {
                                title: 'Cookie Teknikoak',
                                description: 'Cookie hauek beharrezkoak dira webgunea funtzionatzeko eta ezin dira gure sistemetan desaktibatu. Oro har, zure ekintzei erantzunez ezartzen dira, hala nola, pribatutasun-hobespenak ezartzea, saioa hastea edo formularioak betetzea. Zure nabigatzailea konfiguratu dezakezu cookie hauek blokeatzeko edo horien berri emateko, baina guneak ez du behar bezala funtzionatuko. Cookie hauek ez dute identifikazio-informaziorik gordetzen.',
                                linkedCategory: 'necessary'
                            },
                            {
                                title: 'Analitika',
                                description: 'Cookie hauek erabiltzaileen portaera jarraitzeko eta aztertzeko aukera ematen digute, eta bereziki, bisitak eta trafiko iturriak zenbatzeko, gure gunea ebaluatu eta hobetzeko.',
                                linkedCategory: 'analytics',
                                cookieTable: {
                                    headers: {
                                        name: "Izena",
                                        domain: "Zerbitzua",
                                        description: "Deskribapena",
                                        expiration: "Irauntasuna"
                                    },
                                    body: [
                                        {
                                            name: "laravel_session",
                                            domain: "Gaitegi",
                                            description: "Laravel saioaren kontrola egiteko teknikoa.",
                                            expiration: "Ordu 1"
                                        },
                                        {
                                            name: "XSRF-TOKEN",
                                            domain: "Gaitegi",
                                            description: "SPAM eta BOTen aurkako kontrola.",
                                            expiration: "Ordu 1"
                                        },
                                        {
                                            name: "cc_cookie",
                                            domain: "Gaitegi",
                                            description: "Zure Cookieen gordetzearen inguruko zure erabakia gordetzeko cookiea.",
                                            expiration: "6 hilabete"
                                        }
                                    ]
                                }
                            }
                        ]
                    }
                },
                es: {
                    consentModal: {
                        title: 'Configuración de cookies',
                        description: 'Utilizamos cookies propias para analizar nuestros servicios y mostrarte publicidad relacionada con tus preferencias, en base a un perfil elaborado a partir de tus hábitos de navegación (por ejemplo, páginas visitadas).',
                        acceptAllBtn: 'Aceptar todas',
                        acceptNecessaryBtn: 'Rechazar todas',
                        showPreferencesBtn: 'Configurar'
                    },
                    preferencesModal: {
                        title: 'Centro de preferencias de Privacidad',
                        acceptAllBtn: 'Aceptar todas',
                        acceptNecessaryBtn: 'Rechazar todas',
                        savePreferencesBtn: 'Aceptar selección actual',
                        closeIconLabel: 'Cerrar modal',
                        sections: [
                            {
                                title: 'Cookies Técnicas',
                                description: 'Estas cookies son necesarias para que el sitio web funcione y no se pueden desactivar en nuestros sistemas. Por lo general, solo se configuran en respuesta a sus acciones realizadas al solicitar servicios, como establecer sus preferencias de privacidad, iniciar sesión o completar formularios. Puede configurar su navegador para bloquear o alertar sobre estas cookies, pero algunas áreas del sitio no funcionarán. Estas cookies no almacenan ninguna información de identificación.',
                                linkedCategory: 'necessary',
                                cookieTable: {
                                    headers: {
                                        name: "Nombre",
                                        domain: "Servicio",
                                        description: "Descripción",
                                        expiration: "Caducidad"
                                    },
                                    body: [
                                        {
                                            name: "laravel_session",
                                            domain: "Gaitegi",
                                            description: "Cookie técnica para control de sesión de Laravel.",
                                            expiration: "1 hora"
                                        },
                                        {
                                            name: "XSRF-TOKEN",
                                            domain: "Gaitegi",
                                            description: "Cookie para control anti-SPAM y anti-Bots.",
                                            expiration: "1 hora"
                                        },
                                        {
                                            name: "cc_cookie",
                                            domain: "Gaitegi",
                                            description: "Cookie para almacenar tu decisión acerca del almacenamiento de las Cookies.",
                                            expiration: "6 meses"
                                        }
                                    ]
                                }
                            },
                            {
                                title: 'Analítica',
                                description: 'Aunque el sistema de analítica anonimizado implementado en Gaitegi no hace uso de cookies, no registraremos ningún dato de analítica si así lo deseas.',
                                linkedCategory: 'analytics'
                            }
                        ]
                    }
                },
                en: {
                    consentModal: {
                        title: 'Cookie Settings',
                        description: 'We use our own and third-party cookies to analyze our services and show you advertising related to your preferences, based on a profile created from your browsing habits (e.g., pages visited).',
                        acceptAllBtn: 'Accept All',
                        acceptNecessaryBtn: 'Reject All',
                        showPreferencesBtn: 'Configure'
                    },
                    preferencesModal: {
                        title: 'Privacy Preferences Center',
                        acceptAllBtn: 'Accept All',
                        acceptNecessaryBtn: 'Reject All',
                        savePreferencesBtn: 'Accept Current Selection',
                        closeIconLabel: 'Close Modal',
                        sections: [
                            {
                                title: 'Technical Cookies',
                                description: 'These cookies are necessary for the website to function and cannot be disabled in our systems. They are usually set in response to actions made by you, such as setting your privacy preferences, logging in, or filling out forms. You can set your browser to block or alert you about these cookies, but some parts of the site will not work. These cookies do not store any personally identifiable information.',
                                linkedCategory: 'necessary',
                                cookieTable: {
                                    headers: {
                                        name: "Name",
                                        domain: "Service",
                                        description: "Description",
                                        expiration: "Expiration"
                                    },
                                    body: [
                                        {
                                            name: "laravel_session",
                                            domain: "Gaitegi",
                                            description: "Technical cookie for Laravel session control.",
                                            expiration: "1 hour"
                                        },
                                        {
                                            name: "XSRF-TOKEN",
                                            domain: "Gaitegi",
                                            description: "Cookie for anti-SPAM and anti-Bot control.",
                                            expiration: "1 hour"
                                        },
                                        {
                                            name: "cc_cookie",
                                            domain: "Gaitegi",
                                            description: "Cookie to store your decision regarding cookie storage.",
                                            expiration: "6 months"
                                        }
                                    ]
                                }
                            },
                            {
                                title: 'Analítica',
                                description: 'Although the anonymized analytics system implemented in Gaitegi does not use cookies, we will not record any analytics data if you wish.',
                                linkedCategory: 'analytics'
                            }
                        ]
                    }
                }
            }
        }
    });
    
    window.CookieConsent = CookieConsent;
}