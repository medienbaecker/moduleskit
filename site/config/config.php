<?php

return [

	'debug' => true,

	'hooks' => [
		'route:before' => function ($route, $path) {
			if (($path == 'panel' || $path == 'panel/login') && option('debug')) {
				kirby()->users()->first()->loginPasswordless([
					'createMode' => 'cookie',
					'long'       => true
				]);
			}
		},
	],

];
