<?php
class Manga {
    public $titulo;
    public $editorial;
    public $paginas;

    function __construct($titulo, $editorial, $paginas) {
        $this -> titulo = $titulo;
        $this -> editorial = $editorial;
        $this -> paginas = $paginas;
    }
    /*
    function setTitulo($titulo) {
        $this -> titulo = $titulo;
    }

    function getTitulo() {
        return $this -> titulo;
    }

    function setEditorial($editorial) {
        $this -> editorial = editorial;
    }

    function getEditorial() {
        return $this -> editorial;
    }

    function setPaginas($paginas) {
        $this -> paginas = $paginas;
    }

    function getPaginas() {
        return $this -> paginas;
    }
    */
}
?>