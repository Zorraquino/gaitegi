import { Loader } from '@googlemaps/js-api-loader';
import { Marker } from '@googlemaps/adv-markers-utils';

const loader = new Loader({
    apiKey: 'AIzaSyAkTrmkBRD3hhYqYwH4z1Po-rtXklOwjfY',
    version: 'weekly',
    libraries: ['marker']
});

const center = { lat: 43.23219238335117, lng: -2.8586940357359456 };
const mapElement = document.getElementById('map');

export async function loadGoogleMapsScript() {
    await loader.importLibrary('maps');
    await loader.importLibrary('marker');
}

export function initMap() {
    if (mapElement) {
        const map = new google.maps.Map(mapElement, {
            center: center,
            zoom: 16,
            mapId: 'gaitegi-map'
        });
        const marker = new Marker({
            map: map,
            position: center,
            title: "Gaitegi",
        });
    }
}