@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Makanan</h4>
    <div class ="ms-auto">
        <a class = "btn btn-success" href="{{route('makanan.tambah')}}">Tambah Makanan</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis</th>
    </tr>
    @foreach($makanan as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->jenis }}</td>
        <td>
            <a href="{{route('makanan.edit', $data->id)}}" class = "btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('makanan.delete', $data->id)}}" method = "POST">
                @csrf
                <button class = "btn btn-sm btn-danger">hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection