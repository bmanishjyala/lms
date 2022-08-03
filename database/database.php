<?php 

class Database{

	private $HOST = "localhost";
	private $USER = "root";
	private $PASS = "";
	private $DB_NAME = "lms";

	private function connect(){

		$string = "mysql:host=$this->HOST;dbname=$this->DB_NAME";
		
		try{

			$con = new PDO($string,$this->USER,$this->PASS);
		}catch(PDOException $e){

			die($e->getMessage());
		}

		return $con;
	}

	public function write($query){

		$con = $this->connect();

		
		$result = $con->exec($query);

    
		if($result){
			return $con->lastInsertId();
		}else{
			return False;
		}
	}

	public function read($query){
		$con = $this->connect();

		$stm = $con->prepare($query);
		$result = $stm->execute();
		

		if($result){
			
			$data = $stm->fetchAll(PDO::FETCH_ASSOC);
			if(is_array($data) && count($data) > 0){
				return $data;
			}
			}
		
		return false;
	}

	
}

$db_obj=new Database();