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
			ORDER BY plantspecies.species, plants.planted
		");
		$query->execute(array(
			':id' => $id
		));
		$plants = $query->fetchAll(PDO::FETCH_ASSOC);
		return $plants;
	}
	
	public function getUser($userName,$password) {
		$query = $this->db->prepare("
			SELECT *
			FROM users
			WHERE username = :userName AND
				password = MD5(CONCAT(passsalt,:password))
		");
		$query->execute(array(
			':userName' => $userName,
			':password' => $password
		));
		$user = $query->fetchAll(PDO::FETCH_ASSOC);
		if(count($user) === 1)
		{
			return $user[0];
		}
		else
		{
			return false;
		}
	}
	
	public function getUsersAll() {
		$query = $this->db->prepare("
			SELECT *
			FROM users
		");
		$query->execute();
		$users = $query->fetchAll(PDO::FETCH_ASSOC);
		return $users;
	}
}

?>