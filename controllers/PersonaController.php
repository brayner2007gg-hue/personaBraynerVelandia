<?php

require_once '../models/Persona.php';

class PersonaController
{
    public function index()
    {
        $persona = new PersonaModel();

        $personas = $persona->listar();

        return $personas;
    }
}
