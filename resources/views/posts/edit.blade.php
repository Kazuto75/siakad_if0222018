@extends('adminlte::page')
@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">KODE PRODI</label>
                                <input type="text" class="form-control @error('kode_prodi') is-invalid @enderror" name="kode_prodi" value="{{ old('kode_prodi', $post->kode_prodi) }}" placeholder="Masukkan Kode Prodi">
                            
                                @error('kode_prodi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA PRODI</label>
                                <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" name="nama_prodi" value="{{ old('nama_prodi', $post->nama_prodi) }}" placeholder="Masukkan Nama Prodi">
                            

                                @error('nama_prodi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ID FAKULTAS</label>
                                <select class="form-control select3" style="width: 100%;" name="fakultas_id" id="fakultas_id"> 
                                <option disabled value>PILIH FAKULTAS</option>
                                @foreach ($fak as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_fakultas }}</option>
                                @endforeach
                                </select>
                                                            
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-md btn-secondary">KEMBALI</a>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop
