@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="flex justify-center text align center">
        <div class="card">
            <div class="card-header text-center">PILIH DATA BERDASARKAN RT DAN RW</div>
            <form action="{{ route('exportPDFbyrtrw') }}" method="GET">
                
                <table class="table table-striped">
                    <tr class="text-center">
                        <div class="form-row">
                            <div class="form-group col-sm">
                              <label for="nama">RT</label>
                            <input type="number" name='rt' class="form-control" id="rt">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm">
                              <label for="nama">RW</label>
                        <input type="number" name='rw' class="form-control" id="rw">
                        </div>
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
