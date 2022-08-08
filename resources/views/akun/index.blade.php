@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    DATA AKUN ADMIN
                    <a href="{{ route('akun.create') }}" class="btn btn-md btn-primary btn-icon-upload" style="float: right; margin-left: 1rem;">
                        <span class="">Tambah Data</span>
                    </a>
                    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA ADMIN</th>
                                    <th>FOTO</th>
                                    <th>USERNAME</th>
                                    <th>EMAIL</th>
                                    <th>LEVEL</th>
                                    <th class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users->count() > 0)
                                    @php $no = 1; @endphp
                                    @foreach ($users as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>
                                                @if ($data->foto)
                                                    <img src="{{ asset('asset/img/foto/' . $data->foto) }}" alt="{{ $data->name }}" width="100px">
                                                @else
                                                    <img src="{{ asset('asset/img/foto/default.png') }}" alt="{{ $data->name }}" width="100px">
                                                @endif
                                            <td>{{ $data->username }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->level }}</td>

                                            <td class="text-center">
                                                <form action="{{ route('akun.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('akun.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <h5>DATA TIDAK ADA</h5>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection