@extends('admin.app')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Pengalaman Kerja</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Data Pengalaman Kerja</h4>
                    <div class="table-responsive mt-4">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Keluar</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-bold-500">{{ $item->nama }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td class="text-bold-500">{{ $item->tahun_masuk }}</td>
                                        <td>{{ $item->tahun_keluar }}</td>
                                        <td class="text-center">
                                            <a href="/home/update/{{ $item->id }}" class="btn icon btn-primary"><i
                                                    class="bi bi-pencil"></i></a>
                                            <button onclick="dialogHapus('{{ $item->id }}', '{{ $item->nama }}')"
                                                class="btn icon btn-danger"><i class="bi bi-x"></i></button>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
  </main><!-- End #main -->

@endsection
