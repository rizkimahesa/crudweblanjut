@extends ('layout')

@section('konten')

<h4>Tambah Makanan</h4>

<form action="{{route ('makanan.kirim')}}" method="POST">
    @csrf
    <label>No</label>
    <input type="number" name="no" class="form-control mb-2">

    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">

    <label>Jenis</label>
    <input type="text" name="jenis" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection