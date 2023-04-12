@extends('layout.master')
@section('content')
    <div class="container">
        <h4>Data Peminjam</h4>

        @include('_partial/flash_message')
        <p align="left"><a href="{{ route('data_peminjam.data_peminjam_pdf') }}" class="btn btn-primary">Download Data Peminjam</a></p>
        <p align="left"><a href="{{ route('data_peminjam.export_excel') }}" class="btn btn-primary">Export Data Peminjam</a></p>
        
        <form action="{{ route('data_peminjam.search') }}" method="get">@csrf
            <input type="text" name="kata" placehorder="Cari...">
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Peminjam</th>
                    <th>Nama Peminjam</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Nomor Telepon</th>
                    <th>Foto</th>
                    <th>Edit</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_peminjam as $peminjam)
                <tr>
                    <td>{{ $peminjam->id}}</td>
                    <td>{{ $peminjam->kode_peminjam}}</td>
                    <td>{{ $peminjam->nama_peminjam}}</td>
                    <td>{{ $peminjam->jenis_kelamin['nama_jenis_kelamin']}}</td>
                    <td>{{ $peminjam->tanggal_lahir}}</td>
                    <td>{{ $peminjam->alamat}}</td>
                    <td>{{ $peminjam->pekerjaan}}</td>
                    <td>{{ !empty($peminjam->telepon['nomor_telepon'])?
                            $peminjam->telepon['nomor_telepon'] : '-'
                        }}
                    </td>
                    <td>
                        @if(empty($peminjam->foto))
                        <img src="{{ asset('foto_peminjam/foto_peminjam_kosong.png') }}" alt="" style="width:50px;height:60px;">
                        @else
                        <img src="{{ asset('foto_peminjam/'.$peminjam->foto) }}" alt="" style="width:50px;height:60px;">
                        @endif
                    </td>
                    <td><a href="{{ route('data_peminjam.edit', $peminjam->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('data_peminjam.destroy', $peminjam->id) }}" method="POST">
                            @csrf
                                <button class="btn btn-warning btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pull-left">
            <strong>
                Jumlah Peminjam : {{ $jumlah_peminjam }}
            </strong>
            <p>{{ $data_peminjam->links() }}</p>

        </div>
    </div>
@endsection