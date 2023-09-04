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
	'user/{auth:[0-9/-]+}' => [
		'controller' => 'user',
		'action' => 'index',
	],
	'user/{auth:[0-9/-]+}/allrecords' => [
		'controller' => 'user',
		'action' => 'allrecords',
	],
	'user/{auth:[0-9/-]+}/style-{style:\d+}' => [
		'controller' => 'user',
		'action' => 'allstyle',
	],
	'maps' => [
		'controller' => 'maps',
		'action' => 'index',
	],
	'maps/{map:\w+}' => [
		'controller' => 'maps',
		'action' => 'mapinfo',
	],
	'maps/{map:\w+}/allrecords' => [
		'controller' => 'maps',
		'action' => 'allracords',
	],
	'maps/{map:\w+}/allrecords&style={style:\w+}&track={track:\w+}' => [
		'controller' => 'maps',
		'action' => 'allracords',
	],
	'search/{value:[А-Яа-я\w:\[\].?,;$!%*|=+@/\-\(\)]+}' => [
		'controller' => 'main',
		'action' => 'search',
	],
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/login{status:\?steamauth=([\w+\D+]+)}' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'auth' => [
		'controller' => 'admin',
		'action' => 'auth',
	],
	'auth{openid:\?openid.ns=([\w+\D+]+)}' => [
		'controller' => 'admin',
		'action' => 'auth',
	],
	'admin' => [
		'controller' => 'admin',
		'action' => 'index',
	],
	'admin/db' => [
		'controller' => 'admin',
		'action' => 'database',
	],
	'admin/settings' => [
		'controller' => 'admin',
		'action' => 'settings',
	],
	'admin/admins' => [
		'controller' => 'admin',
		'action' => 'admins',
	],
	'install' => [
		'controller' => 'install',
		'action' => 'index',
	],
	'ajax' => [
		'controller' => 'ajax',
		'action' => 'ajax',
	],

];