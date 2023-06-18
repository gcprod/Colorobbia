<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Export PDF by RT RW</title>
    <style>
        /* CSS untuk styling tabel */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            border: 1px solid #000;
        }

        table th {
            background-color: #f2f2f2;
        }

        /* CSS untuk styling diagram pie */
        .chart-container {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Data Warga RT {{ $rt }} RW {{ $rw }}</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kepala Keluarga</th>
                <th>Nomor Rumah</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['namakk'] }}</td>
                    <td>{{ $item['norumah'] }}</td>
                    <td>{{ $item['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
        
</body>
</html>
