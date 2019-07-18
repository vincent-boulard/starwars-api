<?php
	/**
	 * Created by PhpStorm.
	 * User: vincent
	 * Date: 15/07/19
	 * Time: 14:37
	 */

	class Router
	{
		private $controller;
		private $view;

		public function route()
		{
			try {
				spl_autoload_register(function($class) {
					require_once "models/".$class.".php";
				});

				$url = "";

				if(isset($_GET['url'])) {
					$url = explode("/", $_GET['url']);

					$controller = ucfirst(strtolower($url[0]));
					$controllerClass = $controller."Controller";
					$controllerFile = "controllers/".$controllerClass.".php";

					if(file_exists($controllerFile)) {
						require_once $controllerFile;
						$this->controller = new $controllerClass($url);
					} else {
						throw new Exception('Page introuvable');
					}
				} else {
					echo "Page d'accueil";
				}
			} catch (Exception $e) {
				$erreur = $e->getMessage();

				require_once "views/error/error.php";
			}
		}
	}