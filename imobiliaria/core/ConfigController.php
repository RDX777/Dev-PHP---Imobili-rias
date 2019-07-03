<?php

namespace Core;

/**
 * Description of ConfigController
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class ConfigController {

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlMetodo;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->UrlConjunto = explode("/", $this->Url);

            if ((isset($this->UrlConjunto[0])) AND ( isset($this->UrlConjunto[1]))) {
                $this->UrlController = $this->UrlConjunto[0];
                $this->UrlMetodo = $this->UrlConjunto[1];
            } else {
                $this->UrlController = 'Home';
                $this->UrlMetodo = 'index';
            }
        } else {
            $this->UrlController = 'Home';
            $this->UrlMetodo = 'index';
        }
    }
    

    public function carregar() {
        $classe = "\\Sts\\Controllers\\Controller" . $this->UrlController;
        $classeCarregar = new $classe;
        switch ($this->UrlMetodo) {
            case 'consultaLocatario':
                $classeCarregar->consultaLocatario(filter_input(INPUT_GET, "pagina", FILTER_DEFAULT));
                break;
            case 'editaLocatario':
                $classeCarregar->editaLocatario(filter_input(INPUT_GET, "id", FILTER_DEFAULT));
                break;
            case 'cadastraLocatario':
                $classeCarregar->cadastraLocatario();
                break;
            default:
                $classeCarregar->index();
        }
    }

}
