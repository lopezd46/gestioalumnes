<?php
/**
	Institut Manuel Vàzquez Montalbán
	Mòdul: IAW (Implantació d'Alicacions Web)
	Tema: Patrons: el Model Vista Controlador
	Exercici: Gestió de l'alumnat
*/

class BDAlumnes{
	private $arrayAlumnes;
	
	function __construct(){
		$this->arrayAlumnes = array(
			array(
        		"nom" => "Joan",
				"cognoms" => "Puig Martínez",
        		"email" => "joanpuig@mail.com",
        		"DNI" => "7899807R",
        		"telefon" => "66587455",        		
			),
    		array(
        		"nom" => "Jordi",
				"cognoms" => "Martí Dalmau",
        		"email" => "jordimarti@mail.com",
        		"DNI" => "2376528R",
				"telefon" => "68569584",
			),
   		array(
        		"nom" => "Xavier",
				"cognoms" => "Subirana Garcia",
        		"email" => "subigarci@mail.com",
        		"DNI" => "87965426O",
				"telefon" => "688744598",
			),
   		array(
        		"nom" => "Carles",
				"cognoms" => "Rovira Marquez",
        		"email" => "crovima@mail.com",
        		"DNI" => "45874856B",
				"telefon" => "685966321",
			),
			array(
        		"nom" => "Muhammad",
				"cognoms" => "Ali",
        		"email" => "muhammadali@mail.com",
        		"DNI" => "7653745K",
				"telefon" => "677448596",
			)
		);
		
	}
	
	/**
		Aquesta funció retorna tots els alumnes a la vista, però 
		en aquest cas, només retorna el nom i el cognom.
	*/
	public function selectNomCognomAlumnes(){
		$resultat = array();
		$i=0;

		foreach($this->arrayAlumnes as $ar){
			$nomICognoms = 	array(
				"nom" 		=> $ar["nom"],
				"cognoms" 	=> $ar["cognoms"],
								);
			$resultat[$i] = $nomICognoms;
			$i++;
		}
		
		return $resultat;
	
	}
}
?>
