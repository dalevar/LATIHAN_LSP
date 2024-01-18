<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/css/main.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(/assets/images/bg-1.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Register</h3>
                                </div>
                            </div>
                            <form action="/register_proses" method="POST" class="signin-form">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" for="username" name="name"
                                        id="name" required>
                                    <label class="form-control-placeholder">Username</label>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" for="email" name="email"
                                        id="email" required>
                                    <label class="form-control-placeholder">Email</label>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <input id="password" type="password" class="form-control" for="password"
                                        name="password" id="password" required>
                                    <label class="form-control-placeholder">Password</label>
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" for="password"
                                        name="password_confirmation" id="password" required>
                                    <label class="form-control-placeholder">Konfirmasi Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Register</button>
                                </div>
                            </form>
                            <p class="text-center">I am already member <a data-toggle="tab" href="#signup">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>
