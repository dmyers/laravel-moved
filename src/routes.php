<?php

$urls = Config::get('moved.urls', []);

foreach ($urls as $old => $new) {
    Route::get($old, function() use ($old, $new) {
        $url = $new;
        $query = Request::getQueryString();
        $question = Request::getBaseUrl().Request::getPathInfo() == '/' ? '/?' : '?';
        
        if ($query) {
            $url = $query ? $url.$question.$query : $url;
        }
        
        Event::dispatch('moved.redirect', [$old, $new]);
        
        return Redirect::to($url, 301);
    });
}
