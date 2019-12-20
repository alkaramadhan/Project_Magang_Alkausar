<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="image/logowh.png">
    <title>Warehousenesia.id</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css2/loginregisterpedagang/login.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">

    <div class="logo">
    <a href="{{url('/')}}">
        <img src="image/logowh.svg" width="13%" alt="">
        </a>
    </div>

    <div class="wh">
        <p>Warehousenesia</p>
    </div>


    <div class="container">
        <div class="row  justify-content-center">
            <div class="gambar item">
                <img src="image/loginregisterpdgn/Rectangle 42.svg" width="100%">
                <h1 class="masuk">Masuk</h1>
                <div class="garis1"></div>
                <p class="sebagai">sebagai</p>
                <div class="garis2"></div>
                <p class="pedagang">pedagang</p>
                <p class="atau">atau</p>
                <p class="pembeli">sebagai <a href="{{url('login-pembeli')}}">Pembeli</a></p>
            </div>
            <div class="bg">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                   
                    <div class="emailf">
                        <p class="emailform">Email</p>
                        <input id="email" type="email" class="o"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required autofocus placeholder="Your Email">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="passwordf">
                        <p class="emailform">Password</p>
                        <input id="password" type="password" class="ippw" class="form-control{{ $errors->has('password') ? ' 
                        is-invalid' : '' }}" name="password" placeholder="Your Password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <i class="fas fa-eye see" aria-hidden="true" onmouseover="mouseoverPassw();"
                            onmouseout="mouseoutPassw();"></i>
                    </div>

                   

                    <div class="log">
                        <button type="submit" class="btn loginbtn">Send</button>
                    </div>
                    <div class="regis">
                        Tidak Mempunyai Akun ? <a href="{{url('register-pedagang')}}">Daftar Sekarang</a> <br>
                        atau
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Lupa Password') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    <p class="copyright">©2019 PT. WHNesia Internasional Niaga</p>


    <!-- Optional JavaScript -->
    <script src="js/loginregispedagang/login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>

</html>
