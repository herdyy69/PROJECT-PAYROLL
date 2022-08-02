@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    DATA karyawan
                    <a href="{{ route('karyawan.create') }}" class="btn btn-md btn-primary btn-icon-upload" style="float: right; margin-left: 1rem;">
                        <span class="">Tambah Data</span>
                    </a>
                    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="">
                        <table class="table table-hover align-middle " id="dataTable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NIK</th>
                                    <th>NAMA KARYAWAN</th>
                                    <th>JENIS KELAMIN</th>
                                    {{-- <th>NO TELEPON</th> --}}
                                    <th>JABATAN</th>
                                    <th>STATUS</th>
                                    {{-- <th>LAMA KERJA</th> --}}
                                    <th class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($karyawan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->nama_karyawan }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        {{-- <td>{{ $data->no_telepon }}</td> --}}
                                        <td>{{ $data->jabatan->nama_jabatan }}</td>
                                        <td>{{ $data->status->jenis_status }}</td>
                                        {{-- <td>{{ $data->lama_kerja }} &nbsp; Tahun</td> --}}
                                        <td class="text-center">
                                            <form action="{{ route('karyawan.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('karyawan.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('karyawan.show', $data->id) }}"
                                                    class="btn btn-sm btn-outline-warning">
                                                    Show
                                                </a> |
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection