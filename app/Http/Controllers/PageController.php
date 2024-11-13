<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    private $slugMaps = [
        'es' => [
            '' => 'index',
            'inicio' => 'index',
            'contacto' => 'contact'
        ],
        'eu' => [
            '' => 'index',
            'hasiera' => 'index',
            'harremanetan' => 'contact'
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
            return view('index', [
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