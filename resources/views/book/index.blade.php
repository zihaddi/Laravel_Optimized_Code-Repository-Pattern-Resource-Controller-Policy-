<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <div>
        {{-- nav --}}
        <div>
          <button onclick="window.location.href='{{route('categories.index')}}'">Categories</button>
          <button onclick="window.location.href='{{route('books.index')}}'">Books</button>
        </div>

        <div>
          @can('create', App\Models\Book::class)
          <button onclick="window.location.href='{{route('books.create')}}'">Add</button>
          @endcan
          <table style="border: 1px solid black;">
            <tr style="border: 1px solid black;">
              <th>Name</th>
              <th>Cateogry</th>
              <th>Quantity</th>
              @can('create' , App\Models\Book::class)
              <th>Operation</th>
              @endcan
            </tr>
            @foreach ($books as $book)
            <tr style="border: 1px solid black;">
              
                <td style="border: 1px solid black;">{{ $book->name }}</td>
                <td style="border: 1px solid black;">{{ $book->category }}</td>
                <td style="text-align:center; border: 1px solid black;">{{ $book->quantity }}</td>
              @can('create', App\Models\Book::class)
              <td style="border: 1px solid black;">
                <button onclick="window.location.href='{{route('books.edit' , $book->id)}}'">Edit</button>
              <form action={{ Route('books.destroy', $book->id) }} method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete"></td>
                </form>
               @endcan 
            </tr>
            @endforeach
          </table>
        </div>
    </div>

</body>
</html>