<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

return [
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'lastrocords' => [
		'controller' => 'main',
		'action' => 'lastrocords',
	],
	'user/{auth:\d+}' => [
		'controller' => 'user',
		'action' => 'index',
	],
	'user/{auth:\d+}/allrecords' => [
		'controller' => 'user',
		'action' => 'allrecords',
	],
	'user/{auth:\d+}/style-{style:\d+}' => [
		'controller' => 'user',
		'action' => 'allstyle',
	],

];