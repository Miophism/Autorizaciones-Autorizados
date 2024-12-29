<?php

class Funcion
{
	private int $id;
	private int $idFuncionPadre;

	private int $idTipoUsuario;

	private int $idSeccion;

	public function __construct(int $id, int $idFuncionPadre, int $idTipoUsuario, int $idSeccion)
	{
		$this->id = $id;
		$this->idFuncionPadre = $idFuncionPadre;
		$this->idTipoUsuario = $idTipoUsuario;
		$this->idSeccion = $idSeccion;
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
	 * Get the value of idFuncionPadre
	 */
	public function getIdFuncionPadre(): int
	{
		return $this->idFuncionPadre;
	}

	/**
	 * Set the value of idFuncionPadre
	 */
	public function setIdFuncionPadre(int $idFuncionPadre): self
	{
		$this->idFuncionPadre = $idFuncionPadre;

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

	/**
	 * Get the value of idSeccion
	 */
	public function getIdSeccion(): int
	{
		return $this->idSeccion;
	}

	/**
	 * Set the value of idSeccion
	 */
	public function setIdSeccion(int $idSeccion): self
	{
		$this->idSeccion = $idSeccion;

		return $this;
	}
}
