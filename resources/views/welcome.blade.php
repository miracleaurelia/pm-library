<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="header">
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
                    <a class="nav-link" href="#display-book">Display</a>
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
        <div class="hero-section">
            <h1>We are PM Library</h1>
            <h3>A Library from PT Musang</h3>
            <button>
                <a href="#about-us-id">About Us</a>
            </button>
        </div>
    </div>
    <div class="about-container" id="about-us-id">
        <div class="about-us">
            <div class="self-img">
                <div class="img-fit">
                    <img src="{{URL::asset('/images/lib.jpg')}}" alt="">
                    <div class="box first"></div>
                    <div class="box second"></div>
                </div>
            </div>
            <div class="desc">
                <h1>About Us</h1>
                <p>
                    We are one of the biggest library in Indonesia, established by PT Musang. Ever since our establishment in 1999, we have been one of the most loved and visited library in Indonesia, with our excellent ambience and various collection of books. Having reached success in our physical location of the library, we are now branching out to the digital library form through this website to further reach the books aficionado so that they can borrow books from us more conveniently.
                </p>
            </div>
        </div>
    </div>
    <div class="bookList-container" id="display-book">
        <div class="bookList-title">
            <h1>Book List</h1>
        </div>
        <div class="bookList-details">
            @if (count($books) <= 0) 
                <div class="warning">
                    <h3>We don't have any book currently. Lend a hand to restock the books by inserting books.</h3>
                    <a href="{{route('createBook')}}">Insert Book</a>
                </div>
            @else
                @foreach ($books as $book)
                    <div class="bookList">
                        <h3 class="book-name">{{$book->bookTitle}}</h3>
                        <h5>by {{$book->author}}</h5>
                        <h5>Published in {{$book->releaseYear}}</h5>
                        <h5>with {{$book->pageCount}} number of pages</h5>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="features" id="feature-id">
        <h1>Website's Features</h1>
        <div class="list-features">
            <a href="#display-book" class="feature-button">Display Books</a>
            <a href="{{route('createBook')}}" class="feature-button">Insert Books</a>
            <a href="{{route('updateBookView')}}" class="feature-button">Update Books</a>
            <a href="{{route('deleteForm')}}" class="feature-button">Delete Books</a>
        </div>
    </div>

    <div class="socmed">
        <div class="socmed-title">
            <h1>Follow Us</h1>
            <h1>On Social Media</h1>
        </div>
        <div class="socmed-img">
            <div class="youtube">
                <a href="https://www.youtube.com/">
                    <img src="{{URL::asset('/images/utube.png')}}" alt="">
                </a>
            </div>
            <div class="instagram">
                <a href="https://www.youtube.com/">
                    <img src="{{URL::asset('/images/ig.png')}}" alt="">
                </a>
            </div>
            <div class="twitter">
                <a href="https://www.youtube.com/">
                    <img src="{{URL::asset('/images/twitter.png')}}" alt="">
                </a>
            </div>
            <div class="facebook">
                <a href="https://www.youtube.com/">
                    <img src="{{URL::asset('/images/fb.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>

    <footer class="footer">
        Copyright &copy; by PT Musang
    </footer>

    <script>
        var navBar = document.getElementById("navbar-id");

        window.onscroll = function() {
            if (document.body.scrollTop >= 300 || document.documentElement.scrollTop >= 300) {
                navBar.classList.add("scrolled");
            } else {
                navBar.classList.remove("scrolled");
            }
        };
    </script>
</body>
</html>