<?php
class persona
{
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function getFnac(): string
    {
        return $this->fnac;
    }

    public function setFnac(string $fnac): void
    {
        $this->fnac = $fnac;
    }
    // property declaration de atributos
    public $nombre;
    public $apellido;
    public $fnac;

    public function __construct( string $nombre, string $apellido, string $fnac)
    {
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
        $this->fnac = $fnac;
    }

    // method declaration
    }

?>