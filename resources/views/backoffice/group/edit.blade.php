@extends('layouts.dashboard')

@section('title', 'Ubah Grup')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => ['grup.update', $data['group']->grup_id], 'method' => 'put']) }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('grup_nama', 'Grup', ['class' => 'form-label']) }}
                                {{ Form::text('grup_nama', old('grup_nama', $data['group']->grup_nama), ['placeholder' => 'Grup', 'class' => $errors->has('grup_nama') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'grup_nama', 'autofocus'=>'autofocus']) }}
                                @error('grup_nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                {{ Form::label('grup_deskripsi', 'Deskripsi', ['class' => 'form-label']) }}
                                {{ Form::text('grup_deskripsi', old('grup_deskripsi', $data['group']->grup_deskripsi), ['placeholder' => 'Deskripsi', 'class' => $errors->has('grup_deskripsi') ? 'form-control is-invalid' : 'form-control', 'autocomplete'=>'grup_deskripsi']) }}
                                @error('grup_deskripsi')
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