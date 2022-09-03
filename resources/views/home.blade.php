@extends('template.layout')
@section('content')

<div>
    <form enctype="multipart/form-data" action="/store" method="post">
        @csrf
        <input class="border" type="text" name="kategori">
        <input type="file" name="image">
        <input type="submit" name="btn" value="simpan">
    </form>
</div>

<h1>home</h1>

@foreach ($kategoris as $isi)
    <li> {{ $isi-> kategori }} -- <a href="/store/{{ $isi-> idkategori }}">Hapus</a> </li>
@endforeach
@endsection