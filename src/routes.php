<?php

$urls = Config::get('laravel-moved::urls', array());

foreach ($urls as $old => $new) {
	Route::get($old, function() use ($new) {
		return Redirect::to($new, 301);
	});
}