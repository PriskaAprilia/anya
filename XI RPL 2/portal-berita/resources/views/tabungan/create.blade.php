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
                    <form action="{{ route('tabungan.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="co1-md-4">
                            <label for="">Pilih Nama Siswa</label>
                        </div>
                    <div class="row">
                        <div class="co1-md-8">
                            <select name ="siswa_id" class="form-control">
                                @foreach ($data as $item)
                                <option value="{{ $item->id}}">{{$item->nama}} - {{ $item->kelas}}
                                    @endforeach
                            </select>
                        </div>
                   <div class="row">
                        <div class="co1-md-8">
                            <label for="">masukan jumlah uang</label>
                        </div>
                        <div class="row">
                        <div class="co1-md-4">
                            <input class="form-control" type="number" name="jumlah_uang"required>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
