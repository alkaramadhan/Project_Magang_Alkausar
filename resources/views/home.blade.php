

               

                
               @if(Auth::user()->level == '1')
               @include('pedagang.home_pedagang')
               @elseif(Auth::user()->level == '2')
               @include('pembeli.home_pembeli')
               @endif

    

