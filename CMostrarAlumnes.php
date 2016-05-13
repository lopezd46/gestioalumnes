<?php
/**
	Institut Manuel Vàzquez Montalbán
	Mòdul: IAW (Implantació d'Alicacions Web)
	Tema: Patrons: el Model Vista Controlador
	Exercici: Gestió de l'alumnat
*/


/***************************************
  Per a fer un llistat, el controlador
    té cap funció específica

***************************************/
include_once "Controlador.php";

class CMostrarAlumnes implements Controlador{
	private $vista;
	private $model;
	
	function __construct($model){
		$this->model = $model;
	}
	
	public function main(){
		//Com que es tracta d'un llistat, el controlador no fa res.
		;
	}
	
}
