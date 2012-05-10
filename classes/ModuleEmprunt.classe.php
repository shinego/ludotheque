<?php
/** 
 * Module Emprunt
 * @package composant
 */
// Inclusions
require_once("classes/Module.classe.php");


//Constantes
define("MODULE_EMPRUNT", RACINE_SITE . "module.php?idModule=Emprunt");

/**
 * Module Emprunt
 * @author Romain Laï-King
 * @version 0.1
 * @package module
 */


class ModuleEmprunt extends Module
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
		$this->ouvreBloc("<form method='post' action='".MODULE_EMPRUNT."'>");
		
		$this->ouvreBloc("<fieldset>");
		
		$this->ajouteLigne("<label for=\"code_barre\">" . $this->convertiTexte("Code barre") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"code_barre\" name=\"code_barre\" />");
		//$this-creationInputText();
		
		$this->ajouteLigne("<label for=\"emprunteur\">" . $this->convertiTexte("Emprunteur") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"emprunteur\" name=\"emprunteur\" />");	
		
		$this->ajouteLigne("<label for=\"date_d'emprunt\">" . $this->convertiTexte("Date d'emprunt") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"date_d'emprunt\" value=\"".date('d-m-Y')."\" name=\"date_d'emprunt\" />");		
			
		$this->ajouteLigne("<button type='submit' name='valider' value='true'>" . $this->convertiTexte("Valider") . "</button>");
		
		$this->fermeBloc("</fieldset>");
		$this->fermeBloc("</form>");
	}


}


?>