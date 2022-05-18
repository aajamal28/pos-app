@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Payroll System</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Jabatan</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Master Data Jabatan</h3>

                <div class="card-tools">
                    <!--                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                            <i class="fas fa-times"></i></button>-->
                    <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-new">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tbPegawai" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Jabatan</th>
                                <th>Nama Jabatan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{No}</td>
                                <td>{ID Jabatan}</td>
                                <td>{Nama Jabatan}</td>
                                <td>{Status}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-confirm"><i class="fa fa-trash"> Delete</i></a>
                                </td>
                            </tr>

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

        <div class="modal fade" id="modal-new">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Jabatan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="rlg_id" class="col-sm-2 control-label text-info">ID Jabatan</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="rlg_id" placeholder="System Automatic">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rlg_desc" class="col-sm-2 control-label text-info">Deskripsi </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="rlg_desc" placeholder="Nama Jabatan">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" id="btnsave" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="modal-confirm">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin ingin menghapus data ???</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" id="btndelete" class="btn btn-danger" data-dismiss="modal">Ya</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </section>
    <!-- /.content -->
</div>

@endsection

@section('js')

<script type="text/javascript">
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('#btnsave').click(function () {
            $('#modal-new').modal('hide');
            Toast.fire({
                type: 'success',
                title: 'Data berhasil disimpan..'
            })
        });
        
        $('#btndelete').click(function () {
            $('#modal-new').modal('hide');
            Toast.fire({
                type: 'success',
                title: 'Data berhasil diperbaharui..'
            })
        });

    });
</script>

@endsection