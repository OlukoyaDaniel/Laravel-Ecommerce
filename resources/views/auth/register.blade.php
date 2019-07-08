<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Ecommerce | Sign Up</title>
</head>
<body>
  <div class="auth signup">
    <div class="left"></div>
    <div class="right">
      <div class="logo">
      <a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
      </div>
      <div class="form">
        <form action="{{ route('register') }}" method="post">
        @csrf
          <div class="full-name">
            <div class="form-group">
              <label for="">First Name</label>
              <input name='first_name' class="" type="text" value="{{ old('first_name') }}" placeholder="Enter your first name" autocomplete="name" autofocus>
              @error('first_name')
                <span class="red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input name='last_name' class="" type="text" value="{{ old('last_name') }}" placeholder="Enter your last name">
              @error('last_name')
              <span class="red" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="">Email</span></label>
            <input name='email' class="" type="email" value="{{ old('email') }}" placeholder="Enter your email">
            @error('email')
                <span class="red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
        </div>
          <div class="form-group">
            <label for="">Phone Number</span></label>
            <input name='phone_number' class="" type="text" value="{{ old('phone_number') }}" placeholder="Enter your phone number">
            @error('phone_number')
                <span class="red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
        </div>
          <div class="form-group">
            <label for="">Select Gender</label>
            <select name='gender'>
              <option value="Male" {{ old('gender') == 'Male' ? 'selected' :'' }}>Male</option>
              <option value="Female" {{ old('gender') == 'Female' ? 'selected' :'' }}>Female</option>
            </select>
            @error('gender')
                <span class="red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input name='password' class="@error('password') is-invalid @enderror" type="password" value="{{ old('password') }}" placeholder="Enter your password">
            @error('password')
                <span class="red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
        </div>
          <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" autocomplete="new-password" placeholder="Confirm your password">
          </div>
          <div class="form-group">
            <button type='submit' class="submit">Join Bridge</button>
          </div>
          <a href="/login"><p>Already have an account?  <span class="red">Sign In</span></p></a>
        </form>

      </div>
    </div>
  </div>
</body>
</html>
