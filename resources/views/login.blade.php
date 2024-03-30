<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid" style="height: 100vh!important;">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center mx-5">
                <h4 class="mb-4"><i class="bi bi-handbag text-danger"></i> SIMS Web App</h4>
                <h3 class="mb-5 text-center">Masuk atau buat akun<br>untuk memulai</h3>
                <form action="{{ route('login.authenticate') }}" method="post" class="w-100">
                    @csrf
                    <div class="input-group mb-4">
                        <span class="input-group-text">@</span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="masukkan email Anda">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password Anda">
                        <span class="input-group-text"><i class="bi bi-eye"></i></span>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Masuk</button>
                </form>
            </div>
            <div class="col w-100 vh-100" style="background-image: url('{{asset('assets/Frame 98699.png')}}'); background-size: cover; background-position: center">
            </div>
        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>