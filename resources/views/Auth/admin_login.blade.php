<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/seodashlogo.png')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css')}}" />
  <style>
    /* Background utama */
    body {
      margin: 0;
      padding: 0;
      background: url('assets/images/background.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    /* Wrapper untuk blur dan transparan */
    .login-wrapper {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(8px);
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      padding: 30px;
      max-width: 400px;
      margin: 50px auto;
    }

    /* Styling untuk header form */
    .login-header {
      text-align: center;
      font-size: 34px;
      font-weight: bold;
      text-transform: uppercase;
      color: #333;
      margin-bottom: 10px;
    }

    /* Form styling */
    .form-label {
      font-weight: bold;
      color: #555;
    }

    .form-control {
      margin-bottom: 15px;
      border-radius: 10px;
      border: 1px solid #ccc;
      padding: 10px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 10px;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper">
    <div class="d-flex align-items-center justify-content-center min-vh-100">
      <div class="login-wrapper">
        <!-- Header Form -->
        <div class="login-header">Login</div>
        <p class="text-center">Silakan login</p>
        <!-- Form -->
        <form action="{{route('admin.submit')}}" method="post" class="signin-form">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="text-danger">
              @error('username')
              {{$message}}
              @enderror
            </div>
          </div>
          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            <div class="text-danger">
              @error('password')
              {{$message}}
              @enderror
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
              <label class="form-check-label" for="flexCheckChecked">
                Remember this Device
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
