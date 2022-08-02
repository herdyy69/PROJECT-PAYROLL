@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    DATA STATUS
                    <a href="{{ route('status.create') }}" class="btn btn-md btn-primary btn-icon-upload" style="float: right; margin-left: 1rem;">
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
                                    <th>JENIS STATUS</th>
                                    <th>BONUS STATUS</th>
                                    <th class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($status->count() > 0)
                                    @php $no = 1; @endphp
                                    @foreach ($status as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->jenis_status }}</td>
                                            <td>{{ $data->bonus_status }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('status.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('status.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('status.show', $data->id) }}"
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
                                        <td colspan="4" class="text-center">Tidak ada data</td>
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