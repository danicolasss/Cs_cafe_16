<?php

namespace App\Fonctions;

class csrf
{
    function generercrsf() : string{
        if(! isset($_SESSION["CSRF"])){
            $_SESSION["CSRF"] = random_int(0,99999999);
        }




        return $_SESSION["CSRF"] ;
    }

    function genreChampHidden(){
        return '<input type="hidden" name="CRSF" value="'.$this->generercrsf().'"/>';
    }
    function verififiercrsf($valeurCSRFProposer) : string{
        if ($valeurCSRFProposer )
        if($valeurCSRFProposer == $_SESSION["CSRF"] ){

            unset($_SESSION["CSRF"]);
            return true;
        }
        else{
            return false;
        }



    }



}


