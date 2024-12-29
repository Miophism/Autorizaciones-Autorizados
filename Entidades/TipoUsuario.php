<?php

class TipoUsuario
{
    private int $id;
    private string $tipo;
    public function __construct(int $id, string $tipo)
    {
        $this->id = $id;
        $this->tipo = $tipo;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }
}
