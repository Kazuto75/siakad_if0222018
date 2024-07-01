@extends('adminlte::page')
@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Fakultas</label>
                                <input type="text" class="form-control @error('nama_fakultas') is-invalid @enderror" name="nama_fakultas" value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}" placeholder="Masukkan Nama Fakultas">
                            

                                @error('nama_fakultas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Pimpinan Fakultas</label>
                                <input type="text" class="form-control @error('pimpinan_fakultas') is-invalid @enderror" name="pimpinan_fakultas" value="{{ old('pimpinan_fakultas', $fakultas->pimpinan_fakultas) }}" placeholder="Masukkan Nama Pimpinan Fakultas">
                            

                                @error('pimpinan_fakultas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <a href="{{ route('fakultas.index') }}" class="btn btn-md btn-secondary">KEMBALI</a>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop
