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
                    <form action="{{ route('siswa.store')}}" method="POST">
                    @csrf
                    <div class="table-responsive">
                        <div class="co1-md-2">
                            <label>Nama</label>
                        </div>
                          <div class="co1-md-10">
                            <input type="text" name="nama" class="form-control"required>
                        </div>

                        <div class="co1-md-2">
                            <label for="">Kelas</label>
                        </div>
                            <div class="co1-md-10">
                            <input type="text" name="kelas"class="form-control"required>
                        </div>


                        <div class="co1-md-8">
                            <label for="">masukan kelas</label>
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
