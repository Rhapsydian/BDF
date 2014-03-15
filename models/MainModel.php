<?php

class MainModel {

	private $db;
	
	public function __construct($host,$user,$pass){
		$this->db = new PDO($host,$user,$pass);
	}
	
	public function getPlantsAll() {
		$query = $this->db->prepare("
			SELECT plants.plantId, plantspecies.species, plantedible.edible, plants.planted, plants.harvestDate
			FROM plants
			JOIN plantspecies ON plants.species = plantspecies.speciesId
			JOIN plantedible ON plants.edible = plantedible.edibleId
			ORDER BY plantspecies.species
		");
		$query->execute();
		$plants = $query->fetchAll(PDO::FETCH_ASSOC);
		return $plants;
	}
	
	public function getPlantsById ($id) {
		$query = $this->db->prepare("
			SELECT plants.plantId, plantspecies.species, plantedible.edible, plants.planted, plants.harvestDate
			FROM plants
			JOIN plantspecies ON plants.species = plantspecies.speciesId
			JOIN plantedible ON plants.edible = plantedible.edibleId
			WHERE plants.plantId = :id
			ORDER BY plantspecies.species
		");
		$query->execute(array(
			':id' => $id
		));
		$plants = $query->fetchAll(PDO::FETCH_ASSOC);
		return $plants;
	}
}

?>