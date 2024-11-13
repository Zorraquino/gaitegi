<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
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

    private function normalizeSlug(string $locale, string $slug): string
    {
        return $this->slugMaps[$locale][$slug] ?? $slug;
    }

    public function show(string $locale = null, string $slug = null)
    {
        
        $locale = $locale ?: 'es';
        if (in_array($locale, ['eu', 'es'])) {
            App::setLocale($locale);
        }

        if (!$slug) {
            return view('inicio', [
                'locale' => $locale,
                'slug' => ''
            ]);
        }

        $templateSlug = $this->normalizeSlug($locale, $slug);
        
        if (!View::exists($templateSlug)) {
            abort(404);
        }

        return view($templateSlug, [
            'locale' => $locale,
            'slug' => $slug
        ]);
    }
}