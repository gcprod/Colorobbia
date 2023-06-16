<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #654aff;
  color: white;
}
</style>
</head>
        <h1 style="text-align: center;">Data Warga</h1>

        <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama Kepala Keluarga</th>
            <th>Nomor Rumah</th>
            <th>RT</th>
            <th>RW</th>
            <th>Status</th>
        </tr>
        <tr>
            @foreach ($data as $item )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $item['namakk'] }}</td>
                <td>{{ $item['norumah'] }}</td>
                <td>{{ $item['rt'] }}</td>
                <td>{{ $item['rw'] }}</td>
                <td>{{ $item['status'] }}</td>
                
                    {{-- <a href={{ url('update', $item->id) }} class="btn btn-info">Edit</a>
                    <a href={{ url('delete', $item->id) }} class="btn btn-danger">Delete</a> --}}
            </tr>
            @endforeach
       