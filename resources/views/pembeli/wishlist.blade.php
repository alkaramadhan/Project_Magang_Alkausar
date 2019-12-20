<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <!-- <meta name="description"
    value="An example of a fluid/liquid/responsive full window width carousel with the previous and next image truncated on the sides." />
  <meta name="keywords" value="example, carousel, full, fluid, liquid, window, width" /> -->
    <!-- <meta name="viewport" content="user-scalable=no"> -->
    <link rel="icon" type="image/png" href="image/logowh.png">
    <title>Warehousenesia.id</title>
    <script src="{{ asset('js/app.js') }}"></script>






    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap CSS -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home/navbar.css">
    <link rel="stylesheet" href="css/home/content1.css">
    <link rel="stylesheet" href="css/home/content2.css">
    <link rel="stylesheet" href="css/home/sidebar.css">
    <link rel="stylesheet" href="css/home/content4.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- Navbar -->
    @include('layouts.beli')
    <!-- End Of Navbar -->

    <!-- Sidebar -->
    <nav class="main-menu">
        <ul>
            <li>
                <a href="http://justinfarrow.com">
                    <i class="fa fa-shopping-cart fa-2x"></i>
                    <span class="nav-text">
                        Keranjang
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-bell fa-2x"></i>
                    <span class="nav-text">
                        Notifikasi
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="{{url('favorite')}}">
                    <i class="fa fa-heart fa-2x"></i>
                    <span class="nav-text">
                        Wishlist
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-envelope fa-2x"></i>
                    <span class="nav-text">
                        Pesan
                    </span>
                </a>

            </li>
            <div class="garisss"></div>
            <li>
                <a href="#">
                    <i class="fa fa-2x"><img src="image/home/kategori.svg" width="" alt=""></i>
                    <span class="nav-text">
                        Kategori
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-2x"><img src="image/home/officialtore.svg" alt=""></i>
                    <span class="nav-text">
                        Official Store
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-2x"><img src="image/home/best.svg" alt=""></i>
                    <span class="nav-text">
                        Best Store
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-2x"><img src="image/home/prom.svg" width="15px" alt=""></i>

                    <span class="nav-text">
                        Promo
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
                <a href="#">
                    <i class="fa fa-cog fa-2x"></i>
                    <span class="nav-text">
                        Pengaturan
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End of Sidebar -->

    <!-- Content 1 -->
    <div id="wrapper">
        <div id="carousel">
            <img src="image/home/car1.jpg" alt="building1" width="800" height="220" />
            <img src="image/home/car2.jpg" alt="building2" width="800" height="220" />
            <img src="image/home/car3.jpg" alt="building3" width="800" height="220" />
            <img src="image/home/car1.jpg" alt="building4" width="800" height="220" />
            <img src="image/home/car2.jpg" alt="building5" width="800" height="220" />
            <img src="image/home/car3.jpg" alt="building6" width="800" height="220" />
        </div>
        <a href="#" id="prev" height="50" title="Show previous"> </a>
        <a href="#" id="next" height="50" title="Show next"> </a>
        <div id="pager"></div>
    </div>
    <!-- End of Content 1 -->

    <!-- Content 2 -->

    <div class="testimonial-section">
        <div class="inner-width">
            <h1>Official Store<img src="image/home/officialtore.svg" class="ml-2" alt=""></h1>

            <div class="border"></div>

            <div class="slides owl-carousel">

                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/adidas.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>

                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/eiger.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>

                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/lea.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/zara.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/adidas.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/rolex.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/Rectangle.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/eiger.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- End Of Content 2 -->


    <!-- Content 3 -->

    <div class="testimonial-section sas">
        <div class="inner-width">
            <h1>Best Store<img src="image/home/best.svg" class="ml-2" alt=""></h1>

            <div class="border"></div>

            <div class="slides owl-carousel">

                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/adidas.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>

                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/eiger.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>

                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/lea.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/zara.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/adidas.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/rolex.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/Rectangle.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
                <div class="testimonial">
                    <div class="test-info">
                        <img class="test-pic" src="image/home/store/eiger.svg" alt="">
                        <div class="test-name">

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- End of content 3 -->

    <!-- Content 4 -->
  <center><h2>Barang Favorite Anda</h2></center>
  <br>
    <div class="con">
        @foreach($wishlists as $post)
        <div class="row">
            <div class="card">
            <img src="{{ asset('image/produk/'.$post->product->gambar1) }}" class="card-img-top" alt="...">
                <a href="#" onclick="showsnake()"><i class="fas fa-heart" id="changeRed"></i></a>
                <div class="card-body">

                    <a href="">
                        <p class="nmbarang">{{ $post->nama_produk }}</p>
                    </a>
                    <p class="hrgbarang">{{ $post->harga_satuan }}</p>
                    <img src="{{ asset('image/home/officialtore.svg')}}" width="20px" class="cardemblm mr-2" alt="">
                    <a href="">
                    
                        <p class="nmtoko">{{$post->user->name}}</p>

                        <a class="btn btn-danger" href="{{ route('hapus', $post->id)}}">UnFavorite</a>
                </div>
            </div>

            @endforeach
           







            <!-- End of Content 4 -->



            <!-- Optional JavaScript -->


            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script type="text/javascript">
                $(".owl-carousel").owlCarousel({
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        680: {
                            items: 2
                        },
                        960: {
                            items: 5
                        }
                    }
                });

            </script>
            <script type="text/javascript" src="js/mdb.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
            <script src="js/home/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>


            <script type="text/javascript">
                $(function () {
                    $('#carousel').carouFredSel({
                        width: '100%',
                        height: '100%',
                        items: {
                            visible: 3,
                            start: -1,

                        },
                        scroll: {
                            items: 1,
                            duration: 1000,
                            timeoutDuration: 3000
                        },
                        prev: '#prev',
                        next: '#next',
                        pagination: {
                            container: '#pager',
                            deviation: 1
                        }
                    });
                });

            </script>

            <script>
                document.getElementById("changeRed").onclick = function () {
                    document.getElementById("changeRed").style.color = '#F54C93';
                }

                document.getElementById("changeRed2").onclick = function () {
                    document.getElementById("changeRed2").style.color = '#F54C93';
                }

                document.getElementById("changeRed3").onclick = function () {
                    document.getElementById("changeRed3").style.color = '#F54C93';
                }

                document.getElementById("changeRed4").onclick = function () {
                    document.getElementById("changeRed4").style.color = '#F54C93';
                }

                document.getElementById("changeRed5").onclick = function () {
                    document.getElementById("changeRed5").style.color = '#F54C93';
                }

            </script>
            <script>
                function showsnake() {
                    // Get the snackbar DIV
                    var x = document.getElementById("snackbar");

                    // Add the "show" class to DIV
                    x.className = "show";

                    // After 3 seconds, remove the show class from DIV
                    setTimeout(function () {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                }

            </script>
            <script>
                $('a i.fa-heart').click(function (e) {
                    // Special stuff to do when this link is clicked...

                    // Cancel the default action
                    e.preventDefault();
                });

            </script>
