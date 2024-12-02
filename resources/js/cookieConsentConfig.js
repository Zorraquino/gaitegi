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
                // position: 'left right',
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
                        description: 'Gure zerbitzuak aztertzeko eta zure lehentasunekin lotutako publizitatea erakusteko, zure nabigazio-ohituretan oinarritutako profil batetik abiatuta (adibidez, bisitatutako orriak) cookie propioak eta hirugarrenen cookieak erabiltzen ditugu.',
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
                                title: 'Cookie Analitikoak',
                                description: 'Cookie hauek erabiltzaileen portaera jarraitzeko eta aztertzeko aukera ematen digute, eta bereziki, bisitak eta trafiko iturriak zenbatzeko, gure gunea ebaluatu eta hobetzeko.',
                                linkedCategory: 'analytics'
                            },
                            {
                                title: 'Informazio gehiago',
                                description: 'Cookieak nola erabiltzen ditugun jakiteko, kontsultatu gure <a href="https://gaitegi.com/politica-cookies.html" target="_blank">pribatutasun politika</a>.'
                            }
                        ]
                    }
                },
                es: {
                    consentModal: {
                        title: 'Configuración de cookies',
                        description: 'Utilizamos cookies propias y de terceros para analizar nuestros servicios y mostrarte publicidad relacionada con tus preferencias, en base a un perfil elaborado a partir de tus hábitos de navegación (por ejemplo, páginas visitadas).',
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
                                linkedCategory: 'necessary'
                            },
                            {
                                title: 'Cookies Analíticas',
                                description: 'Estas cookies nos permiten realizar el seguimiento y análisis del comportamiento de los usuarios de la página, y en concreto, contar las visitas y fuentes de tráfico para poder evaluar el rendimiento de nuestro sitio y mejorarlo.',
                                linkedCategory: 'analytics'
                            },
                            {
                                title: 'Más información',
                                description: 'Para obtener más información sobre cómo utilizamos las cookies, consulte nuestra <a href="https://gaitegi.com/politica-cookies.html" target="_blank">política de privacidad</a>. '
                            }
                        ]
                    }
                }
            }
        }
    });
    
    window.CookieConsent = CookieConsent;
}