<?php

return [
	'backend' => [
		'design' => [
			'template' => 'metronic',
			'package' => 'cdthememetronic'
		],
	],
	'themes' => [
		'backend' => [
			'metronic' => [
				'enable' => true,
				'config' => [
					'customizer' => [
						'enable' => false,
					],
				],
			]
		],
	],
];
