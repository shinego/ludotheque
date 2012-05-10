<?php
/** 
 * Module Emprunt
 * @package composant
 */
// Inclusions
require_once("classes/Module.classe.php");


//Constantes
define("MODULE_GESTION_EMPRUNT", RACINE_SITE . "module.php?idModule=GestionEmprunt");

/**
 * Module Emprunt
 * @author Romain Laï-King
 * @version 0.1
 * @package module
 */


class ModuleGestionEmprunt extends Module
{
	/**
	 * @var AccesAuxDonneesDev Connexion BDD
	 */
	private $maBase = NULL;

	/**
	 * Constructeur. Il ouvre une connexion à la BDD et affiche le formulaire
	 */
	public function __construct()
	{
		// On utilise le constructeur de la classe mère
		parent::__construct();
		// On a besoin d'un accès à la base - On utilise la fonction statique prévue
		$this->maBase = AccesAuxDonneesDev::recupAccesDonnees();
		$this->afficheFormulaire();		

	}
	/**
	 * Affiche le formulaire de recherche
	 */
	private function afficheFormulaire()
	{
		$this->ouvreBloc("<form method='post' action='".MODULE_GESTION_EMPRUNT."'>");
		
		$this->ouvreBloc("<fieldset>");
		$this->ajouteLigne("<legend>GestionEmprunt</legend>");	
		
		$this->fermeBloc("</fieldset>");
		$this->fermeBloc("</form>");
	}


}


?>