@extends('layout.master')
@section('content')
    <div class="container">
        <h4>Edit Data Peminjam</h4>
        <form method="POST" action="{{ route('data_peminjam.update', $peminjam->id) }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Kode Peminjam</label>
                <input type="text" name="kode_peminjam" readonly class="form-control" value="{{ $peminjam->kode_peminjam }}">
            </div>
            <div class="form-group">
                <label>Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" value="{{ $peminjam->nama_peminjam }}">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="id_jenis_kelamin">
                    <option value=>Pilih Jenis Kelamin</option>
                    @foreach ($list_jenis_kelamin as $key => $value)
                    <option value="{{ $key }}" {{$peminjam->id_jenis_kelamin == $key ? 'selected' : ''}}>
                        {{$value}}
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $peminjam->tanggal_lahir }}">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="" cols="148" rows="3">{{ $peminjam->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" value="{{ $peminjam->pekerjaan }}">
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="nomor_telepon" class="form-control" value="{{ $peminjam->nomor_telepon }}">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control" name="foto">
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection