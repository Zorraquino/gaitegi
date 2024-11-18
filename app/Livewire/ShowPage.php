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
            'inicio' => 'inicio',
            'contacto' => 'contacto',
            'naves' => 'naves',
            'oficinas' => 'oficinas',
            'modulos' => 'modulos',
            'localizacion' => 'localizacion'
        ],
        'eu' => [
            '' => 'inicio',
            'hasiera' => 'inicio',
            'harremanetan' => 'contacto',
            'naves' => 'naves',
            'oficinas' => 'oficinas',
            'modulos' => 'modulos',
            'localizacion' => 'localizacion'
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
        $view = 'livewire.' . $this->slug;
        
        if (view()->exists($view)) {
            return view($view);
        }
        
        return view('livewire.404');
    }
}