<?php 
namespace Routes;
class Route {

    private  $controller = "product";
    private $object;
    private  $method = 'index';
    private  $class;
    private  $parameters = [];
    public function __construct() { 

            $url = $this->url() ? $this->url() :[0];

            if(file_exists('app/controllers/'.ucwords($url[0]).'Controller.php'))
            {
                $this->controller = $url[0];
                unset($url[0]);
            }else {
                $this->controller = "erro";
            }

            $this->class = "App\\Controllers\\".ucwords($this->controller)."Controller";
            $this->class = new $this->class;

            if(isset($url[1])){
                if(method_exists($this->class, $url[1]))
                {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            $this->parameters = $url ? array_values($url) : [];

            call_user_func_array([$this->class , $this->method], $this->parameters);
  
    }

    private function url() { 
        $url = filter_input(INPUT_GET,"url", FILTER_SANITIZE_URL);
        $url = trim(rtrim($url,"/"));
        $url = explode("/", $url);

        return $url;
    }

}