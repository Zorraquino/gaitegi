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
            default: 'es',
            autoDetect: 'document',
            translations: {
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
                },
                eu: {
                    consentModal: {
                        title: 'EU Configuración de cookies',
                        description: 'Utilizamos cookies propias y de terceros para analizar nuestros servicios y mostrarte publicidad relacionada con tus preferencias, en base a un perfil elaborado a partir de tus hábitos de navegación (por ejemplo, páginas visitadas).',
                        acceptAllBtn: 'Aceptar todas',
                        acceptNecessaryBtn: 'Rechazar todas',
                        showPreferencesBtn: 'Configurar'
                    },
                    preferencesModal: {
                        title: 'EU Centro de preferencias de Privacidad',
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