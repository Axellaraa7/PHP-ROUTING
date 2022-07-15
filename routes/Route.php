<?php 
class Route{
  private $route;

  public function __construct(){
    $this->route = array();
  }

  public function addRoute(string $path, callable $callback){ $this->route[$path] = $callback; }

  public function routing(){
    $uri = explode("/",$_SERVER["REQUEST_URI"]);
    $uri = "/".array_pop($uri);
    $found = false;
    foreach($this->route as $path=>$callback){
      if($path !== $uri) continue;
      $found = true;
      echo $callback();
    }
    if(!$found) $this->routes["/404"]();
  }
}
?>