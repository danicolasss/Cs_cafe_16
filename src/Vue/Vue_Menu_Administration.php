<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Menu_Administration extends Vue_Composant
{
    private int $niveauAutorisation;
    public function __construct(int $niveauAutorisation)
    {        $this->niveauAutorisation = $niveauAutorisation;    }
    function donneTexte(): string
    {
        switch ($this->niveauAutorisation) {
            case 1 : //Administrateur
                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=Gerer_utilisateur'>Utilisateurs</a></li>
                <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
";
                break;
            case 2 : //Redacteur
                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
               <li><a href='?case=Gerer_catalogue'>Catalogue</a></li>   
               <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
";
            case 3 : //commercial
                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
               <li><a href='?case=Gerer_Commande'>Commandes</a></li>
              <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
";
        }
    }
}
