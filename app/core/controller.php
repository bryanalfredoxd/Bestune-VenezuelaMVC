<?php
namespace App\Core;

class Controller {
    // Cargar modelo
    public function model($model) {
        $modelClass = "\\App\\Models\\{$model}";
        if(class_exists($modelClass)) {
            return new $modelClass();
        }
        throw new \Exception("Model {$model} not found");
    }
    
    // Cargar vista
    public function view($view, $data = []) {
        if(file_exists(APPROOT . '/views/' . $view . '.php')) {
            require_once APPROOT . '/views/' . $view . '.php';
        } else {
            throw new \Exception("View {$view} not found");
        }
    }
}