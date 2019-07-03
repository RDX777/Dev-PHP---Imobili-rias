<?php

namespace Sts\Models;

class ModelLocatario {

    public $dados;
    public $status;
    private $id;
    private $pagina;
    private $dadosresponse;

    public function consultaLocatario($pagina) {
        $this->pagina = $pagina;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/locatarios?pagina=" . $this->pagina);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
            "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        $this->dadosresponse = json_decode($response, true);
        return $this->dadosresponse;
    }

    public function consultaLocatarioId($id) {
        $this->id = $id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/locatarios?id=" . $this->id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
            "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        $this->dadosresponse = json_decode($response, true);
        return $this->dadosresponse;
    }

    public function editLocatario($dados) {
        unset($dados["salvar"]);
        unset($dados["excluir"]);
        $this->dados = $dados;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/locatarios");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->dados));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
            "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        $this->dadosresponse = json_decode($response, true);
        return $this->dadosresponse;
    }

    public function cadastraLocatario($dados) {
        unset($dados["ID_PESSOA_PES"]);
        unset($dados["salvar"]);
        unset($dados["excluir"]);
        $this->dados = $dados;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/locatarios");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->dados));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
            "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        $this->dadosresponse = json_decode($response, true);
        return $this->dadosresponse;
    }

}
