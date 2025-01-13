<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row w-100">
      <div class="col-md-6 mx-auto p-4 bg-white border rounded shadow-sm">
        <h2 class="text-center mb-4">Registration</h2>
        <form action="{{ route('registerUser') }}" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your Fullname" class="form-control 
              @error('name') is-invalid @enderror">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" class="form-control 
              @error('email') is-invalid @enderror">
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" value="" placeholder="Enter your password" class="form-control 
              @error('password') is-invalid @enderror">
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" value="" placeholder="Confirm your password" class="form-control 
              @error('confirm_password') is-invalid @enderror">
            @error('confirm_password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="{{route('auth.login')}}" class="btn btn-link">Back to login</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
