         @if(Auth::user()->level == '1')
               @include('pedagang.pencarian_dagang')
               @elseif(Auth::user()->level == '2')
               @include('pembeli.pencarian_beli')
               @endif
