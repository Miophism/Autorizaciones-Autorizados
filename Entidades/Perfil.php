<?php

class Perfil
{
	private int $id;
	private string $nombre;
	private string $descripcion;

	private int $idUsuario;

	public function __construct(int $id, string $nombre, string $descripcion, int $idUsuario)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->idUsuario = $idUsuario;
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
	 * Get the value of descripcion
	 */
	public function getDescripcion(): string
	{
		return $this->descripcion;
	}

	/**
	 * Set the value of descripcion
	 */
	public function setDescripcion(string $descripcion): self
	{
		$this->descripcion = $descripcion;

		return $this;
	}

	/**
	 * Get the value of idUsuario
	 */
	public function getIdUsuario(): int
	{
		return $this->idUsuario;
	}

	/**
	 * Set the value of idUsuario
	 */
	public function setIdUsuario(int $idUsuario): self
	{
		$this->idUsuario = $idUsuario;

		return $this;
	}
}
