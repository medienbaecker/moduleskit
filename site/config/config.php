<?php

use Kirby\Filesystem\Dir;
use Kirby\Filesystem\F;

return [

	'debug' => true,

	'languages' => true,

	// Auto-publish new modules instead of creating as drafts:
	// 'medienbaecker.modules.create.status' => 'listed',

	// Redirect to module page in Panel after creation:
	// 'medienbaecker.modules.create.redirect' => true,

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

	/* Automatic block registration */
	'ready' => function (): array {
		// Get all block blueprint files
		$blockBlueprints = Dir::files(kirby()->root('blueprints') . '/blocks');

		// Extract block names from blueprint files
		$blockBlueprintNames = array_map(function ($blockBlueprint) {
			return F::name($blockBlueprint);
		}, $blockBlueprints);

		// Return the configuration for blocks
		return [
			'blocks' => [
				'fieldsets' => $blockBlueprintNames
			]
		];
	},

];
