<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

/**
 * Description of ConfigView
 *
 * @author explosive
 */
class ConfigView {

    private $nome;
    private $dadosretornados;

    public function __construct($nome, $dados = null) {
        $this->dadosretornados = $dados;
        $this->nome = $nome;
    }

    public function Render() {
        if (file_exists('app/' . $this->nome . '.php')) {
            include 'app/' . $this->nome . '.php';
        } else {
            echo "Pagina não existe!";
        }
    }

}
