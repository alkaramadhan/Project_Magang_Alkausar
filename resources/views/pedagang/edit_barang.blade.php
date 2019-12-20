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

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/tambah_produk.css') }}">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/tags.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
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

<body>
    <!-- Navbar -->
    @include('layouts.dagang')
    <!-- End Of Navbar -->

    <!-- Sidebar -->
    @include('pedagang.sidebar_dagang')
    <!-- End of Sidebar -->

    <!-- Content 1 -->
    <h1 class="katalog">Tambah Produk</h1>
    <div class="asdw">
        <div class="inform">
            <p>i</p>
        </div>
        <div class="info">
        <p>Gambar Tolong harus disi semua <a href="">Jangan ada yang kosong</a></p>
        </div>
    </div>
    <!-- End of Content 1 -->
    <form action="{{ route('produk.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Box 1 -->
        <input type="hidden" name="id" value="{{ $produk->id }}">
        <div class="box1">
            <h1>Gambar Produk</h1>
            <p>Format gambar .jpg .jpeg .png dengan ukuran minimum 300x300px dan ukuran maximum 700x700px. (Max 4
                Gambar)
            </p>
            <div class="up1">
                <div class="uploadimg1">
                    <img class="img1" src="http://placehold.it/300" alt="your image" />
                </div>
                <div class="uploadbtn1">
                    <input type='file' name="gambar1" onchange="img1(this);" />
                </div>
            </div>
            <div class="up1">
                <div class="uploadimg1">
                    <img class="img2" src="http://placehold.it/300" alt="your image" />
                </div>
                <div class="uploadbtn1">
                    <input type='file' name="gambar2" onchange="img2(this);" />
                </div>
            </div>
            <div class="up1">
                <div class="uploadimg1">
                    <img class="img3" src="http://placehold.it/300" alt="your image" />
                </div>
                <div class="uploadbtn1">
                    <input type='file' name="gambar3" onchange="img3(this);" />
                </div>
            </div>
            <div class="up1">
                <div class="uploadimg1">
                    <img class="img4" src="http://placehold.it/300" alt="your image" />
                </div>
                <div class="uploadbtn1">
                    <input type='file' name="gambar4" onchange="img4(this);" />
                </div>
            </div>
        </div>
        <!-- End of Box 1 -->

        <!-- Box 2 -->
        <div class="box2">
            <h1>Informasi Produk</h1>
            <div class="nameproduk">
                <p class="nameprod">Nama Produk</p>
                <div class="inputname">
                    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" placeholder="Masukan Nama Produk" maxlength="180">
                </div>
            </div>
            <div class="kategoriproduk">
                <p class="kategoriprod">Kategori</p>
                <div class="inputkategori">
                    <select name="kategori">
                        @foreach($kate as $a)
                        <option value="{{$a->id}}">{{$a->tipe}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- End of Box 2 -->

        <!-- Box 3 -->
    <div class="box3">
        <h1>Deskripsi Produk</h1>
        <div class="kondisiproduk">
            <p class="kondisiprod">Kondisi Produk</p>
            <div class="inputkondisi">
                <input type="radio" name="kondisi" value="baru" class="yesrd">
                <p class="choose1">Baru</p>
                <input type="radio" name="kondisi" value="bekas">
                <p class="choose2">Bekas</p>
            </div>
        </div>
        <div class="keteranganproduk">
            <p class="keteranganprod">Kondisi Produk</p>
            <div class="inputketerangan">
                <textarea name="kondisi_produk" value="{{ $produk->kondisi_produk }}" id="" cols="80"
                    rows="4"></textarea>


            </div>
        </div>
    </div>

    <!-- End of Box 3 -->



        <!-- Box 4 -->
    <div class="box4">
        <h1>Penyediaan Produk</h1>
        <div class="penyediaanproduk">
            <p class="penyediaanprod">Kondisi Produk</p>
            <div class="inputpenyediaan">
                <input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck" class="yesrdbtn">
                <p class="choose3">Stok Terbatas</p>
            </div>
            <div id="ifYes" style="display:none">
                <p class="jmlh">Jumlah</p>
                <div class="inputjmlh">
                    <input type="number" name="jumlah" value="{{ $produk->jumlah }}" placeholder="Masukan Jumlah Produk"
                        min="1">
                </div>
            </div>
        </div>
    </div>
        <!-- End of Box 4 -->

        <!-- Box 5 -->
        <div class="box5">
            <h1>Varian Produk</h1>
            <div class="varianproduk">
                <p class="varianprod">Tambah varian produk seperti warna, ukuran, rasa atau variasi lainnya.</p>
                <div class="inputvarian">
                    <input type="text" name="varian" value="{{ $produk->varian }}" data-role="tagsinput" placeholder="Add Varian" />
                </div>
            </div>
        </div>

        <!-- End of Box 5 -->

        <!-- Box 6  -->
        <div class="box6">
            <h1>Harga Produk</h1>
            <div class="minimumproduk">
                <p class="minimumprod">Minimum Pembelian</p>
                <div class="minimumvarian">
                    <input type="number" name="minimum" value="{{ $produk->minimum }}" data-role="tagsinput" placeholder="1" min="1" />
                </div>
            </div>
            <div class="minimumproduk">
                <p class="minimumprod">Harga Satuan</p>
                <div class="minimumvarian er">
                    <input type="text" name="harga_satuan" value="{{ $produk->harga_satuan }}" placeholder="Rp 1,000,000.00" />
                </div>

            </div>
            <div class="minimumproduk">
                <p class="minimumprod">Harga Grosir</p>
                <div class="minimumvarian ey">
                    <input type="text" name="harga_grosir" value="{{ $produk->harga_grosir }}" data-role="tagsinput" placeholder="Harga Grosir" />
                </div>

            </div>
        </div>
        <!-- End of Box 6 -->

        <!-- Box 7 -->
        <div class="box7">
            <h1>Informasi Produk</h1>
            <div class="beratproduk">
                <p class="beratprod">Berat</p>
                <div class="inputberat">
                    <select name="berat" id="">
                        @foreach($brt as $b)
                        <option value="{{$b->id}}">{{$b->tipe}}</option>
                        @endforeach
                    </select>

                    <input type="number" name="jumlah_barat" value="{{ $produk->jumlah_barat }}"
                        placeholder="Masukan Total Berat" min="1">
                </div>
                <div class="asuransiproduk">
                    <p class="asuransiprod">Asuransi Pengiriman</p>
                    <div class="inputasuransi">
                        <input type="radio" name="asuransi" value="ya" class="yesrd">
                        <p class="cho">Ya</p>
                        <input type="radio" name="asuransi" value="tidak">
                        <p class="choo">Tidak</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Box 7 -->

        <!-- Button -->
        <div class="bttn">
            <button class="btn2">
                Simpan
            </button>
        </div>
    </form>
    <!-- End of Button -->

    <p class="footer">©2019 PT. WHNesia Internasional Niaga</p>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>


    <!-- Optional JavaScript -->
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/pedagang/showhide.js') }}"></script>
    <script src="{{ asset('js/pedagang/hargasatuan.js') }}"></script>
    <script src="{{ asset('js/home/jquery.carouFredSel-6.0.4-packed.js') }}"></script>
    <script src="{{ asset('js/home/messege.js') }}"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script>
        function img1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img1')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    };
    function img2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img2')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    };
    function img3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img3')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    };
    function img4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img4')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    };
        </script>

       

  

</body>

</html>
