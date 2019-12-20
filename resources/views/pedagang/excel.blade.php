<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gambar</th>
           
        </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($excel as $user)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->nama_produk }}</td>
            <td>{{ $user->gambar1}}</td>
            
            
        </tr>
    @endforeach
    </tbody>
</table>