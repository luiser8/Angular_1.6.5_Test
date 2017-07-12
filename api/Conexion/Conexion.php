<?php 
	class Conexion {
	    protected function connect(){
	        $con = mysqli_connect("localhost", "root", "19651249", "Test");
	        return $con;
	    }
	}
?>