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
                    <form action="{{ route('siswa.update',$siswa->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="table-responsive">
                        <div class="co1-md-4">
                            <label for="">Nama Siswa</label>
                        </div>
                    <div class="table-responsive">
                        <div class="co1-md-8">
                            <input type="text" name="nama" value="{{$siswa->nama}}" class="form">
                        </div>
                   <div class="table-responsive">
                        <div class="co1-md-8">
                            <label for="">masukan kelas</label>
                        </div>
                        <div class="table-responsive">
                        <div class="co1-md-4">
                            <input type="text" name="kelas" value="{{$siswa->kelas}}"required>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
