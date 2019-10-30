<?php

include_once 'db.php';

class queryPeliculas extends db {

    function obtenerPeliculas(){
        $query = $this->connect()->query('SELECT * FROM pelicula');
        return $query;
    }

} 


?>