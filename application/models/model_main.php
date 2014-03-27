<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends CI_Model {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	
	
public function getPlantsAll() {
		$query = $this->db->query("
			SELECT plants.plantId, plantspecies.species, plantedible.edible, plants.planted, plants.harvestDate
			FROM plants
			JOIN plantspecies ON plants.species = plantspecies.speciesId
			JOIN plantedible ON plants.edible = plantedible.edibleId
			ORDER BY plantspecies.species
		");
		$plants = $query->result();
		return $plants;
	}
	
	public function getPlantsById ($id) {
		$query = $this->db->query("
			SELECT plants.plantId, plantspecies.species, plantedible.edible, plants.planted, plants.harvestDate
			FROM plants
			JOIN plantspecies ON plants.species = plantspecies.speciesId
			JOIN plantedible ON plants.edible = plantedible.edibleId
			WHERE plants.plantId = ?
			ORDER BY plantspecies.species, plants.planted
		",
		array(
			$id
		));
		$plants = $query->result();
		return $plants;
	}
	
	public function getUser($userName,$password) {
		$query = $this->db->query("
			SELECT *
			FROM users
			WHERE username = ? AND
				password = MD5(CONCAT(passsalt,?))
		",
		array(
			$userName,
			$password
		));
		$user = $query->result();
		if(count($user) === 1)
		{
			return $user[0];
		}
		else
		{
			return false;
		}
	}
	
	public function getUserById($id) {
		$query = $this->db->query("
			SELECT *
			FROM users
			WHERE userid = ?
		",
		array(
			$id,
		));
		$user = $query->result();
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
		$query = $this->db->query("
			SELECT *
			FROM users
		");
		$users = $query->result();
		return $users;
	}
	
	public function userAdd($user) {
		$query = $this->db->query("
			INSERT INTO users
			SET
				firstname = ?,
				lastname = ?,
				username = ?,
				passsalt = LEFT(MD5(CURRENT_TIME),10),
				password = MD5(CONCAT(passsalt,?)),
				dob = ?,
				userStatusID = ?,
				userTypeId = ?,
				createdDate = NOW();
		",
		array(
			$user['firstname'],
			$user['lastname'],
			$user['username'],
			$user['password'],
			$user['dob'],
			$user['userStatusID'],
			$user['userTypeId'],
		));
	}
	
	public function userUpdate($user) {
		$query = $this->db->query("
			UPDATE users
			SET
				firstname = ?,
				lastname = ?,
				username = ?,
				passsalt = LEFT(MD5(CURRENT_TIME),10),
				password = MD5(CONCAT(passsalt,?)),
				dob = ?,
				userStatusID = ?,
				userTypeId = ?,
				createdDate = NOW()
			WHERE userid = ?
		",
		array(
			$user['firstname'],
			$user['lastname'],
			$user['username'],
			$user['password'],
			$user['dob'],
			$user['userStatusID'],
			$user['userTypeId'],
			$user['userid'],
		));
	}
	
	public function userRemove($id) {
		$query = $this->db->query("
			DELETE
			FROM users
			WHERE userid = ?
		",
		array(
			$id,
		));
	}
}

?>