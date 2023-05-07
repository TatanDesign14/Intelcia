<?php

class Incident extends db{
	
	public function index(){
		try {
			$SQL = "SELECT * FROM incidents";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die($e->getMessage());
		} finally{
			$result = null;
		}
	}
	public function delete($id){
		try {
			$SQL = "DELETE  FROM incidents where id = ?";
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));	
		} catch (Exception $e) {
			die($e->getMessage());
		} finally{
			$result = null;
		}
	}
	public function find($id){
		try {
			$SQL = "SELECT * FROM incidents where id = ?";
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));
			return $result->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		} finally{
			$result = null;
		}
	}
	public function store($table_number, $description,$priority,$state,$date){
		try {
			$SQL = "INSERT INTO incidents (table_number,description_problem,priority,state,date)VALUES(?,?,?,?,?)";
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($table_number, $description, $priority,$state,$date));	
		} catch (Exception $e) {
			die($e->getMessage());
		} finally{
			$result = null;
		}
	}
	public function update($data){
		try {
			$SQL = "UPDATE incidents SET table_number = ?, description_problem= ? , priority= ?, state= ? WHERE id = ?";
			$result = $this->connect()->prepare($SQL);
			$result->execute($data);	
		} catch (Exception $e) {
			die($e->getMessage());
		} finally{
			$result = null;
		}
	}
}
?>