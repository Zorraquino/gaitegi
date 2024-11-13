<?php

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        
        if (in_array($locale, config('app.locales', ['eu', 'es']))) {
            App::setLocale($locale);
        }
        
        return $next($request);
    }
}