<?php

namespace App\Providers;
use App\Repositories\ArticleRepository;
use App\Repositories\Interfaces\ArticleInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
  public function register(){
    $this->app->bind(
      ArticleInterface::class,
      ArticleRepository::class
    );
  }
}



?>
