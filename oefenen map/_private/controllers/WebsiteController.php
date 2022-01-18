<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	public function home() {

		// Haal iets op uit de database
		$qrcodes = getBerichten();
		//print_r($qrcodes); exit;
		//$eenqrcode = getBericht(12345);
		
		$template_engine = get_template_engine();
		echo $template_engine->render('homepage', ['qrcodes' => $qrcodes]);

	}

	public function showCode($code) {

		// Haal iets op uit de database
		$bericht = getBericht($code);
	
		$template_engine = get_template_engine();
		echo $template_engine->render('bericht', ['bericht' => $bericht]);

	}
	

}

