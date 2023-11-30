<?php

namespace Routes;

class RouteView {

    private $view;
    private $data = [];
    public function view($view, $data = null) {
    
        $this->view = $view;
        $this->data = $data;

        if(file_exists("app/views/".$this->view.'.php')) {
            require_once "app/views/".$this->view.'.php';
        }else{
            echo "Ficheiro não encontrado";
        }
    }

    
}