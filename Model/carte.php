<?php
class carte
{   private $id;
	private $numero;
	private  $dateAct;
	private  $dateExp;
	private  $nbptn;
	private  $idclient;
	
	

	public function __construct($numero,$dateAct,$dateExp,$idclient)
	{
		$this->numero=$numero;
        $this->dateAct=$dateAct;
        $this->dateExp=$dateExp;
		$this->idclient=$idclient;
		
	}
	
	public function getNumero(){return $this->numero;}
	public function getNbptn(){return $this->nbptn ;}
	public function getIdclient(){return $this->idclient;}
	public function getDateAct(){return $this->dateAct;}
	public function getDateExp(){return $this->dateExp;}
	
	

	public function setNumero($numero){$this->numero=$numero;}
	public function setNbptn($nbptn){$this->nbptn=$nbptn;}
	public function setIdclient($idclient){$this->idclient=$idclient;}
	public function setDateAct($dateAct){$this->dateAct=$dateAct;}
	public function setDateExp($dateExp){$this->dateExp=$dateExp;}
	
	
}
?>