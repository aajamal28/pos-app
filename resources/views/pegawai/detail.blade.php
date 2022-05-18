@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{ url('asset/adminlte/img/user8-128x128.jpg') }}"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{ Nama Karyawan }</h3>

                            <p class="text-muted text-center">{ Jabatan - Departemen }</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Registrasi</b> <a class="float-right">{ Tanggal Registrasi }</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Terakhir Update</b> <a class="float-right">{ Tanggal Terakhir Update }</a>
                                </li>

                            </ul>

                            <!--                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detail" data-toggle="tab">Data Detail</a></li>
                                <li class="nav-item"><a class="nav-link" href="#family" data-toggle="tab">Data Keluarga</a></li>
                                <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Data Pendidikan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">Data Riwayat</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="detail">

                                    <div class="callout callout-info">
                                        <dl class="row">
                                            <dt class="col-md-3">ID Karyawan</dt>
                                            <dd class="col-md-9"> { NIK Karyawan }</dd>
                                            <dt class="col-md-3">Nama Karyawan</dt>
                                            <dd class="col-md-9"> { Nama Karyawan }</dd>
                                            <dt class="col-md-3">Tempat, tanggal lahir</dt>
                                            <dd class="col-md-9"> { TTL Karyawan }</dd>
                                            <dt class="col-md-3">Agama</dt>
                                            <dd class="col-md-9"> { NIK Karyawan }</dd>
                                            <dt class="col-md-3">Nomor NPWP</dt>
                                            <dd class="col-md-9"> { NPWP Karyawan }</dd>
                                            <dt class="col-md-3">No. BPJS</dt>
                                            <dd class="col-md-9"> { BPJS Karyawan }</dd>
                                            <dt class="col-md-3">Account Bank</dt>
                                            <dd class="col-md-9"> { Kode Bank }</dd>
                                            <dt class="col-md-3">No. Account</dt>
                                            <dd class="col-md-9"> { No. Rekening }</dd>
                                            <dt class="col-md-3">Ijin Lembur</dt>
                                            <dd class="col-md-9"> { True / False }</dd>
                                            <dt class="col-md-3">Gross Up</dt>
                                            <dd class="col-md-9"> { True / False }</dd>
                                            <dt class="col-md-3">Transport</dt>
                                            <dd class="col-md-9"> { True /False }</dd>
                                            <dt class="col-md-3">Tanggal Join</dt>
                                            <dd class="col-md-9"> { Tgl. Join }</dd>
                                            <dt class="col-md-3">Tanggal Eoc</dt>
                                            <dd class="col-md-9"> { Tgl. Eoc }</dd>
                                        </dl>
                                        <a href="#" class="btn btn-app">
                                            <i class="fas fa-edit text-black"></i> Perbarui Data
                                        </a>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="family">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Hubungan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @for ($i = 1; $i < 4; $i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td> { Nama Anggota Keluarga } </td>
                                                    <td> { Tgl. Lahir } </td>
                                                    <td> { Status } </td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                        
                                        <a href="#" class="btn btn-app">
                                            <i class="fas fa-edit text-black"></i> Perbarui Data
                                        </a>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="education">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pendidikan</th>
                                                    <th>Tanggal Lulus</th>
                                                    <th>Hubungan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @for ($i = 1; $i < 4; $i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td> { Pendidikan } </td>
                                                    <td> { Tgl. Lulus } </td>
                                                    <td> { Status } </td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                        
                                        <a href="#" class="btn btn-app">
                                            <i class="fas fa-edit text-black"></i> Perbarui Data
                                        </a>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                
                                <div class="tab-pane" id="history">
                                    <div class="table-responsive">
                                        <h3 class="text-info">Riwayat Gaji</h3>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Gaji Pokok</th>
                                                    <th>Tunjangan 1</th>
                                                    <th>Tunjangan 2</th>
                                                    <th>Tunjangan 3</th>
                                                    <th>Tunjangan 4</th>
                                                    <th>Tunjangan 5</th>
                                                    <th>Efektif</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @for ($i = 1; $i < 3; $i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td> { Gaji Pokok } </td>
                                                    <td> { Tunjangan 1 } </td>
                                                    <td> { Tunjangan 2 } </td>
                                                    <td> { Tunjangan 3 } </td>
                                                    <td> { Tunjangan 4 } </td>
                                                    <td> { Tunjangan 5 } </td>
                                                    <td> { Efektif } </td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                        
                                        <a href="#" class="btn btn-app">
                                            <i class="fas fa-edit text-black"></i> Perbarui Data
                                        </a>
                                    </div>
                                    <hr/>
                                    <div class="table-responsive">
                                        <h3 class="text-info">Riwayat Kontrak</h3>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Periode</th>
                                                    <th>Nomor PKWT / SK</th>
                                                    <th>Efektif</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @for ($i = 1; $i < 3; $i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td> { Periode } </td>
                                                    <td> { Nomor } </td>
                                                    <td> { Efektif } </td>
                                                    <td> { Status } </td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                        
                                        <a href="#" class="btn btn-app">
                                            <i class="fas fa-edit text-black"></i> Perbarui Data
                                        </a>
                                    </div>
                                    <hr/>
                                    <div class="table-responsive">
                                        <h3 class="text-info">Riwayat Jabatan</h3>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jabatan</th>
                                                    <th>Status</th>
                                                    <th>Efektif</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @for ($i = 1; $i < 3; $i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td> { Jabatan } </td>
                                                    <td> { Status } </td>
                                                    <td> { Efektif } </td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                        
                                        <a href="#" class="btn btn-app">
                                            <i class="fas fa-edit text-black"></i> Perbarui Data
                                        </a>
                                    </div>
                                    <hr/>
                                    <div class="table-responsive">
                                        <h3 class="text-info">Riwayat Departemen</h3>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Departemen</th>
                                                    <th>Status</th>
                                                    <th>Efektif</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @for ($i = 1; $i < 3; $i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td> { Departemen } </td>
                                                    <td> { Status } </td>
                                                    <td> { Efektif } </td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                        
                                        <a href="#" class="btn btn-app">
                                            <i class="fas fa-edit text-black"></i> Perbarui Data
                                        </a>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection

@section('js')

@endsection