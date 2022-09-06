<?php

class cours {
    private $idcours;
    private $nomcours;
    private $typecours;
    private $cours;




    public function getidcours()
    {
        return $this->idcours;
    }

    public function getnomcours()
    {
        return $this->nomcours;
    }
    public function gettypecours()
    {
        return $this->typecours;
    }
    public function getcours()
    {
        return $this->cours;
    }
    public function setnomcours($nomcours)
    {
        $this->nomcours = $nomcours;
    }
    public function settypecours($typecours)
    {
        $this->typecours = $typecours;
    }
    public function setcours($cours)
    {
        $this->cours = $cours;
    }


    public function __construct($nomcours, $typecours, $cours)
    {
        $this->nomcours = $nomcours;
        $this->typecours = $typecours;
        $this->cours = $cours;

    }
}
