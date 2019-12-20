div class="container">
    @if(isset($search))
    <h1>Pedagang</h1>
    <br>
        <p> The Search results for your query <b> {{ $query }} </b> are: {{$search->count()}}</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($search as $hasil)
            <tr>
                <td>{{$hasil->nama_produk}}</td>
                <td>{{$hasil->jumlah}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>