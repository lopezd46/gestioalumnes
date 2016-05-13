<?php
/**
	Institut Manuel Vàzquez Montalbán
	Mòdul: IAW (Implantació d'Alicacions Web)
	Tema: Patrons: el Model Vista Controlador
	Exercici: Gestió de l'alumnat
*/

class MMostrarAlumnes{
	private $bd;
	
	/***
		Per paràmetre passem la base de dades ja que 
		no podem crear-la cada vegada que accedim a un Model.
		Si féssim un programa real, això no passaria, simplement 
		faríem una connexió a una base de dades.
	*/
	function __construct($bd){
		$this->bd = $bd;
	}
	
	public function selectNomCognomAlumnes(){
		/* Aquí es faria un SELECT a la base de dades.
			En aquest cas només fem una crida a la classe
			BDAlumnes.
		*/
		return $this->bd->selectNomCognomAlumnes();
	}
}