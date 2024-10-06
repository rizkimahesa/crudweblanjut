@extends ('layout')

@section('konten')

<h4>Edit Makanan</h4>

<form action="{{route ('makanan.update', $makanan->id)}}" method="POST">
    @csrf
    <label>No</label>
    <input type="number" name="no" value="{{ $makanan->no }}" class="form-control mb-2">

    <label>Nama</label>
    <input type="text" name="nama" value="{{ $makanan->nama }}" class="form-control mb-2">

    <label>Jenis</label>
    <input type="text" name="jenis" value="{{ $makanan->jenis }}"class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection