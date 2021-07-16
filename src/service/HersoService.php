<?php

class HeroService{
    private $_listeheros =[];

    function constructor(){
        $hommePoubelle = new Hero("jean Jacque", "Dupond", "L'homme-poubelle", false, "Ne connait pas le tri selectif");
        $superClodo = new Hero("Maurice", "Robert", "Super-Clodo", false, "Il n'as pas de planque fixe");
        $Miso = new Hero("Bernard", "De la Rivière", "Miso", true, "Passe son temps à manquer de respect aux femmes");
        $this->_listeheros =[$hommePoubelle, $superClodo, $Miso ];
    }

    function getList(){
        return $this->_listeheros;
    }
    function addHero($pHero){
        array_push ($this->_listeheros, $pHero);
    }
}