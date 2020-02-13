@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">daftarsiswa</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}

                    <div class="table-responsive">
                        <div class="co1-md-4">
                            <label for="">Masukan Nama Siswa</label>
                        </div>
                    <div class="table-responsive">
                        <div class="co1-md-8">
                            <input type="text" value="{{$siswa->nama}}" readonly name="nama" required>
                        </div>
                    <div class="table-responsive">
                        <div class="co1-md-4">
                            <label for="">Masukan Kelas</label>
                        </div>
                   <div class="table-responsive">
                        <div class="co1-md-8">
                            <input type="text" value ="{{$siswa->kelas}}" readonly name="kelas" required>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
