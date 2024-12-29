<?php

class Seccion
{
	private int $id;
	private string $titulo;
	private string $url;
	private string $descripcion;

	private int $idTipoUsuario;

	public function __construct(int $id, string $titulo, string $url, string $descripcion, int $idTipoUsuario)
	{
		$this->id = $id;
		$this->titulo = $titulo;
		$this->url = $url;
		$this->descripcion = $descripcion;
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
	 * Get the value of titulo
	 */
	public function getTitulo(): string
	{
		return $this->titulo;
	}

	/**
	 * Set the value of titulo
	 */
	public function setTitulo(string $titulo): self
	{
		$this->titulo = $titulo;

		return $this;
	}

	/**
	 * Get the value of url
	 */
	public function getUrl(): string
	{
		return $this->url;
	}

	/**
	 * Set the value of url
	 */
	public function setUrl(string $url): self
	{
		$this->url = $url;

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
