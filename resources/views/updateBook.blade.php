<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar" id="navbar-id" style="background-image: url(../images/night-sky.jpeg); background-size: cover; background-position: center">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon">
            <span>
                <img src="{{URL::asset('/images/hamburger.png')}}" alt="">
            </span>
        </label>
        <div class="name-logo">
            <img src="{{URL::asset('/images/name_logo.png')}}" alt="">
        </div>
        <div class="nav-list">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('display')}}">Display</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('createBook')}}">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('updateBookView')}}">Update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('deleteForm')}}">Delete</a>
            </li>
        </div>
    </nav>

    <div class="bookList-container" style="box-sizing: border-box; padding-top: 80px; min-height: 100vh; display: flex; flex-direction: column; justify-content: center;">
        <div class="bookList-title">
            <h1>Update Book</h1>
        </div>
        <div class="bookList-details">
            @foreach ($books as $book)
                <div class="bookList">
                    <h3 class="book-name">{{$book->bookTitle}}</h3>
                    <h5>by {{$book->author}}</h5>
                    <h5>Published in {{$book->releaseYear}}</h5>
                    <h5>with {{$book->pageCount}} number of pages</h5>

                    <a class="update" href="{{route('editBook', $book->id)}}">Update</a>
                </div>
            @endforeach
        </div>
    </div>

    <footer class="footer">
        Copyright &copy; by PT Musang
    </footer>
</body>
</html>