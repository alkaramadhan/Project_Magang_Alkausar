<script src="{{ asset('js/app.js') }}"></script>



<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/home/navbar.css')}}">


<nav class="navbar-light navbar-expand-lg nv bg-light">
    <a class="navbar-brand whtul" href="{{ url('/') }}">
        <img src="{{ asset('image/logowh.svg')}}" class="logonav d-inline-block mt-2 ml-3 mr-2 mb-2" alt="">
        Warehousenesia <p> Merchant</p>
    </a>
    <form action="/cari" method="POST" role="search">
    {{ csrf_field() }}
    <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" maxlength="25 " name="q" placeholder="Cari Produk Atau Toko">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    </form>
    <div class="garis"></div>
    <div class="drpd">
        <div id="some-button" class="ssa bg-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="image/avatar/{{ Auth::user()->avatar}}" class="rounded-circle prof" width="50px">
            <p class="nama">{{ Auth::user()->name }}</p>
            <i class="fas fa-sort-down"></i>
        </div>
        <div class="dropdown-menu m">
        @if(Auth::user()->status == "2")
        <a class="dropdown-item" title="Upgrade Your Limit Storage" href="#">Limit Storage <p>{{ Auth::user()->user->count() }}/5</p></a>
        @else
        <a class="dropdown-item" title="Upgrade Your Limit Storage" href="#">Limit Storage <p>{{ Auth::user()->user->count() }}/3</p></a>
        @endif
            
            <a class="dropdown-item" title="Upgrade Your Store" href="#">Regular Store <img
                    src="image/pedagang/reguler.svg" alt=""></a>
            <a class="dropdown-item" title="Upgrade Your Store" href="#">Kembali Ke Toko</a>

            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"></i> Keluar</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>
