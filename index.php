<?php
	/**
	 * Created by PhpStorm.
	 * User: vincent
	 * Date: 15/07/19
	 * Time: 11:33
	 */

	ini_set("display_errors", 1);

	require_once "controllers/Router.php";

	$routeur = new Router();
	$routeur->route();