<link rel="stylesheet" href="{{ asset('css/pedagang_home/sidebar.css')}}">


<nav class="main-menu">
    <ul>
      <li class="mt-5">
        <a href="http://justinfarrow.com">
          <i class="fa fa-percentage fa-2x"></i>
          <span class="nav-text">
            Promo
          </span>
        </a>

      </li>
      <li class="has-subnav mt-5 hainame">
        <img class="rounded-circle" src="{{asset('image/avatar')}}/{{ Auth::user()->avatar}}" width="45px" alt="">
        <p class="ulti"> Hai ,</p>
        <p>{{ Auth::user()->name }}</p>
        <img src="{{ asset('image/pedagang/reguler.svg')}}" class="upgrade" alt="">

      </li>

      </li>

      <li class="mt-5">
        <a href="{{url('pedagang')}}">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            Home
          </span>
        </a>
      </li>
      <li>
        <a href="{{url('produk-pedagang')}}">
          <i class="fa fa-2x"><img src="{{ asset('image/home/officialtore.svg')}}" alt=""></i>
          <span class="nav-text">
            Produk
          </span>
        </a>
      </li>
      <li>
        <a href="{{url('pesanan')}}">
          <i class="fa fa-clipboard-list fa-2x"></i>
          <span class="nav-text">
            Pesanan
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-chart-line fa-2x"></i>

          <span class="nav-text">
            Statistik
          </span>
        </a>
      </li>
      <li>
        <a href="{{url('pengaturan')}}">
          <i class="fa fa-cog fa-2x"></i>

          <span class="nav-text">
            Pengaturan Akun
          </span>
        </a>
      </li>
    </ul>
  </nav>