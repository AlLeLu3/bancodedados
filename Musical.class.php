<?php
include_once("BD.class.php");
class Musical{
    private $idMusical;
    private $artista;
    private $local;
    private $dia;
    public function getIdMusical(){
        return $this->idMusical;
    }
    public function setIdMusical($idMusical){
        $this->idMusical = $idmusical;
    }
    public function getArtista(){
        return $this->artista;
    }
    public function setArtista($artista){
        $this->artista = $artista;
    }
    public function getLocal(){
        return $this->local;
    }
    public function setLocal($local){
        $this->local = $local;
    }
    public function getDia(){
        return $this->dia;
    }
    public function setDia($dia){
        $this->dia = $dia;
    }
    public function selecionarUm(){
        $bd = new BD();
        return $bd->consultar("SELECT * FROM musical WHERE idmusical = '".$this->getIdMusical()."'");
    }
    public function selecionarTodos(){
        $bd = new BD();
        return $bd->consultar("SELECT * FROM musical ORDER BY dia");
    }
    public function inserir(){
        $bd = new BD();
        return $bd->alterar("INSERT INTO musical (artista, local, dia) values('".$this->getArtista()."', '".$this->getLocal()."','".$this->getDia()."')");
    }
    public function alterar(){
        $bd = new BD();
        return $bd->alterar("UPDATE musical set artista = '".$this->getArtista()."', local = '".$this->getLocal()."', dia = '".$this->getDia()."' WHERE idmusical = '".$this->getIdMusical()."'");
    }
    public function deletar(){
        $bd = new BD();
        return $bd->alterar("DELETE FROM musical WHERE idmusical = '".$this->getIdMusical()."'");
    }
}
?>