@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    DATA JABATAN
                    <a href="{{ route('jabatan.create') }}" class="btn btn-md btn-primary btn-icon-upload" style="float: right; margin-left: 1rem;">
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
                                    <th>JENIS JABATAN</th>
                                    <th>GAJI POKOK</th>
                                    <th>UANG MAKAN</th>
                                    <th>UANG TRANSPORTASI</th>
                                    <th>BONUS JABATAN</th>
                                    <th class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($jabatan->count() > 0)
                                    @php $no = 1; @endphp
                                    @foreach ($jabatan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_jabatan }}</td>
                                            <td>{{ $data->gaji_pokok }}</td>
                                            <td>{{ $data->uang_makan }}</td>
                                            <td>{{ $data->uang_transportasi }}</td>
                                            <td>{{ $data->bonus_jabatan }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('jabatan.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('jabatan.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('jabatan.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
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