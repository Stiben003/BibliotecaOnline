<?php
   function lista_categoria(){		
		include('connect.php');	
		$sql="SELECT * FROM categoria";
		return $result=$conexion->query($sql); 
	}
   
	function extraerCategoria($id){		
		include('connect.php');	
		$sql="SELECT * FROM categoria WHERE idcategoria = '$id'";
		return $result=$conexion->query($sql); 
    }
    
    function lista_autor(){		
		include('connect.php');	
		$sql="SELECT * FROM autor";
		return $result=$conexion->query($sql); 
	}
   
	function extraerAutor($id){		
		include('connect.php');	
		$sql="SELECT * FROM autor WHERE idautor = '$id'";
		return $result=$conexion->query($sql); 
	}
	function lista_editorial(){		
		include('connect.php');	
		$sql="SELECT * FROM editorial";
		return $result=$conexion->query($sql); 
	}
   
	function extraerEditorial($id){		
		include('connect.php');	
		$sql="SELECT * FROM editorial WHERE ideditorial = '$id'";
		return $result=$conexion->query($sql); 
	}
?>