@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center text align center">
        <div class="card">
            <div class="card-header">DATA WARGA KAMPUNG DURIAN RUNTUH</div>
            <div class="table-responsive">
            <table class="table table-stiped">
            
        <tr>
            <th>No</th>
            <th>Nama Kepala Keluarga</th>
            <th>Nomor Rumah</th>
            <th>RT</th>
            <th>RW</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach ($data as $item )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $item['namakk'] }}</td>
                <td>{{ $item['norumah'] }}</td>
                <td>{{ $item['rt'] }}</td>
                <td>{{ $item['rw'] }}</td>
                <td>{{ $item['status'] }}</td>
                <td>
                    <a href={{ url('qrupdate', $item->id) }} class="btn btn-info">Edit</a>
                    <a href={{ url('qrdelete', $item->id) }} class="btn btn-danger">Delete</a>
                </td>



            </tr>
            
        @endforeach
    </table>
        </div>
        </div>  
        <div style="text-align: center; margin-bottom: 20px; margin-top: 20px">
            <a href={{ url('qrinput') }} class="btn btn-info">Input Data</a>
        </div>  
    </div>
</div>
@endsection
