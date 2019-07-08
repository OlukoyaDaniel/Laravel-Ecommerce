<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Ecommerce | Sign In</title>
</head>
<body>
  <div class="auth login">
    <div class="left"></div>
    <div class="right">
      <div class="logo">
        <a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
      </div>


      <div class="form">
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="">Email</span></label>
            <input name='email' type="email" class="" id="" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="@error('password') is-invalid @enderror" id="" placeholder="Enter your password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <button type='submit' class="submit">Sign In</button>
          </div>

          <a href="/register"><p>New to Bridge<span class="red">.</span>?  <span class="red"> Sign Up</span></p></a>
        </form>

      </div>
    </div>
  </div>
</body>
</html>
