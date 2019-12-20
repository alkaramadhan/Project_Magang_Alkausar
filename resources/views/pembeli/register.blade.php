
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
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/loginregisterpembeli/register.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">






    <div class="logo">
        <img src="image/logowh.svg" width="13%" alt="">
    </div>

    <div class="wh">
        <p>Warehousenesia</p>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="titik">
                <img src="image/loginregisterpdgn/bulet.svg" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="vec">
                <img src="image/loginregisterpdgn/Vector.svg" alt="">
            </div>
        </div>
    </div>

   

    <div class="container">
        <div class="row justify-content-center">
            <div class="bg">
                <p class="daftar">{{ __('Daftar') }}</p>
                <div class="garis1"></div>
                <p class="pem"> Pembeli</p>
                <div class="garis2"></div>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="hidden" value="2" name="level">
                <div class="emailf">
                    <p for="name" class="emailform">{{ __('Nama Lengkap') }}</p>
                    <input id="name" type="text" class="o a" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" 
                    placeholder="Aku Siapa?" required autofocus>

                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="emailf">
                    <p for="email" class="emailform">{{ __('E-Mail Address') }}</p>
                    <input id="email"  type="email" class="o" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" 
                    required placeholder="william@example.com">

                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                </div>
                <div class="emailf">
                    <p for="password" class="emailform">{{ __('Password') }}</p>
                    <input type="password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required class="o" 
                    placeholder="*********">

                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <i class="fas fa-eye see" aria-hidden="true" onmouseover="mouseoverPass();"
                        onmouseout="mouseoutPass();"></i>
                </div>
                <div class="emailf">
                    <p for="password-confirm" class="emailform">{{ __('Confirm Password') }}</p>
                    <input type="password"  id="password-confirm" class="o" name="password_confirmation" required  placeholder="*********">
                    <i class="fas fa-eye see" aria-hidden="true" onmouseover="mouseoverPassword();"
                        onmouseout="mouseoutPassword();"></i>
                </div>
                
                    <button type="submit" class="btn loginbtn"> {{ __('Daftar') }}</button>
                    </form>
                <div class="reg">
                    <p class="sudah">Sudah Punya Akun ? <a href="{{url('login-pembeli')}}">Masuk</a></p>

                </div>
               
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="garisbul">
                            <img src="image/loginregisterpdgn/garisbulet.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <p class="copyright">©2019 PT. WHNesia Internasional Niaga</p>


    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
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
