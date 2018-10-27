<?php

namespace App\Repositories;
use App\Repositories\Interfaces\ArticleInterface;
use App\Repositories\Interfaces\BaseInterface;
use App\Repositories\BaseRepository;
use App\Article;

class ArticleRepository extends BaseRepository implements ArticleInterface
{

  protected $model;

  function __construct(Article $article)
  {
    $this->model = $article;
  }

}



?>
