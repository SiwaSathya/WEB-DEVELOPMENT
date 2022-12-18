<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto" style="display: flex; align-items: center; justify-content: center; min-height: 50vh;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Lokasi Tujuan</th>
                    <th scope="col">Tanggal Keberangkatan</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Tujuan</th>
                </tr>
            </thead>
            @foreach ($pengajuan as $p)
            <tbody>
                <tr>
                    <td>{{$p -> nama}}</td>
                    <td>{{$p -> lokasi_tujuan}}</td>
                    <td>{{$p -> tanggal_keberangkatan}}</td>
                    <td>{{$p -> tanggal_kembali}}</td>
                    <td>{{$p -> tujuan}}</td>
                    {{-- <td>
                        <a href="pengajuanedit{{$p -> id}}"><button type="button" class="btn btn-primary">EDIT</button></a>
                        <a href="pengajuanhapus/{{$p -> id}}"><button type="button" class="btn btn-danger">HAPUS</button></a>
                        <a href="laporantambah{{$p -> id}}"><button type="button" class="btn btn-info">TAMBAH LAPORAN</button></a>
                    </td> --}}
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
