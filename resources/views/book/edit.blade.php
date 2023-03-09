<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action={{ Route('books.update' ,$book->id) }} method="post">
    @csrf
    @method('PUT')
    <input type="text" value={{ $book->name }} name="name"><br>
    <input type="text" value={{ $book->quantity}} name="quantity"><br>
    <input type="submit" value="Edit">
  </form>
</body>
</html>