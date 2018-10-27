<?php

namespace App\Services;
use App\Repositories\ArticleRepository;

class ArticlesService
{

  protected $articleRepo;

  function __construct(ArticleRepository $articleRepo)
  {
    $this->articleRepo = $articleRepo;
  }

  public function getAll(){
    return $this->articleRepo->all();
  }
}



?>
