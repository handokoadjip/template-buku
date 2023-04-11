@extends('layouts.dashboard')

@section('title', 'Dosen')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center w-100">
                    <h3 class="card-title">Data @yield('title')</h3>
                    <!-- ------------------------------------------------ -->
                    <!-- Cek apakah pengguna dapat akses menu -->
                    <!-- ------------------------------------------------ -->
                    @if(PermissionMenu()[0]->groups->filter(function($item){ return $item->grup_id == Auth::user()->groups[0]->grup_id; })->flatten()[0]->pivot->grup_menu_item_tambah == 'ya')
                    <a class="btn btn-success waitme" href="{{ route('dosen.create') }}">Tambah Dosen</a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 5%;">No</th>
                                    <th>NIP</th>
                                    <th>Nama dosen</th>
                                    <th>Email</th>
                                    <th>No.Telp</th>
                                    <th>Alamat</th>
                                    <th class="text-center" style="width: 15%;">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('#table').DataTable({
        serverSide: true,
        order: [],
        fnInitComplete: function() {
            $("#overlay").hide();
        },
        ajax: "{{ route('dosen.index') }}",
        columns: [{
                "data": null,
                orderable: false,
                searchable: false,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'dosen_nip',
                name: 'dosen_nip'
            },
            {
                data: 'dosen_nama',
                name: 'dosen_nama'
            },
            {
                data: 'dosen_email',
                name: 'dosen_email'
            },
            {
                data: 'dosen_no_telepon',
                name: 'dosen_no_telepon'
            },
            {
                data: 'dosen_alamat',
                name: 'dosen_alamat'
            },

            {
                data: 'actions',
                name: 'actions',
                orderable: false,
                searchable: false
            },
        ]
    });
</script>
@endpush