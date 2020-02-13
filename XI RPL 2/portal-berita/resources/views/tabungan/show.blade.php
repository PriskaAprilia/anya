@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabungan</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}

                    <div class="col-md-4">
                        <label for="">Pilih Nama Siswa</label>
                        </div>
                        <div class="co1-md-8">
                            <select name="siswa_id" reandonly class="form-control">
                            <option value="{{$data->siswa->nama}}" readonly name="nama" required>
                            </select>
                        </div>
                    <div class="table-responsive">
                        <div class="co1-md-4">
                            <label for=""></label>
                        </div>
                   <div class="col-md-4">
                        <label for="">Jumlah Uang</label>
                   </div>
                        <div class="co1-md-8">
                      <input class="form-control" value ="{{$data->jumlah_uang}}" readonly name="jumlah_uang" required>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
