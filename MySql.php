<?php

Class MySql
{
	private $_servidor;
	private $_usuario;
	private $_pass;
	private $_bd;

	function __construct($servidor, $usuario, $pass, $bd) {
		$this->_servidor = $servidor;
		$this->_usuario = $usuario;
		$this->_pass = $pass;
		$this->_bd = $bd;
	}

	function conectar()
	{
		$conexion = mysql_connect($this->_servidor, $this->_usuario, $this->_pass);
		mysql_select_db($this->_bd, $conexion);
	}

	function insertar($name, $email, $tel, $men)
	{
		$query = "Insert into formulario(nombre, email, telefono, mensaje) values('".$name."', '".$email."', '".$tel."', '".$men."')";
		mysql_query($query);
	}

}

?>