@extends ('layouts.main')

@section('container')
    <h1>Halaman Inventory</h1>

    @foreach ($inventory as $item)
        <h5>
            <a href="/inventory/{{ $item["link"]}}">{{ $item["judul"]}}</a>
        </h5>
        <p>{{$item["deskripsi"]}}</p>
    @endforeach

@endsection