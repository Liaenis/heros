<?php

class HeroService{
    private $_listeheros =[];

    function constructor(){
        $this->_listeheros =[ 

        ];
    }

    function getList(){
        return $this->_listeheros;
    }
    function addHero($pHero){
        array_push ($this->_listeheros, $pHero);
    }
}