<?php

namespace App\Repositories\Books;

interface BookRepository
{
  public function all();
  public function store($data);
  public function edit($data);
  public function update($data);
  public function create();
}