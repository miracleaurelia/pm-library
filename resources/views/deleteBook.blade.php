<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
    <link href="{{ URL::asset('css/create.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar" id="navbar-id">
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

    <div class="bookForm-container">
        <div class="bookForm">
            <h1>Delete Book</h1>
            <div class="bookForm-img">
                <img src="{{URL::asset('/images/delete.png')}}" alt="">
            </div>
            <div class="bookForm-form">
                @if(Session::has('msg'))
                    <div class="alert alert-msg text-center">
                        {{Session::get('msg')}}
                    </div>
                @endif
                <form action="{{route('delete')}}" method="POST">
                    @csrf
                    <div class="input">
                        <input type="text" class="form-control @error('bookTitle') is-invalid @enderror" id="bookTitle" name="bookTitle" placeholder="Book Title">

                        @error('bookTitle')
                        <span class="invalid-feedback" role="alert">
                            <h5 class="error">Title must be filled & between 5-20 characters</h5>
                        </span>
                        @enderror
                    </div>
                    <div class="input">
                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" placeholder="Book Author">

                        @error('author')
                        <span class="invalid-feedback" role="alert">
                            <h5 class="error">Author's name must be filled & between 5-20 characters</h5>
                        </span>
                        @enderror
                    </div>
                    <div class="input">
                        <input type="number" class="form-control @error('pageCount') is-invalid @enderror" id="pageCount" name="pageCount" placeholder="Book's Page Count">

                        @error('pageCount')
                        <span class="invalid-feedback" role="alert">
                            <h5 class="error">Page count must be filled & greater than 0</h5>
                        </span>
                        @enderror
                    </div>
                    <div class="input">
                        <input type="number" class="form-control @error('releaseYear') is-invalid @enderror" id="releaseYear" name="releaseYear" placeholder="Book's Release Year">

                        @error('releaseYear')
                        <span class="invalid-feedback" role="alert">
                            <h5 class="error">Release Year must be filled & between 2000-2021</h5>
                        </span>
                        @enderror
                    </div>
                    <button>Send</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        Copyright &copy; by PT Musang
    </footer>
</body>

</html>