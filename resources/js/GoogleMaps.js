import { Loader } from '@googlemaps/js-api-loader';
import { Marker } from '@googlemaps/adv-markers-utils';

const loader = new Loader({
    apiKey: 'AIzaSyAkTrmkBRD3hhYqYwH4z1Po-rtXklOwjfY',
    version: 'weekly',
    libraries: ['marker']
});

const centerPabellones = { lat: 43.23219238335117, lng: -2.8586940357359456 };
const centerOficinas = { lat: 43.2620715694228, lng: -2.9348107579051543 };
const mapElement = document.getElementById('map');
let currentMap = null; // Referencia global al mapa
let currentMarker = null; // Nueva referencia global al marcador
let currentLocation = centerOficinas; // Nueva variable para rastrear la ubicación actual

export async function loadGoogleMapsScript() {
    await loader.importLibrary('maps');
    await loader.importLibrary('marker');
}

export function initMap() {
    if (mapElement) {
        currentMap = new google.maps.Map(mapElement, {
            center: centerOficinas,
            zoom: 16,
            mapId: 'gaitegi-map',
            disableDefaultUI: true,
        });
        currentMarker = new Marker({
            map: currentMap,
            position: centerOficinas,
            title: "Gaitegi",
        });

        // Actualizar el enlace de "Abrir en Maps"
        const updateMapsLink = (location) => {
            currentLocation = location;
            const mapsLink = document.getElementById('open-in-maps');
            if (mapsLink) {
                mapsLink.href = `https://www.google.com/maps?q=${location.lat},${location.lng}`;
            }
        };

        const updateActiveButton = (activeId) => {
            ['oficinas_map', 'pabellones_map'].forEach(id => {
                const button = document.getElementById(id);
                if (button) {
                    if (id === activeId) {
                        button.classList.add('active');
                        button.classList.add('!bg-gaitegi-originals-black');
                        button.classList.add('!text-gaitegi-originals-white');
                    } else {
                        button.classList.remove('active');
                        button.classList.remove('!bg-gaitegi-originals-black');
                        button.classList.remove('!text-gaitegi-originals-white');
                    }
                }
            });
        };

        // Inicializar con la ubicación por defecto
        updateMapsLink(centerOficinas);
        updateActiveButton('oficinas_map');

        // Añadir event listeners
        document.getElementById('oficinas_map')?.addEventListener('click', (e) => {
            e.preventDefault();
            currentMap.panTo(centerOficinas);
            currentMarker.position = centerOficinas;
            updateMapsLink(centerOficinas);
            updateActiveButton('oficinas_map');
            currentMap.setZoom(16);
        });

        document.getElementById('pabellones_map')?.addEventListener('click', (e) => {
            e.preventDefault();
            currentMap.panTo(centerPabellones);
            currentMarker.position = centerPabellones;
            updateMapsLink(centerPabellones);
            updateActiveButton('pabellones_map');
            currentMap.setZoom(16);
        });
    }
}