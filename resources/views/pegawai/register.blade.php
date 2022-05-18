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
                        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Registrasi Karyawan</h3>
            </div>
            <form class="form-horizontal">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="kry_id" class="col-sm-2 control-label text-info">ID Karyawan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="kry_id" placeholder="ID Karyawan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kry_name" class="col-sm-2 control-label text-info">Nama Karyawan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kry_name" placeholder="Nama Karyawan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kry_bornplace" class="col-sm-2 control-label text-info">Tempat Lahir</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="kry_bornplace" placeholder="Tempat Lahir">
                        </div>

                        <label for="kry_borndate" class="col-sm-2 control-label text-info">Tanggal Lahir</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="kry_borndate" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kry_religion" class="col-sm-2 control-label text-info">Agama</label>
                        <div class="col-sm-3">
                            <select name="kry_religion" id="kry_religion" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                        <label for="kry_marital" class="col-sm-2 control-label text-info">Status Pernikahan</label>
                        <div class="col-sm-3">
                            <select name="kry_religion" id="kry_marital" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                    </div>                        
                    <div class="form-group row">
                        <label for="kry_npwp" class="col-sm-2 control-label text-info">Nomor NPWP</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="kry_npwp" placeholder="Nomor NPWP">
                        </div>
                        <label for="kry_bpjs" class="col-sm-2 control-label text-info">Nomor BPJS</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="kry_bpjs" placeholder="Nomor BPJS">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kry_bank" class="col-sm-2 control-label text-info">Bank</label>
                        <div class="col-sm-3">
                            <select name="kry_religion" id="kry_bank" class="form-control">
                                <option value="">-- Pilih --</option>
                            </select>
                        </div>
                        <label for="kry_bankaccount" class="col-sm-2 control-label text-info">Nomor Akun</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="kry_bankaccount" placeholder="Nomor Rekening">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kry_ptkp" class="col-sm-2 control-label text-info">PTKP</label>
                        <div class="col-sm-3">
                            <select name="kry_ptkp" id="kry_ptkp" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="TK0">TK/0</option>
                                <option value="TK1">TK/1</option>
                                <option value="TK2">TK/2</option>
                                <option value="TK3">TK/3</option>
                                <option value="K0">K/0</option>
                                <option value="K1">K/1</option>
                                <option value="K2">K/2</option>
                                <option value="K3">K/3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label text-info">Opsi</label>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="kry_ot" name="kry_ot" value="TRUE">
                                <label for="kry_ot" class="custom-control-label text-info">Ijin Lembur</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="kry_grossup" name="kry_grossup" value="TRUE">
                                <label for="kry_grossup" class="custom-control-label text-info">Gross Up</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="kry_transport" name="kry_transport" value="TRUE">
                                <label for="kry_transport" class="custom-control-label text-info">Tunjangan Transport</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" class="btn btn-default">Batal</button>
                </div>
            </form>
        </div>

    </section>
    <!-- /.content -->
</div>

@endsection