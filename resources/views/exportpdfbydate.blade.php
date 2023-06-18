@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="flex justify-center text align center">
        <div class="card">
            <div class="card-header text-center">PILIH DATA BERDASARKAN TANGGAL</div>
            <form action="{{ route('exportPDFbydate') }}" method="GET">
                
                <table class="table table-striped">
                    <tr class="text-center">
                    <td colspan="3">
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>
                        </td>
                        <td colspan="3">
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" required>
                        </td>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary">Export to PDF</button>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Nomor Rumah</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['namakk'] }}</td>
                        <td>{{ $item['norumah'] }}</td>
                        <td>{{ $item['rt'] }}</td>
                        <td>{{ $item['rw'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                        
                    </tr>
                    @endforeach
                </table>
                
                
            </form>
        </div>
      
    </div>
</div>
@endsection
