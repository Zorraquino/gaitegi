import Analytics from 'analytics'
import googleTagManager from '@analytics/google-tag-manager'

export function initAnalytics() {
  if(CookieConsent.acceptedCategory('analytics')){
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
      
  }
}