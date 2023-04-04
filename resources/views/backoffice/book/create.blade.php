@extends('layouts.dashboard')

@section('title', 'Tambah Unit Kerja')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'buku.store', 'method' => 'post']) }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('buku_nama', 'Buku', ['class' => 'form-label']) }}
                                {{ Form::text('buku_nama', null, ['placeholder' => 'Buku', 'class' => $errors->has('buku_nama') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'buku_nama', 'autofocus'=>'autofocus']) }}
                                @error('buku_nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('buku_author', 'Author', ['class' => 'form-label']) }}
                                {{ Form::text('buku_author', null, ['placeholder' => 'Author', 'class' => $errors->has('buku_author') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'buku_author']) }}
                                @error('buku_author')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{ Form::submit('Simpan', ['class' => 'btn btn-success waitme']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection