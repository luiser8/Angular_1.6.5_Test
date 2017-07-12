<?php
require_once '../Conexion/Conexion.php';

		class Producto extends Conexion{
	    
	    public $arrUser = array();

	    public function getUsuarios(){
	    	
	        $sql = "SELECT * FROM usuarios";
	        $result = mysqli_query(parent::connect(), $sql);

	        if(mysqli_num_rows($result) != 0){
	        	while($recordset = mysqli_fetch_assoc($result)){
	            	$arrUser[] = $recordset;
	        	}
	        }	
	            return json_encode($arrUser);
	    }

	   	public function setUsuarios($name, $last){
			$sql = "INSERT INTO usuarios(id, name, last) 
								VALUES(null, '{$name}', '{$last}')";
			$result = mysqli_query(parent::connect(), $sql);
	    }

	}