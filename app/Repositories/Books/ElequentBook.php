<?php

namespace App\Repositories\Books;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Repositories\Books\BookRepository;

class ElequentBook implements BookRepository
{

  private Book $book;

  public function __construct( Book $book)
  {
    $this->book = $book;
  }

  public function all()
  {
    $books = $this->book::all();
    return $books;
  }

  public function store($data)
  {
   
    Book::create($data);
  }

  public function edit($data)
  {
    $book = Book::find($data);
    return $book;
  }
  public function update($data)
  {
     $book = new Book;
     $book->update($data);
  }

  public function create()
  {
     return Category::all();
  }
}