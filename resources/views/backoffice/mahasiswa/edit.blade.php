@extends('layouts.dashboard')

@section('title', 'Ubah Data Mahasiswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => ['mahasiswa.update', $data['student']->mahasiswa_id], 'method' => 'put']) }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('mahasiswa_nama', 'Buku', ['class' => 'form-label']) }}
                                {{ Form::text('mahasiswa_nama', old('mahasiswa_nama', $data['student']->mahasiswa_nama), ['placeholder' => 'Buku', 'class' => $errors->has('mahasiswa_nama') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_nama', 'autofocus'=>'autofocus']) }}
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
                                {{ Form::text('mahasiswa_nim', old('mahasiswa_nim', $data['student']->mahasiswa_nim), ['type' => 'number', 'placeholder' => 'Buat No Induk Mahasiswa', 'class' => $errors->has('mahasiswa_nim') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_nim']) }}
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
                                {{ Form::select('mahasiswa_jenis_kelamin', ['P' => 'Perempuan', 'L' => 'Laki-laki'], old('mahasiswa_jenis_kelamin', $data['student']->mahasiswa_jenis_kelamin), ['placeholder' => 'Pilih', 'class' => $errors->has('mahasiswa_jenis_kelamin') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_jenis_kelamin']) }}
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
                                {{ Form::text('mahasiswa_email', old('mahasiswa_email', $data['student']->mahasiswa_email), ['placeholder' => 'Email pribadi', 'class' => $errors->has('mahasiswa_email') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_email']) }}
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
                                {{ Form::text('mahasiswa_no_telepon', old('mahasiswa_no_telepon', $data['student']->mahasiswa_no_telepon), ['type' => 'number', 'placeholder' => 'Nomor Telepon', 'class' => $errors->has('mahasiswa_no_telepon') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_no_telepon']) }}
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
                                {{ Form::text('mahasiswa_umur', old('mahasiswa_umur', $data['student']->mahasiswa_umur), ['placeholder' => 'Umur Saat Diterima', 'class' => $errors->has('mahasiswa_umur') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_umur']) }}
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
                                {{ Form::textarea('mahasiswa_alamat', old('mahasiswa_alamat', $data['student']->mahasiswa_alamat), ['placeholder' => 'Alamat Lengkap', 'class' => $errors->has('mahasiswa_alamat') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'mahasiswa_alamat']) }}
                                @error('mahasiswa_alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{ Form::submit('Simpan Perubahan', ['class' => 'btn btn-success waitme']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection