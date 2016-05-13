<?php
/**
	Institut Manuel Vàzquez Montalbán
	Mòdul: IAW (Implantació d'Alicacions Web)
	Tema: Patrons: el Model Vista Controlador
	Exercici: Gestió de l'alumnat
*/

abstract class Vista{
	protected $model;
	protected $ruta;
	
	function __construct($ruta, $model) {
		$this->model = $model;
		$this->ruta  = $ruta;
	}
		
	
	/*
		Funció que caldrà que es redefineixi a cada vista
		i que contindrà el contingut específic de cada vista.
		Exemple: la vista de "llistat d'usuaris" contindrà una
		taula html amb les dades, però no contindrà tota la 
		informació referent als fulls d'estil css, al head etc.
	*/
	abstract public function mostraContingutPagina();
	
	/*
		Funció que caldrà que es redefineixi a cada vista
		i que contindrà el contingut específic de cada vista
		ja que cada pàgina web tindrà un títol diferent.
		
		El desenvolupador només ha de retornar el títol de la 
		web.
		Exemple: return "Enviar correu electrónic als alumnes";
	*/
	abstract public function getTitolPaginaWeb();

	

	
}
?>
