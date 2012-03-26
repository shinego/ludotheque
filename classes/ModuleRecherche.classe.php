<?php
require_once("classes/Module.classe.php");

//Constantes
define("MODULE_RECHERCHE", RACINE_SITE . "module.php?idModule=Recherche");

Class ModuleRecherche extends Module
{

    public function __construct()
    {
        // On utilise le constructeur de la classe m®®re
        parent::__construct();
		$this->afficheConditionsDeRecherche();
	}
    private function afficheConditionsDeRecherche()
    {
		$this->ouvreBloc("<form>");
		
		$this->ouvreBloc("<fieldset>");
		$this->ajouteLigne("<legend>Recherche de jeu</legend>");		
		// Nom du jeu
		$this->ouvreBloc("<ul>");
		
		$this->ouvreBloc("<li>");
		$this->ajouteLigne("<label for=\"nom\">" . $this->convertiTexte("Nom du jeu") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"nom\" name=\"nom\" />");
		
		$this->ajouteLigne("<label for=\"categorie\">" . $this->convertiTexte("Cat√©gorie") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"categorie\" name=\"categorie\" />");
				
		$this->ajouteLigne("<label for=\"nombreDeJoueur\">" . $this->convertiTexte("Nombre de joueur") . "</label>");
		$this->ajouteLigne("<input type=\"checkbox\" name=\"2_4\" />");
		$this->ajouteLigne($this->convertiTexte("2-4"));
		$this->ajouteLigne("<input type=\"checkbox\" name=\"4_6\" />");
		$this->ajouteLigne($this->convertiTexte("4-6"));
		$this->ajouteLigne("<input type=\"checkbox\" name=\"6_8\" />");
		$this->ajouteLigne($this->convertiTexte("6-8"));
		$this->ajouteLigne("<input type=\"checkbox\" name=\"plus_8\" />");
		$this->ajouteLigne($this->convertiTexte("8+"));
		
		$this->ajouteLigne("<label for=\"dureeEnMinute\">" . $this->convertiTexte("Dur√©e en minute") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"dureeEnMinute\" name=\"dureeEnMinute\" />");
		$this->ouvreBloc("</li>");
		
		$this->ouvreBloc("<li>");		
		$this->ouvreBloc("</li>");
		
		/*$this->ouvreBloc("<li>");
		$this->ajouteLigne("<label for=\"nom\">" . $this->convertiTexte("Nom du jeu") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"nom\" name=\"nom\" />");
		$this->ouvreBloc("</li>");
		
		$this->ouvreBloc("<li>");
		$this->ajouteLigne("<label for=\"nom\">" . $this->convertiTexte("Nom du jeu") . "</label>");
		$this->ajouteLigne("<input type=\"text\" id=\"nom\" name=\"nom\" />");
		$this->ouvreBloc("</li>");*/
		
		$this->ouvreBloc("</ul>");		
				
		$this->ajouteLigne("<br \>");
		
			
		$this->fermeBloc("</fieldset>");
		$this->ouvreBloc("</form>");
    }
}
?>
