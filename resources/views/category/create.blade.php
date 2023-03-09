<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
   <form action="{{ route('categories.store') }}" method="post">
    @csrf
      <input type="text" name="name" placeholder="input name"><br>
      <input type="text" name="quantity" placeholder="input quantity"><br>
      {{-- <input type="number" name="category_id" placeholder="input category id"><br> --}}
      
      <input type="submit" value="Add">
      {{-- <button onclick="window.location.href='{{route('books.store' )}}">Back</button> --}}
    </form> 
</body>
</html>