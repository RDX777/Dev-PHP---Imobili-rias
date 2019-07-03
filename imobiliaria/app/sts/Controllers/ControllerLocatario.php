<?php

namespace Sts\Controllers;

class ControllerLocatario {

    public $dados;
    private $dadosretornados;
    private $pagina;
    private $id;
  
    public function consultaLocatario($pagina) {
        $this->pagina = $pagina;
        $listardados = new \Sts\Models\ModelLocatario();
        $this->dadosretornados = $listardados->consultaLocatario($this->pagina);
        
        $this->mostrarDados("ViewGridLocatario", $this->dadosretornados);
    }

    public function editaLocatario($id) {
        $this->id = $id;
        $editardados = new \Sts\Models\ModelLocatario();
        $this->dadosretornados = $editardados->consultaLocatarioId($this->id);
        if (!empty($_POST)) {
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $editardados->editLocatario($dados);
            unset($this->dados);
            $this->dadosretornados = $editardados->consultaLocatarioId($this->id);
            $this->dados = $editardados->consultaLocatarioId($id);
        }
        $this->mostrarDados("ViewFormularioLocatario", $this->dadosretornados);
    }

    public function cadastraLocatario() {
        if (!empty($_POST)) {
            $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $cadastrardados = new \Sts\Models\ModelLocatario();
            $this->dadosretornados = $cadastrardados->cadastraLocatario($this->dados);
            $this->editaLocatario($this->dadosretornados["data"][0]["data"]["id_pessoa_pes"]);
        } else {
            $this->mostrarDados("ViewFormularioLocatario", $this->dadosretornados);
        }
    }

    public function mostrarDados($pagina, $dados = null) {
        $this->dadosretornados = $dados;
        $this->pagina = $pagina;
        $CarregarView = new \Core\ConfigView('sts/Views/' . $this->pagina, $this->dadosretornados);
        $CarregarView->Render();
    }

}
