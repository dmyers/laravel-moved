<?php namespace Dmyers\Moved;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class MovedController extends Controller
{
    public function __invoke(Route $route, Request $request)
    {
        $urls = Config::get('moved.urls');
        $old = $route->uri();
        $new = Arr::get($urls, $old);
        $url = $new;
        $query = $request->getQueryString();
        $question = $request->getBaseUrl().$request->getPathInfo() == '/' ? '/?' : '?';
        
        if ($query) {
            $url = $query ? $url.$question.$query : $url;
        }
        
        Event::dispatch('moved.redirect', [$old, $new]);
        
        return Redirect::to($url, 301);
    }
}
