@extends('layouts/master')

@section('layoutContent')
<div class="row">
    <a name="" class="btn btn-primary" href="{{route('mahasiswa.create')}}" role="button">+ Tabel Mahasiswa</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id mahasiswaa</th>
                <th scope="col">Nama mahasiswa</th>
                <th scope="col">kelas</th>
                <th scope="col">jurusan</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $b)
            <tr>
                <th scope="row">{{$b->id_mhs}}</th>
                <td>{{$b->nama_mhs}}</td>
                <td>{{$b->kelas}}</td>
                <td>{{$b->jurusan}}</td>
                <td>
                    <a name="" class="btn btn-warning btn-line btn-rect" href="{{route('mahasiswa.edit', $b->id_mhs)}}"
                        role="button">
                        <i class="ti-pencil-alt"></i> EDIT</a>
                    <a class="btn btn-danger btn-line btn-rect" href="{{ route('mahasiswa.index') }}" onclick="event.preventDefault();
                    document.getElementById('delete-form-{{$b->id_mhs}}').submit();"> <i class="ti-trash"></i> DELETE</a>
                </td>
                <form id="delete-form-{{$b->id_mhs}}" + action="{{route('mahasiswa.destroy', $b->id_mhs)}}" method="post">
                    @csrf @method('DELETE')
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection