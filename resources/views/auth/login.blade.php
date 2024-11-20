<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/style/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/style/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/style/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page text-sm">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="/login-auth" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="text-sm">Email address</label>
                        <input type="email" name="email"
                            class="form-control form-control-sm @error('email') is-invalid @enderror" id="email"
                            placeholder="Email" aria-describedby="email-error" aria-invalid="true"
                            value="{{ old('email') }}">
                        <span id="email-error" class="error invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-sm">Password</label>
                        <input type="password" name="password"
                            class="form-control form-control-sm @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" aria-describedby="password-error" aria-invalid="true">
                        <span id="password-error" class="error invalid-feedback">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember" class="text-sm">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/style/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/style/dist/js/adminlte.min.js"></script>
</body>

</html>
