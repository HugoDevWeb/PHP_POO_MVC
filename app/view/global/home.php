<h1>Accueil</h1>



<div class="container">
<div class="row align-items-center justify-content-center m-0">
<?php foreach ($articles as $article): ?>
    <div class="col-12 col-md-8 col-lg-4 mt-3">
    <div class="card" style="">
  <div class="card-body">
    <h5 class="card-title"><?= $article["title"] ?></h5>
    <p class="card-text"><?= $article["description"] ?></p>
    <a href="/test.php">test</a>
    <a href="/show/?id=<?=$article["id"] ?>" class="card-link btn btn-info rounded-pill text-white float-right">Info article</a>
  </div>
</div>
    </div>
    
<?php endforeach; ?>
</div>
</div>

