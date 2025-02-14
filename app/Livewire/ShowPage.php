<?php

namespace App\Livewire;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

use Livewire\Component;

class ShowPage extends Component
{
    public $slug;
    public $locale;
    public $langMenu = [];

    private $slugMaps = [
        'es' => [
            '' => 'inicio',
            'naves' => 'naves',
            'oficinas' => 'oficinas',
            'modulos' => 'modulos',
            'contacto' => 'localizacion',
            'aviso-legal' => 'legal',
            'politica-privacidad' => 'privacidad'
        ],
        'eu' => [
            '' => 'inicio',
            'nabeak' => 'naves',
            'bulegoak' => 'oficinas',
            'moduloak' => 'modulos',
            'harremanetarako' => 'localizacion',
            'lege-oharra' => 'legal',
            'pribatutasun-politika' => 'privacidad'
        ],
        'en' => [
            '' => 'inicio',
            'warehouses' => 'naves',
            'offices' => 'oficinas',
            'modules' => 'modulos',
            'contact' => 'localizacion',
            'legal-notice' => 'legal',
            'privacy-policy' => 'privacidad'
        ]
    ];
    
    public function mount($locale = 'es', $slug = null)
    {
        $this->slug = $slug ?? 'inicio';
        $this->locale = $locale ?: 'es';

        if (in_array($locale, ['eu', 'es', 'en'])) {
            App::setLocale($locale);
        }
    }

    public function render()
    {
        // Generar el menú de idiomas
        $this->langMenu = [];
        $currentSlug = $this->slug;
        
        // Encontrar el slug base buscando en el mapa del idioma actual
        $baseSlug = isset($this->slugMaps[$this->locale][$currentSlug]) 
            ? $this->slugMaps[$this->locale][$currentSlug] 
            : $currentSlug;
            
        // Generar los enlaces para cada idioma
        foreach ($this->slugMaps as $lang => $slugMap) {
            // Encontrar el slug correspondiente en cada idioma
            $langSlug = array_search($baseSlug, $slugMap);
            $this->langMenu[$lang] = $langSlug === false ? '' : $langSlug;
        }

        $view = 'livewire.' . $baseSlug;

        // Compartir langMenu con la aplicación
        app()->instance('langMenu', $this->langMenu);

        if (view()->exists($view)) {
            app()->instance('pageName', $baseSlug);
            return view($view, [
                'pageName' => $baseSlug
            ]);
        }
        
        return view('livewire.404', ['pageName' => '404']);
    }
}