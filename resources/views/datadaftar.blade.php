@extends('adminlte.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pendaftaran</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pendaftaran</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pendaftaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Domisili</th>
                    <th>Instansi</th>
                    <th>Nomor Whatsapp</th>
                    <th>Username Instagram</th>
                    <th>Alasan Mengikuti</th>
                    <th>Divisi</th>
                    <th>Alasan Divisi</th>
                    <th>Riwayat Penyakit</th>
                    <th>Kondisi Lapangan</th>
                  </tr>
                </thead>
                <tbody>
                     @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->domisili }}</td>
                        <td>{{ $item->instansi }}</td>
                        <td>{{ $item->nomor_whatsapp }}</td>
                        <td>{{ $item->username_instagram }}</td>
                        <td>{{ $item->alasan_mengikuti }}</td>
                        <td>{{ $item->divisi }}</td>
                        <td>{{ $item->alasan_divisi }}</td>
                        <td>{{ $item->riwayat_penyakit }}</td>
                        <td>{{ $item->kondisi_lapangan }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tbody>
                  <!-- Data rows will go here -->
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
