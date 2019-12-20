<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <!-- <meta name="description"
    value="An example of a fluid/liquid/responsive full window width carousel with the previous and next image truncated on the sides." />
  <meta name="keywords" value="example, carousel, full, fluid, liquid, window, width" /> -->
    <!-- <meta name="viewport" content="user-scalable=no"> -->
    <link rel="icon" type="image/png" href="image/logowh.png">
    <title>Warehousenesia.id</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/produk_pedagang/navbar.css">
    <link rel="stylesheet" href="css/produk_pedagang/sidebar.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/header.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/button.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/setting1.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/setting2.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/setting3.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/setting4.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/setting5.css">
    <link rel="stylesheet" href="css/pengaturan_akun_pedagang/footer.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">


    <!-- Navbar -->
    @include('layouts.dagang')
    <!-- End Of Navbar -->

    <!-- Sidebar -->
    @include('pedagang.sidebar_dagang')
    <!-- End of Sidebar -->

    <!-- Header -->
    <h1><b>Pengaturan Akun</b></h1>
    <!-- End of Header -->

    <!-- Button -->
    <div class="buttonn">
        <button id="b1">Informas</button>
        <button id="b2">Catatan</button>
        <button id="b3">Lokasi</button>
        <button id="b4">Produk Unggulan</button>
        <button id="b5">Official Store</button>
    </div>
    <!-- Button -->

    <!-- Content 1 -->
    <div class="setting1">
        <p class="jdl">informasi Akun</p>
        <p class="jdl2">Reguler Merchant</p>
        <div class="input1">
            <p>Nama Toko</p>
            <input type="text" placeholder="Masukan Nama Toko">
        </div>
        <div class="input2">
            <p>Slogan</p>
            <input type="text" placeholder="Masukan Slogan">
        </div>
        <div class="input3">
            <p>NPWP</p>
            <input type="text" placeholder="Masukan NPWP">
        </div>
        <div class="input4">
            <p>Deskripsi</p>
            <textarea name="" id="" cols="30" rows="5"></textarea>
        </div>
        <button>Save</button>
        <div>
            <p class="jdl3">Gambar Toko</p>
            <div class="upimg">
                <img id="img1" src="http://placehold.it/120" alt="your image" />
                <div class="tulisanimage">
                    <p>Besar file maksimum : 10MB<br>Ekstensi file yang diperbolehkan : .JPG, .JPEG, .PNG </p>
                    <input type='file' onchange="img1(this);" />
                </div>
            </div>
        </div>
        <div class="man">
            <p>Sampul Toko</p>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"></label>
                                <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <div><b>Preview</b></div>
                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-danger btn-xs remove-preview">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="box-body"></div>
                                    </div>
                                </div>
                                <div class="dropzone-wrapper">
                                    <div class="dropzone-desc">
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <p>Choose an image file or drag it here.</p>
                                    </div>
                                    <input type="file" name="img_logo" class="dropzone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End of Content 1 -->

    <!-- Content 2  -->
    <div class="setting2">
        asdasldkaslda;sdl
    </div>
    <!-- End of Content 2  -->


    <!-- Content 3  -->
    <div class="setting3">
        asd;kasd;las;lkd
    </div>
    <!-- End of Content 3  -->


    <!-- Content 4  -->
    <div class="setting4">
        adadkasdka;sdlk;sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W
    </div>
    <!-- End of Content 4  -->


    <!-- Content 5  -->
    <div class="setting5">
        asdhusadasdjkashjsad
    </div>
    <!-- End of Content 5  -->



    <p class="footer">©2019 PT. WHNesia Internasional Niaga</p>


    <!-- Optional JavaScript -->


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/home/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
    <script>
        function img1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };

    </script>
    <script>
        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var htmlPreview =
                        '<img width="500" src="' + e.target.result + '" />' +
                        '<p>' + input.files[0].name + '</p>';
                    var wrapperZone = $(input).parent();
                    var previewZone = $(input).parent().parent().find('.preview-zone');
                    var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

                    wrapperZone.removeClass('dragover');
                    previewZone.removeClass('hidden');
                    boxZone.empty();
                    boxZone.append(htmlPreview);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function reset(e) {
            e.wrap('<form>').closest('form').get(0).reset();
            e.unwrap();
        }
        $(".dropzone").change(function () {
            readFile(this);
        });
        $('.dropzone-wrapper').on('dragover', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('dragover');
        });
        $('.dropzone-wrapper').on('dragleave', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('dragover');
        });
        $('.remove-preview').on('click', function () {
            var boxZone = $(this).parents('.preview-zone').find('.box-body');
            var previewZone = $(this).parents('.preview-zone');
            var dropzone = $(this).parents('.form-group').find('.dropzone');
            boxZone.empty();
            previewZone.addClass('hidden');
            reset(dropzone);
        });

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('button').click(function () {
            if (this.id == 'b1') {
                $('.setting1').show();
                $('.setting2').hide();
                $('.setting3').hide();
                $('.setting4').hide();
                $('.setting5').hide();
            }
            if (this.id == 'b2') {
                $('.setting1').hide();
                $('.setting2').show();
                $('.setting3').hide();
                $('.setting4').hide();
                $('.setting5').hide();
            }
            if (this.id == 'b3') {
                $('.setting1').hide();
                $('.setting2').hide();
                $('.setting3').show();
                $('.setting4').hide();
                $('.setting5').hide();
            }
            if (this.id == 'b4') {
                $('.setting1').hide();
                $('.setting2').hide();
                $('.setting3').hide();
                $('.setting4').show();
                $('.setting5').hide();
            }
            if (this.id == 'b5') {
                $('.setting1').hide();
                $('.setting2').hide();
                $('.setting3').hide();
                $('.setting4').hide();
                $('.setting5').show();
            }
        })

    </script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> !-->

    </body>

</html>
