@extends('layouts.layout')

@section('tittle', 'kategori')

@section('content')
    <!-- Main Content -->
    <div id="content">
        {{-- Topbar --}}

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <button class="btn btn-sm btn-success">
                        Tambah Data
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 10%">Id</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item )
                                <tr>
                                    {{-- seharusnya sih pakai $item->id biar datanya sama cuman ngk pp --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        <button class="btn btn-warning">Edit</button>
                                        <button class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            {{-- isi contentnya --}}

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
