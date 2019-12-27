<?php

$urls = Config::get('moved.urls', []);

foreach ($urls as $old => $new) {
	Route::get($old, MovedController::class);
}
