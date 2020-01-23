<?php

require 'app/App.php';
use App\App;
use App\Controller\ArticleController;
use Core\Routing\Request;
use Core\Routing\Router;

define ('ROOT', __DIR__);
App::load();

$router = new Router(new Request);


$router->get("/", 'ArticleController@home');

// $router->get('/test', 'AppController@test');

$router->get("/show/?id=?", 'ArticleController@show');









// if (isset($_GET["page"]) && $_GET["page"] == 'home') {
//     $result = new ArticleController();
//     $result->home();
// } elseif (isset($_GET["page"]) && $_GET["page"] == 'single') {
//     $result = new ArticleController();
//     // $result->single($_GET["id"]);
// } elseif(isset($_GET["page"]) && $_GET["page"] == "show") {
//     $result = new ArticleController();
//     $result->show($_GET["id"]);
// }
// else {
    // $result = new ArticleController();
    // $result->404();
// }
