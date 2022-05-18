@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data User</h3>

                <div class="card-tools">
                    <!--                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                            <i class="fas fa-times"></i></button>-->
                    <a href="{{ url('user/register') }}" class="btn btn-sm btn-info">
                        <i class="fas fa-plus"></i> Registrasi User
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tbPegawai" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="10%">ID User</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th>Tgl. Dibuat</th>
                                <th width="15%">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++) <tr>
                                <td>{ID User}</td>
                                <td>{Nama User}</td>
                                <td>{Level User}</td>
                                <td>{Tanggal Create}</td>
                                <td>
                                    <a href="{{ url('user/p/idkar')}}" class="btn btn-sm btn-warning"><i class="fa fa-eye"> Detail</i></a>
                                </td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection

@section('js')

<script>
    $(function() {
        $("#tbPegawai").DataTable();
    });
</script>

@endsection