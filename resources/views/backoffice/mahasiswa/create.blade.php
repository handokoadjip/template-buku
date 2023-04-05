@extends('layouts.dashboard')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'mahasiswa.store', 'method' => 'post']) }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_nama', 'Nama Mahasiswa', ['class' => 'form-label']) }}
                                {{ Form::text('mahasiswa_nama', null, ['placeholder' => 'Nama Lengkap', 'class' => $errors->has('mahasiswa_nama') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_nama', 'autofocus'=>'autofocus']) }}
                                @error('mahasiswa_nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_nim', 'Nomor Induk Mahasiswa', ['class' => 'form-label']) }}
                                {{ Form::text('mahasiswa_nim', null, ['type' => 'number', 'placeholder' => 'Buat No Induk Mahasiswa', 'class' => $errors->has('mahasiswa_nim') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_nim']) }}
                                @error('mahasiswa_nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_jenis_kelamin', 'Jenis Kelamin', ['class' => 'form-label']) }}
                                {{ Form::select('mahasiswa_jenis_kelamin', ['P' => 'Perempuan', 'L' => 'Laki-laki'], null, ['placeholder' => 'Pilih', 'class' => $errors->has('mahasiswa_jenis_kelamin') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_jenis_kelamin']) }}
                                @error('mahasiswa_jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_email', 'Alamat Email', ['class' => 'form-label']) }}
                                {{ Form::text('mahasiswa_email', null, ['placeholder' => 'Email pribadi', 'class' => $errors->has('mahasiswa_email') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_email']) }}
                                @error('mahasiswa_email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_no_telepon', 'Nomor Telepon', ['class' => 'form-label']) }}
                                {{ Form::text('mahasiswa_no_telepon', null, ['type' => 'number', 'placeholder' => 'Nomor Telepon', 'class' => $errors->has('mahasiswa_no_telepon') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_no_telepon']) }}
                                @error('mahasiswa_no_telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_umur', 'Umur Saat Diterima', ['class' => 'form-label']) }}
                                {{ Form::text('mahasiswa_umur', null, ['placeholder' => 'Umur Saat Diterima', 'class' => $errors->has('mahasiswa_umur') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_umur']) }}
                                @error('mahasiswa_umur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_alamat', 'Alamat', ['class' => 'form-label']) }}
                                {{ Form::textarea('mahasiswa_alamat', null, ['placeholder' => 'Alamat Lengkap', 'class' => $errors->has('mahasiswa_alamat') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_alamat']) }}
                                @error('mahasiswa_alamat')
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