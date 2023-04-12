<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-widht, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Laporan Data Peminjam</title>

    </head>
    <body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Data Peminjam</h5>
    </center>
    <div class="container">
        <div class="row">
            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Peminjam</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Nomor Telepon</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($data_peminjam as $peminjam)
                    <tr>
                        <th scope="row">{{ ++$no }}</th>
                        <td>{{ $peminjam->kode_peminjam }}</td>
                        <td>{{ $peminjam->nama_peminjam }}</td>
                        <td>{{ $peminjam->jenis_kelamin['name_jenis_kelamin'] }}</td>
                        <td>{{ $peminjam->tanggal_lahir }}</td>
                        <td>{{ $peminjam->alamat }}</td>
                        <td>{{ $peminjam->pekerjaan }}</td>
                        <td>{{ !empty($peminjam->telepon['nomor_telepon'])?
                                $peminjam->telepon['nomor_telepon'] : '-' 
                            }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>