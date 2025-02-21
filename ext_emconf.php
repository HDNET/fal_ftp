<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fal_ftp".
 *
 * Auto generated 24-08-2014 10:06
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'FAL FTP Driver',
	'description' => 'Provides a FTP and FTP-SSL driver for the TYPO3 File Abstraction Layer (FAL) to manage files via filemanager (filelist).',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.3.0',
	'state' => 'stable',
	'uploadfolder' => 0,
	'clearcacheonload' => 1,
	'author' => 'Arno Dudek',
	'author_email' => 'webmaster@adgrafik.at',
	'author_company' => 'ad:grafik',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' =>
	array (
		'depends' =>
		array (
			'typo3' => '8.7.0-9.5.99',
		),
	),
);

?>
