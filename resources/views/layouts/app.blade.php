<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Ecommerce | @yield('title','')</title>
</head>
<body>
  <div class="navigation">
    <label for="toggle">&#9776;</label>
    <input type="checkbox" id="toggle"/>
    <div class="nav-top">
    <a href="/">
      <img src="{{ asset('images/logo.png') }}" alt=""></a>
      <div class="nav-top-side">
        <div class="search-container">
          <form action="/search_bag" method="POST">
            @csrf
            <input type="text" placeholder="Search.." name="item">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div class="cart">
          <a href="/shopping_bag"><i class="fa fa-shopping-cart"></i>
            @if (session('shopping_bag'))
                <span>{{ count(session('shopping_bag')) }}</span>
            @else
                <span>0</span>
            @endif

        </a>
        </div>

        @guest
            <div class='final__dropdown'>
                <a href='#' class='final__dropdown__hover'><i class='fa fa-user'></i></a>
                <div class='final__dropdown__menu'>
                    <a href="{{ route('login') }}">Sign In</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Sign Up</a>
                    @endif
                </div>
            </div>

            @else
                <div class='saved'>
                    <a href='/wishlist'><i class='fa fa-heart'></i></a>
                </div>
                <div class='final__dropdown'>
                    <a href='#' class='final__dropdown__hover' ><i class='fa fa-user'></i></a>
                    <div class='final__dropdown__menu'>
                        <a href='{{ route('logout') }}' onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
        @endguest

      </div>
    </div>
    <div class="nav-bottom">
      <?php $categories=['Fashion','Electronics','Gifts','Accessories','Collections','Sports']; $page_title=''?>
      @foreach ($categories as $category)
        <a href="/products/{{ $category }}" class="{{ $page_title==$category ? 'active' :"" }}"><p>{{ $category }}</p></a>
      @endforeach
    </div>
  </div>

      @yield('content')

  <footer class="footer">
    footer
  </footer>

</body>
</html>
