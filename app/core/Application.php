<?php
namespace App\Core;

class Application {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct() {
        // Constructor vacío por ahora
    }
    
    public function run() {
        $url = $this->parseUrl();
        
        // Buscar controlador
        if(isset($url[0]) && file_exists(APPROOT . '/Controllers/' . ucwords($url[0]) . 'Controller.php')) {
            $this->controller = ucwords($url[0]) . 'Controller';
            unset($url[0]);
        } else {
            $this->controller = 'HomeController';
        }
        
        // Cargar controlador
        $controllerClass = "\\App\\Controllers\\{$this->controller}";
        $this->controller = new $controllerClass();
        
        // Buscar método
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        // Recoger parámetros
        $this->params = $url ? array_values($url) : [];
        
        // Llamar al método del controlador con los parámetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    
    protected function parseUrl() {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}