import Analytics from 'analytics'
import googleTagManager from '@analytics/google-tag-manager'

export function initAnalytics() {
  if(CookieConsent.acceptedCategory('analytics')){
    console.log('Cookies Analíticas aceptadas');
    const analytics = Analytics({
        app: 'Gaitegi',
        plugins: [
          googleTagManager({
            containerId: 'GTM-K3MVXPCX'
          })
        ]
    })
    
    analytics.page()
  } else {
      console.log('Cookies Analíticas no aceptadas');
  }
}