<?php

namespace App\Livewire;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

use Livewire\Component;

class ShowPage extends Component
{
    public $slug;
    public $locale;

    private $slugMaps = [
        'es' => [
            '' => 'inicio',
            'naves' => 'naves',
            'oficinas' => 'oficinas',
            'modulos' => 'modulos',
            'localizacion' => 'localizacion',
            'aviso-legal' => 'legal'
        ],
        'eu' => [
            '' => 'inicio',
            'nabeak' => 'naves',
            'bulegoak' => 'oficinas',
            'moduloak' => 'modulos',
            'kokapena' => 'localizacion',
            'lege-oharra' => 'legal'
        ]
    ];
    
    public function mount($locale = 'es', $slug = null)
    {
        $this->slug = $slug ?? 'inicio';
        $this->locale = $locale ?: 'es';

        if (in_array($locale, ['eu', 'es'])) {
            App::setLocale($locale);
        }
    }

    public function render()
    {
        if (isset($this->slugMaps[$this->locale][$this->slug])) {
            $this->slug = $this->slugMaps[$this->locale][$this->slug];
        }
        $view = 'livewire.' . $this->slug;
        
        if (view()->exists($view)) {
            return view($view);
        }
        
        return view('livewire.404');
    }
}