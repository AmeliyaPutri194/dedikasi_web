@extends('adminlte.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Tambah Data</h5>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="domisili">Domisili</label>
                    <input type="text" name="domisili" id="domisili" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="instansi">Instansi</label>
                    <input type="text" name="instansi" id="instansi" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="nomor_whatsapp">Nomor WhatsApp</label>
                    <input type="text" name="nomor_whatsapp" id="nomor_whatsapp" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="username_instagram">Username Instagram</label>
                    <input type="text" name="username_instagram" id="username_instagram" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="alasan_mengikuti">Alasan Mengikuti</label>
                    <textarea name="alasan_mengikuti" id="alasan_mengikuti" class="form-control" rows="4" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="divisi">Divisi</label>
                    <input type="text" name="divisi" id="divisi" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="alasan_divisi">Alasan Memilih Divisi</label>
                    <textarea name="alasan_divisi" id="alasan_divisi" class="form-control" rows="4" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="riwayat_penyakit">Riwayat Penyakit</label>
                    <input type="text" name="riwayat_penyakit" id="riwayat_penyakit" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kondisi_lapangan">Kondisi Lapangan</label>
                    <input type="text" name="kondisi_lapangan" id="kondisi_lapangan" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
