<?php


class RegistrodePersonalModels {
    private $_Identificacion;
    private $_Nombres;
    private $_Apellidos;
    private $_FechadeIngreso;
    private $_Direcionderesidencia;
    private $_Telefono;
    private $_Imail;
    private $_CargoOFuncion;
   
    public function getCargoOFuncion() {
        return $this->_CargoOFuncion;
        
    }
}
