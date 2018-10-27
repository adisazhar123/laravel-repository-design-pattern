<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticlesService;

class ArticlesController extends Controller
{
    protected $articleService;

    function __construct(ArticlesService $articleService){
      $this->articleService = $articleService;
    }

    public function getAll(){
      return $this->articleService->getAll();
    }
}
