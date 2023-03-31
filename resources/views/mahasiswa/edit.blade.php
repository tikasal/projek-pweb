@extends('layouts/master')

@section('layoutContent')
<div class="row">
    <form style="width:512px" action="{{route('mahasiswa.update', $mahasiswa->id_mhs)}}" method="post">
    <a href="{{route('mahasiswa.index')}}" class="btn btn-inverse btn-round"> <i class="ti-close"></i> CANCEL</a>
        @csrf
@method('PUT')
        <div class="form-group">
            <label>ID MAHASISWA</label>
            <input type="number" name="id_mhs" class="form-control" value="{{$mahasiswa->id_mhs}}" placeholder="id mhs" />
        </div>
        
        <div class="form-group">
            <label>NAMA MAHASISWA</label>
            <textarea type="text" name="nama_mhs" class="form-control" placeholder="nama mhs">{{$mahasiswa->nama_mhs}}</textarea>
        </div>
        <div class="form-group">
            <label>KELAS</label>
            <textarea type="text" name="kelas" class="form-control" placeholder="kelas">{{$mahasiswa->kelas}}</textarea>
        </div>
        <div class="form-group">
            <label>JURUSAN</label>
            <input type="text" name="jurusan" class="form-control" value="{{$mahasiswa->jurusan}}" placeholder="jurusan" /></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-round"><i class="ti-plus"></i> UBAH</button>
    </form>
</div>
@endsection