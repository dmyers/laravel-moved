<?php

$urls = Config::get('moved.urls', []);

foreach ($urls as $old => $new) {
	Route::get($old, function() use ($new) {
		return Redirect::to($new, 301);
	});
}
