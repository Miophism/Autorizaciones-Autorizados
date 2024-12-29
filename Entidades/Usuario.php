<?php

class Usuario
{
	private int  $id;
	private string $nombre;
	private string $apellido;
	private string $email;
	private string $contrasena;
	private int $idTipoUsuario;

	public function __construct(int $id, string $nombre, string $apellido, string $email, string $contrasena, int $idTipoUsuario)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->email = $email;
		$this->contrasena = $contrasena;
		$this->idTipoUsuario = $idTipoUsuario;
	}




	/**
	 * Get the value of id
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 */
	public function setId(int $id): self
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of nombre
	 */
	public function getNombre(): string
	{
		return $this->nombre;
	}

	/**
	 * Set the value of nombre
	 */
	public function setNombre(string $nombre): self
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get the value of apellido
	 */
	public function getApellido(): string
	{
		return $this->apellido;
	}

	/**
	 * Set the value of apellido
	 */
	public function setApellido(string $apellido): self
	{
		$this->apellido = $apellido;

		return $this;
	}

	/**
	 * Get the value of email
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 */
	public function setEmail(string $email): self
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of contrasena
	 */
	public function getContrasena(): string
	{
		return $this->contrasena;
	}

	/**
	 * Set the value of contrasena
	 */
	public function setContrasena(string $contrasena): self
	{
		$this->contrasena = $contrasena;

		return $this;
	}

	/**
	 * Get the value of idTipoUsuario
	 */
	public function getIdTipoUsuario(): int
	{
		return $this->idTipoUsuario;
	}

	/**
	 * Set the value of idTipoUsuario
	 */
	public function setIdTipoUsuario(int $idTipoUsuario): self
	{
		$this->idTipoUsuario = $idTipoUsuario;

		return $this;
	}
}
