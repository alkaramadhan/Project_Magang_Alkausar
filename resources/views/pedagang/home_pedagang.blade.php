
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

  <script src="{{ asset('js/app.js') }}" ></script>

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
  <link rel="stylesheet" href="{{asset('css/pedagang_home/sidebar.css')}}">
  <link rel="stylesheet" href="{{asset('css/pedagang_home/navbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/pedagang_home/content1.css')}}">
  <link rel="stylesheet" href="{{asset('css/pedagang_home/content2.css')}}">
  <link rel="stylesheet" href="{{asset('css/pedagang_home/content3.scss')}}">
  <link rel="stylesheet" href="{{asset('css/pedagang_home/content3.css')}}">
  <link href="css/mdb.min.css" rel="stylesheet">
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


  <!-- Navbar -->
 
  
  <!-- End Of Navbar -->
 
  <!-- Sidebar -->
    @include('pedagang.sidebar_dagang')
  <!-- End of Sidebar -->
  
  @include('layouts.dagang')
  <!-- Content 1 -->
  
  <div class="kotak1">
    <p class="curen">Currency</p>
    <p class="price">$ 1 = Rp. 14.013</p>
  </div>
  <div class="kotak2">
    <h1>Iklan / Promo</h1>
    <p>Warehousenesia</p>
  </div>
  <div class="kotak3">
    <p class="news">News</p>
    <marquee class="kalimatnews">HEHEHEHEEHEHEH</marquee>
  </div>


  <h1 class="hainamatoko">Hai , Starbucks</h1>
  <!-- End of Content 1 -->

  <!-- Content 2 -->
  <div class="thisweek">
    <p class="q">Statistik Minggu ini</p>
    <p class="w">Performa</p>
    <p class="e">72%</p>
    <img src="image/pedagang/reguler.svg" class="r" alt="">
    <p class="t">(1.417 Poin)</p>
    <a href="#">Indikator Performa</a>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0"
        aria-valuemax="100"></div>
    </div>
    <div class="weekfoll">
      <i class="fas fa-users"></i>
      154
      <p>Pengikut</p>
    </div>
    <div class="weekrat">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      4.5
      <p>(132 Ulasan)</p>
    </div>
    <div class="weekvisit">
      <i class="fas fa-eye"></i>
      538
      <p>Jumlah Pengunjung</p>
    </div>
    <div class="weekreport">
      <i class="fas fa-clipboard-list"></i>
      362
      <p>Laporan Penjualan</p>
    </div>
    <div class="weeksell">
      <i class="fas fa-shipping-fast"></i>
      362
      <p>Produk Terjual</p>
    </div>
    <div class="weekincome">
      <i class="fas fa-money-bill-alt"></i>
      Rp. 2.213.812
      <p>Pendapatan</p>
    </div>
  </div>

  <div class="total">
    <p class="z">Total Statistik</p>
    <p class="x">Performa</p>
    <p class="c">97%</p>
    <img src="image/pedagang/reguler.svg" class="v" alt="">
    <p class="b">(71.417 Poin)</p>
    <a href="#">Indikator Performa</a>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 97%" aria-valuenow="92" aria-valuemin="0"
        aria-valuemax="100"></div>
    </div>
    <div class="totalfoll">
      <i class="fas fa-users"></i>
      5.7 Jt
      <p>Pengikut</p>
    </div>
    <div class="totalrat">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      5
      <p>(41.232 Ulasan)</p>
    </div>
    <div class="totalvisit">
      <i class="fas fa-eye"></i>
      22 Jt
      <p>Jumlah Pengunjung</p>
    </div>
    <div class="totalreport">
      <i class="fas fa-clipboard-list"></i>
      8.819
      <p>Laporan Penjualan</p>
    </div>
    <div class="totalsell">
      <i class="fas fa-shipping-fast"></i>
      81.302
      <p>Produk Terjual</p>
    </div>
    <div class="totalincome">
      <i class="fas fa-money-bill-alt"></i>
      Rp. 3.691.927.388
      <p>Pendapatan</p>
    </div>
  </div>
  <!-- End of Content 2 -->

  <!-- Content 3 -->
  <!--Accordion wrapper-->
  <div class="content3 accordion md-accordion accordion-blocks" id="accordionEx78" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="headingUnfiled">

        <!--Options-->
        <div class="dropdown float-left">
          <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fas fa-pencil-alt"></i>
          </button>
          <div class="dropdown-menu dropdown-info">
            <a class="dropdown-item" href="#">Add new condition</a>
            <a class="dropdown-item" href="#">Rename folder</a>
            <a class="dropdown-item" href="#">Delete folder</a>
          </div>
        </div>

        <!-- Heading -->
        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapseUnfiled" aria-expanded="true"
          aria-controls="collapseUnfiled">
          <h5 class="mt-1 mb-0">
            <span>Unfiled items</span>
            <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>

      </div>

      <!-- Card body -->
      <div id="collapseUnfiled" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled"
        data-parent="#accordionEx78">
        <div class="card-body">

          <!--Top Table UI-->
          <div class="table-ui p-2 mb-3 mx-3 mb-4">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-12">

                <!--Name-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Bulk actions</option>
                  <option value="1">Delete</option>
                  <option value="2">Change folder</option>
                </select>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <label id="img_category_label"class="field"for="img_category"data-value="">
                  <span>Category</span>
                  <div id="img_category"class="psuedo_select"name="img_category">
                    <span class="selected"></span>
                    <ul id="img_category_options"class="options">
                      <li class="option"data-value="commercial">Commercial</li>
                      <li class="option"data-value="residential">Residential</li>
                    </ul>
                  </div>
                </label>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Filter</option>
                  <option value="1">All <span> (100)</span></option>
                  <option value="1">Active <span> (2000)</span></option>
                  <option value="2">Inactive <span> (1000)</span></option>
                </select>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
          <!--Top Table UI-->

          <!-- Table responsive wrapper -->
          <div class="table-responsive mx-3">
            <!--Table-->
            <table class="table table-hover mb-0">

              <!--Table head-->
              <thead>
                <tr>
                  <th>
                    <input class="form-check-input" type="checkbox" id="checkbox">
                    <label for="checkbox" class="mr-2 label-table"></label>
                  </th>
                  <th class="th-lg"><a>Name <i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Condition<i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Last edited<i class="fas fa-sort ml-1"></i></a></th>
                  <th></th>
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox1">
                    <label for="checkbox1" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox2">
                    <label for="checkbox2" class="label-table"></label>
                  </th>
                  <td>Product Hunt Visitor</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>13.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox3">
                    <label for="checkbox3" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
          </div>
          <!-- Table responsive wrapper -->

        </div>
      </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="heading79">

        <!--Options-->
        <div class="dropdown float-left">
          <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fas fa-pencil-alt"></i>
          </button>
          <div class="dropdown-menu dropdown-info">
            <a class="dropdown-item" href="#">Add new condition</a>
            <a class="dropdown-item" href="#">Rename folder</a>
            <a class="dropdown-item" href="#">Delete folder</a>
          </div>
        </div>

        <!-- Heading -->
        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse79" aria-expanded="true"
          aria-controls="collapse79">
          <h5 class="mt-1 mb-0">
            <span>Folder 1</span>
            <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>

      </div>

      <!-- Card body -->
      <div id="collapse79" class="collapse show" role="tabpanel" aria-labelledby="heading79"
        data-parent="#accordionEx78">
        <div class="card-body">

          <!--Top Table UI-->
          <div class="table-ui p-2 mb-3 mx-3 mb-4">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-12">

                <!--Name-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Bulk actions</option>
                  <option value="1">Delete</option>
                  <option value="2">Change folder</option>
                </select>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled>Show only</option>
                  <option value="1" selected>All <span> (2000)</span></option>
                  <option value="2">Clicks <span> (200)</span></option>
                  <option value="3">Page <span> (1800)</span></option>
                  <option value="4">Scroll <span> (200)</span></option>
                  <option value="5">Forms <span> (50)</span></option>
                  <option value="6">Time <span> (50)</span></option>
                  <option value="7">UTM <span> (50)</span></option>
                </select>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Filter</option>
                  <option value="1">All <span> (100)</span></option>
                  <option value="1">Active <span> (2000)</span></option>
                  <option value="2">Inactive <span> (1000)</span></option>
                </select>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
          <!--Top Table UI-->

          <!-- Table responsive wrapper -->
          <div class="table-responsive mx-3">
            <!--Table-->
            <table class="table table-hover mb-0">

              <!--Table head-->
              <thead>
                <tr>
                  <th>
                    <input class="form-check-input" type="checkbox" id="checkbox4">
                    <label for="checkbox4" class="mr-2 label-table"></label>
                  </th>
                  <th class="th-lg"><a>Name <i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Condition<i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Last edited<i class="fas fa-sort ml-1"></i></a></th>
                  <th></th>
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox5">
                    <label for="checkbox5" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox6">
                    <label for="checkbox6" class="label-table"></label>
                  </th>
                  <td>Product Hunt Visitor</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>13.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox14">
                    <label for="checkbox14" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
          </div>
          <!-- Table responsive wrapper -->

        </div>
      </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="heading80">
        <!--Options-->
        <div class="dropdown float-left">
          <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fas fa-pencil-alt"></i>
          </button>
          <div class="dropdown-menu dropdown-info">
            <a class="dropdown-item" href="#">Add new condition</a>
            <a class="dropdown-item" href="#">Rename folder</a>
            <a class="dropdown-item" href="#">Delete folder</a>
          </div>
        </div>

        <!-- Heading -->
        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse80" aria-expanded="true"
          aria-controls="collapse80">
          <h5 class="mt-1 mb-0">
            <span>Folder 2</span>
            <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapse80" class="collapse" role="tabpanel" aria-labelledby="heading80" data-parent="#accordionEx78">
        <div class="card-body">

          <!--Top Table UI-->
          <div class="table-ui p-2 mb-3 mx-3 mb-4">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-12">

                <!--Name-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Bulk actions</option>
                  <option value="1">Delete</option>
                  <option value="2">Change folder</option>
                </select>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled>Show only</option>
                  <option value="1" selected>All <span> (2000)</span></option>
                  <option value="2">Clicks <span> (200)</span></option>
                  <option value="3">Page <span> (1800)</span></option>
                  <option value="4">Scroll <span> (200)</span></option>
                  <option value="5">Forms <span> (50)</span></option>
                  <option value="6">Time <span> (50)</span></option>
                  <option value="7">UTM <span> (50)</span></option>
                </select>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Filter</option>
                  <option value="1">All <span> (100)</span></option>
                  <option value="1">Active <span> (2000)</span></option>
                  <option value="2">Inactive <span> (1000)</span></option>
                </select>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
          <!--Top Table UI-->

          <!-- Table responsive wrapper -->
          <div class="table-responsive mx-3">
            <!--Table-->
            <table class="table table-hover mb-0">

              <!--Table head-->
              <thead>
                <tr>
                  <th>
                    <input class="form-check-input" type="checkbox" id="checkbox7">
                    <label for="checkbox7" class="mr-2 label-table"></label>
                  </th>
                  <th class="th-lg"><a>Name <i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Condition<i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Last edited<i class="fas fa-sort ml-1"></i></a></th>
                  <th></th>
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox8">
                    <label for="checkbox8" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox9">
                    <label for="checkbox9" class="label-table"></label>
                  </th>
                  <td>Product Hunt Visitor</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>13.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox10">
                    <label for="checkbox10" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
          </div>
          <!-- Table responsive wrapper -->

        </div>
      </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="heading">
        <!--Options-->
        <div class="dropdown float-left">
          <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fas fa-pencil-alt"></i>
          </button>
          <div class="dropdown-menu dropdown-info">
            <a class="dropdown-item" href="#">Add new condition</a>
            <a class="dropdown-item" href="#">Rename folder</a>
            <a class="dropdown-item" href="#">Delete folder</a>
          </div>
        </div>

        <!-- Heading -->
        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse81" aria-expanded="true"
          aria-controls="collapse81">
          <h5 class="mt-1 mb-0">
            <span>Folder 3</span>
            <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapse81" class="collapse" role="tabpanel" aria-labelledby="heading" data-parent="#accordionEx78">
        <div class="card-body">

          <!--Top Table UI-->
          <div class="table-ui p-2 mb-3 mx-3 mb-4">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-12">

                <!--Name-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Bulk actions</option>
                  <option value="1">Delete</option>
                  <option value="2">Change folder</option>
                </select>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled>Show only</option>
                  <option value="1" selected>All <span> (2000)</span></option>
                  <option value="2">Clicks <span> (200)</span></option>
                  <option value="3">Page <span> (1800)</span></option>
                  <option value="4">Scroll <span> (200)</span></option>
                  <option value="5">Forms <span> (50)</span></option>
                  <option value="6">Time <span> (50)</span></option>
                  <option value="7">UTM <span> (50)</span></option>
                </select>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-xl-4 col-lg-6 col-md-6">

                <!--Blue select-->
                <select class="mdb-select colorful-select dropdown-info mx-2">
                  <option value="" disabled selected>Filter</option>
                  <option value="1">All <span> (100)</span></option>
                  <option value="1">Active <span> (2000)</span></option>
                  <option value="2">Inactive <span> (1000)</span></option>
                </select>
                <!--/Blue select-->

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
          <!--Top Table UI-->

          <!-- Table responsive wrapper -->
          <div class="table-responsive mx-3">
            <!--Table-->
            <table class="table table-hover mb-0">

              <!--Table head-->
              <thead>
                <tr>
                  <th>
                    <input class="form-check-input" type="checkbox" id="checkbox15">
                    <label for="checkbox15" class="mr-2 label-table"></label>
                  </th>
                  <th class="th-lg"><a>Name <i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Condition<i class="fas fa-sort ml-1"></i></a></th>
                  <th class="th-lg"><a>Last edited<i class="fas fa-sort ml-1"></i></a></th>
                  <th></th>
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox11">
                    <label for="checkbox11" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox12">
                    <label for="checkbox12" class="label-table"></label>
                  </th>
                  <td>Product Hunt Visitor</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>13.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox13">
                    <label for="checkbox13" class="label-table"></label>
                  </th>
                  <td>Test subscription</td>
                  <td>Scroll % is equal or greater than <strong>80</strong></td>
                  <td>12.06.2017</td>
                  <td>
                    <a><i class="fas fa-info mx-1" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top"></i></a>
                    <a><i class="fas fa-pen-square mx-1"></i></a>
                    <a><i class="fas fa-times mx-1"></i></a>
                  </td>
                </tr>
              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
          </div>
          <!-- Table responsive wrapper -->

        </div>
      </div>
    </div>
    <!-- Accordion card -->
  </div>
  
  <!--/.Accordion wrapper-->

  <!-- End of Content 3 -->


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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
  <script src="js/home/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
  <script src="js/home/messege.js"></script>

  

