@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="card">
            <div class="card-header">MASUKKAN DATA WARGA</div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('citizen.data') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                      <div class="form-group col-sm">
                        <label for="nama">Nama Kepala Keluarga</label>
                        <input type="name" name='namakk'class="form-control" id="namakk">
                      </div>

                      <div class="form-row">
                        <div class="form-group col-sm">
                          <label for="nama">Nomor Rumah</label>
                          <input type="number" name='norumah' class="form-control" id="norumah">
                        </div>
                        
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

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Memilah Sampah" checked>
                            <label class="form-check-label" for="status">
                              Memilah Sampah
                            </label>
                        </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Memilah Sampah">
                            <label class="form-check-label" for="status">
                              Tidak Memilah Sampah
                            </label>
                            </div>

                            <div class="form-group row">
                                <label class="flex justify-center"></label>
                                <div class="flex justify-center">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                </div>
                            </div>

        </div>
        
    </div>
</div>
@endsection
