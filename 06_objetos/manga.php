<?php
class Manga {
    public string $titulo;
    public string $editorial;
    public int $paginas;

    function __construct(string $titulo, string $editorial, int $paginas) {
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