<?php

namespace App\Controller;

class ArticleController extends AppController{


    public function __construct(){
        $this->loadModel('Article');
    }

    public function home($request){
        $articles = $this->modelName->queryArticles();
        return $this->render('global.home', [
            "articles" => $articles
        ]);
    }

    public function show($request){
        $article = $this->modelName->queryArticles($_GET["id"]);
        return $this->render("global.show", [
            "article" => $article
        ]);
    }
}