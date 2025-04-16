<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function __construct() {
        // Puedes inicializar modelos aquí si son necesarios
    }
    
    public function index() {
        $data = [
            'title' => 'Bienvenido a ' . SITENAME,
            'description' => 'Un framework MVC simple en PHP'
        ];
        
        $this->view('home/index', $data);
    }
}