@extends ('layouts.main')

@section('container')
    <h2>
        {{ $post["judul"]}}
    </h2>
    <p>
        {{ $post["deskripsi"]}}
    </p>

    <a href="/inventory"> Back To Inventory</a>
@endsection