@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="flex justify-center text align center">
        <div class="card">
            <div class="card-header text-center">PILIH DATA</div>
            <form>
                
                <table class="table table-striped">
                    <tr class="text-center">
                        <td colspan="2">
                            <a href="{{ url('exportbydate') }}" class="btn btn-info">Export Data By Date</a>
                            <a href="{{ url('exportbyrtrw') }}" class="btn btn-info">Export Data By RT & RW</a>

                        </td>

                </table>
                
                
            </form>
        </div>
      
    </div>
</div>
@endsection
