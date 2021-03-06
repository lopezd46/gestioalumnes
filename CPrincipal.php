<?php

/**
	Institut Manuel Vàzquez Montalbán
	Mòdul: IAW (Implantació d'Alicacions Web)
	Tema: Patrons: el Model Vista Controlador
	Exercici: Gestió de l'alumnat
*/
ini_set('display_errors', 'on');

/* 
	Incloem la Base de dades simulada amb una classe php
	(En una situació real no ho tindríem mai així...)
*/
include_once 'BDAlumnes.php';
include_once 'Routing.php';

class CPrincipal{
	/***********************************************************/
	/********** ATRIBUTS****************************************/
	/***********************************************************/
	 
	
	/* Afegim un atribut que representi al model, la vista
		i el controlador. 
		També un altre que representarà la base de dades
	*/
	private $model;
	private $vista;
	private $controlador;
	private $baseDeDades;
	
	/***********************************************************/
	/********** MÈTODES ****************************************/
	/***********************************************************/
	// Contstructora
	function __construct(Router $enrutador, $nomRuta){

		$ruta = $enrutador->getRoute($nomRuta);



		$this->BDA = new BDAlumnes();
		
		/*
			Agafem el paràmetre accio de la url que contindrà 
			el nom de la funcionalitat com a valor.
		*/
		$nomModel 			= $ruta->model;	
		$nomVista 			= $ruta->vista;
		$nomControlador 	= $ruta->controlador;
		
		
		
		if(isset($nomModel)){
			// incloem arxiu php depenent del paràmetre $m. $v o $c
			include_once $nomModel.'.php'; 
			$this->model 			= new $nomModel($this->BDA); 
			
			include_once $nomVista.'.php';
			$this->vista 			= new $nomVista($ruta, $this->model);
			
			include_once $nomControlador.'.php';
			$this->controlador = new $nomControlador($this->model, $this->vista);
			/* 
				Finalment, si tot es correcte, invoquem la funció
				main del controlador.
			*/
			$this->controlador->main();
		}else
			echo "Eror, MVC incorrecte";
		
	}
	
	/*
		Funció principal... la que primer s'executa...
		s'invoca al final d'aquest arxiu.
	*/
	public function output(){
		?>
		<!DOCTYPE html>
		<html lang="es">
			<head>
				<meta charset="UTF-8" />
				<title>Gestió de l'alumnat</title>
			</head>
			<body>
				<h1>Gestió de l'alumnat</h1>
				<h2><?php echo $this->vista->getTitolPaginaWeb();?></h2>
				<?php $this->vista->mostraContingutPagina();?>
				<a href="./index.php"><--Inici</a>
			</body>
		</html>
		<?php
	}	
}	

// Script
if (isset($_GET['accio']) && !empty($_GET['accio'])) {
	$cp = new CPrincipal(new Router(), $_GET['accio']);
	$cp->output();
}else {
	echo "Error, funcionalitat incorrecta.";
}
?>
