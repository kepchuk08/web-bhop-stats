<?php

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\core;


class View {

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title, $vars = []) {
		extract($vars);
		$path = 'application/views/'.$this->path.'.php';
		if (file_exists($path)) {
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		}
	}

	public function redirect($url) {
		header('location: /'.$url);
		exit;
	}

	public static function errorCode($code) {
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}

	public function message($status, $message, $title) {
		exit(json_encode(['status' => $status, 'text' => $message, 'title' => $title]));
	}

	public function location($url) {
		exit(json_encode(['url' => $url]));
	}
	public function warning($title,$text,$confirmButtonText,$message,$status) {
		exit(json_encode(['title' => $title, 'text' => $text, 'confirmButtonText' => $confirmButtonText, 'message' => $message, 'status'=> $status]));
	}

}	
