<?php
include_once 'conexion.php';

/**
 * 
 */
class empleado
{
	private $NombreEmpleado;
    private $Idempleado;



     function getNombreEmpleado(){
      return $this->NombreEmpleado;
  }
  function setNombreEmpleado($NombreEmpleado){
    $this->NombreEmpleado=$NombreEmpleado;

  }
  function getIdempleado(){
    return $this->Idempleado;

  }
  function setIdempleado($Idempleado){
    $this->Idempleado=$Idempleado;

    }


    function empleadoBuscar(){

    try {

      $pdo = new Conexion();

      print $this->getIdempleado();

$query = $pdo->prepare("SELECT * FROM empleado WHERE IdEmpleado='".$this->getIdempleado()."'
	AND NombreEmpleado = '".$this->getNombreEmpleado()."';");
       $query->execute();

   

        if ($query->rowCount()) {
        echo "existe";
     
        	
        } else {
           echo"no existe";
        }
        


      
    } catch (PDOException $e) {
      echo $query . "<br>" . $e->getMessage();
    }
    $con = null;
  }/**final de empleadoBuscar*/
	
	
}



?>