<?php


namespace App\Model;
use  Core\Model\Model;

class ArticleModel extends Model{
    
    
    public function queryArticles(){
        return $this->db->query("SELECT * FROM articles", false);
    }

    public function newArticle(){
        return $this->db->save('INSERT INTO articles SET title = ?, text= ?, date= ?, categorie_id = ?', ["Article depuis ArticleModel", "nouvel article", "2020/01/21", 4]);
    }
}