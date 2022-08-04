<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts/_flash')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA STATUS
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
</body>
</html>