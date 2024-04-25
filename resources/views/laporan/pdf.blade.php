<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>
    <style>
    h2 {
        font-weight: bold;
        margin: 0px 0px;
        text-align: center;
    }
    h4 {
        margin-top: 5px;
        text-align: center;
        color: #333;
    }
    table {
        margin: 0% auto;
    }

    /* Default Table Style */
    table {
    color: #333;
    background: white;
    border: 1px solid grey;
    font-size: 11pt;
    border-collapse: collapse;
    }
    table thead th,
    table tfoot th {
    color: #333;
    background: rgba(0,0,0,.1);
    }
    table caption {
    padding:.5em;
    }
    table th,
    table td {
    padding: .5em;
    border: 1px solid lightgrey;
    }
    /* Zebra Table Style */
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
</head>
<body>
    <h2 class="text-center">Laporan Pendapatan</h2>
    <h4 class="text-center">
        {{ tanggal_indonesia($awal, false) }}
        s/d
        {{ tanggal_indonesia($akhir, false) }}
    </h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Tanggal</th>
                <th>Penjualan</th>
                <th>Pembelian</th>
                <th>Pengeluaran</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $col)
                        <td>{{ $col }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>