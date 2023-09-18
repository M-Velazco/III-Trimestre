<?php

class Paciente
{

	Private $Identificacion;
	Private $Nombres;
	Private $Apellidos;
	Private $FechaNacimiento;
	Private $Sexo;
	
	

	//Constructor
	public function Paciente()
	{
		
	}

	public function getIdentificacion()
	{
		return $this->Identificacion;
	}

	public function getNombres()
	{
		return $this->Nombres;
	}

	public function getApellidos()
	{
		return $this->Apellidos;
	}

	public function getFechaNacimiento()
	{
		return $this->FechaNacimiento;
	}

	public function getSexo()
	{
		return $this->Sexo;
	}

	

	/**
	 * 
	 * @param newVal
	 */
	public function setIdentificacion($newVal)
	{
		$this->Identificacion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setNombres($newVal)
	{
		$this->Nombres = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setApellidos($newVal)
	{
		$this->Apellidos = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setFechaNacimiento($newVal)
	{
		$this->FechaNacimiento = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSexo($newVal)
	{
		$this->Sexo = $newVal;
	}

	
	
	public function crearPaciente($Identificacion,$Nombre,$Apellidos,$FechaNacimiento,$Sexo)
	{
		$this->Identificacion=$Identificacion;
		$this->Nombre=$Nombre;
		$this->Apellidos=$Apellidos;
		$this->FechaNacimiento=$FechaNacimiento;
		$this->Sexo=$Sexo;
		
	}
	
	public function agregarPaciente()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into pacientes(PacIdentificacion, PacNombres, PacApellidos, PacFechaNacimiento, PacSexo) 
values ('$this->Identificacion','$this->Nombre','$this->Apellidos','$this->FechaNacimiento','$this->Sexo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function modificarPaciente($Identificacion)
	{	
		$this->Conexion=Conectarse();
		$sql="update pacientes set PacIdentificacion=$this->Identificacion', empNombre=$this->Nombres', PacApellidos='$this->Apellidos', PacFechaNacimiento='$this->FechaNacimiento', Pacsexo = $this->Sexo' where PacIdentificacion = '$this->Identificacion";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
		}

	public function eliminarPaciente($identificacion)
	{	
		$this->Conexion=Conectarse();
		$sql="delete from pacientes where PacIdentificacion = '$this->Identificacion";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
		}


	public function consultarPaciente()
	{
		$this->Conexion=Conectarse();
		$sql="select * from pacientes";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarpaciente_id($Identificacion)
	{
		$this->Conexion=Conectarse();
		$sql = "SELECT * FROM pacientes WHERE pacIdentificacion = '$Identificacion'";

		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	

}
?>