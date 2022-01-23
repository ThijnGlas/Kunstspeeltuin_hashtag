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
class WebsiteController
{

	public function home()
	{

		// Haal iets op uit de database
		$qrcodes = getBerichten();
		//print_r($qrcodes); exit;
		//$eenqrcode = getBericht(12345);

		$template_engine = get_template_engine();
		echo $template_engine->render('homepage', ['qrcodes' => $qrcodes]);
	}

	public function showCode($code)
	{
		// Haal iets op uit de database
		$bericht = getBericht($code);
		$template_engine = get_template_engine();
		if ($bericht) {
			echo $template_engine->render('bericht', ['bericht' => $bericht]);
		} else {
			echo $template_engine->render('form', ['code' => $code]);
		}
	}

	public function bewaarBericht()
	{
		$code = input("code");
		$bericht = input("bericht");
		if (empty($bericht)) {
			$template_engine = get_template_engine();
			echo $template_engine->render('form', ['code' => $code,"error"=>"is leeg"]);
		} else {
			$result = bewaarBericht($code, $bericht);
			if ($result == true) {
				redirect(url("show_code", ["code" => $code]));
			} else {
				echo "niet opgeslagen";
			}
		}
	}

	
	public function qrCodes()
	{
	$template_engine = get_template_engine();
	echo $template_engine->render('qrcodeprinten');
	}
}
