<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php';?>

    <!-- Content -->
    <div class="main">
        <div class="container">
            <img src="photos/image.png" alt="" class="img-login">
            <div class="col-md-5 col-sm-12 login">
                <div class="login-title"><h2>LOGIN</h2></div>
                <div class="login-part">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="box-login">
                            <h6>Email</h6>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="box-login">
                            <h6>Password</h6>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <button class="w-100 btn btn-lg mt-3 login-btn" type="submit">Login</button>
                        <small class="d-block mt-2"><a href="">Lupa password?</a> </small>
                        <p>Atau</p>
                        <button class="w-100 btn btn-lg mt-4 signup-btn">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>