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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/sidebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/content1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/produk_pedagang/content2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dtbl.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css')}}">
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
    @include('layouts.dagang')

    <!-- Sidebar -->
    @include('pedagang.sidebar_dagang')
    <!-- End of Sidebar -->

    
    <!-- Content 1 -->
    <h1 class="katalog">Katalog Produk</h1>
    <div class="asdw">
        <div class="inform">
            <p>i</p>
        </div>
        <div class="info">
            <p>Selalu Update Stok Produkmu</p>
        </div>
    </div>
    @if(Auth::user()->user->count() == Auth::user()->limit)
        <p class="button">PENUH GAN!!!!</p>
    @else
    <a href="tambah-barang" class="button">Tambah Produk</a>
    @endif    

    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($hapus = Session::get('hapus'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $hapus }}</strong>
      </div>
    @endif

    <!-- End of Content 1 -->

    <!-- Content 2 -->
    <br>
    <!-- End of Content 2 -->
    <a href="/produk/export_excel" class="btn btn-success my-3" style="margin-left: 300px;">Excel</a>
    <div class="wraptab">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
         
            <thead>
                <tr>
                    <th class="th-sm">Gambar</th>
                    <th class="th-sm">Nama Barang</th>
                    <th class="th-sm">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk as $post)
                <tr>
                    <td><img src="{{ asset('image/produk/'.$post->gambar1) }}" width="30%"></td>
                    <td>{{ $post->nama_produk }}</td>
                    <td>
                        <a href="
            {{ route('edit', $post->id) }}"><button class="btnedt"><i class="far fa-edit"></i> Edit</button></a>
                        <a href="
			{{ route('delete', $post->id) }}"><button class="btndel"><i class="far fa-trash-alt"></i> Hapus</button></a>

                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>










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
    <script type="text/javascript" src="{{ asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/datatables/datatables.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.datatable').dataTable({
                "sPaginationType": "bs_four_button"
            });
            $('.datatable').each(function () {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find(
                    'div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.addClass('form-control input-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find(
                    'div[id$=_length] select');
                length_sel.addClass('form-control input-sm');
            });
        });

    </script>

    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/home/jquery.carouFredSel-6.0.4-packed.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/home/messege.js')}}"></script>
    <script src="{{ asset('js/dtbl_bootstrap.js')}}"></script>
    <script src="{{ asset('js/dtbl_jquery.js')}}"></script>
    <script>
        // Material Design example
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });

    </script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </body>

</html>
