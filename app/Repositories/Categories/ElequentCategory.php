<?php

namespace App\Repositories\Categories;

use App\Models\Category;
use App\Repositories\Categories\CategoryRepository;

class ElequentCategory implements CategoryRepository
{
  public function all()
  {
    return Category::all();
  }
}