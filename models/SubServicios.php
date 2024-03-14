<?php

namespace Model;

class Categoria extends ActiveRecord {
    protected static $tabla = 'subservicios';
    protected static $columnasDB = ['id', 'nombre','description'];

    public $id;
    public $nombre;
    public $description;
}