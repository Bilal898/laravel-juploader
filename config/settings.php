<?php

return array(
	'script_url' => URL::to_route('upload'),
	'upload_dir' => path('public').'bundles/jupload/uploads/files/',
	'upload_url' => URL::base().'/bundles/jupload/uploads/files/',
	'delete_type' => 'POST',
	'max_width' => '2000',
	'max_height' => '2000',
	'image_versions' => array(
		'fixed' => array(
			'max_width' => 64,'max_height' => 64, 'jpeg_quality' => 75, 'fixed_size' => true,
			'upload_dir' => path('public').'bundles/jupload/uploads/fixed/',
			'upload_url' => URL::base().'/bundles/jupload/uploads/fixed/',
		),
		'thumbnail' => array(
			'max_width' => 120,'max_height' => 120, 'jpeg_quality' => 75, 'fixed_size' => false,
			'upload_dir' => path('public').'bundles/jupload/uploads/thumbnails/',
			'upload_url' => URL::base().'/bundles/jupload/uploads/thumbnails/',
		),
	),
);