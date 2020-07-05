@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Artikel</h1>
          <p class="mb-4">Menampilkan daftar artikel dengan action CRUD </a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Artikel</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Slug</th>
                      <th>Tag</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dataartikel as $key => $row) 
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $row->judul }}</td>
                      <td>{{ $row->isi }}</td>
                      <td>{{ $row->slug }}</td>
                      <td>{{ $row->tag }}</td>
                      <td>
                        <a href="/artikel/{{ $row->id }}"  class="btn btn-primary">Detail</a>
                        <a href="/artikel/{{ $row->id }}/edit"  class="btn btn-success">Edit</a>
                        <!-- <a href="/artikel/{{ $row->id }}/tag"  class="btn btn-warning">Tambah Tag</a> -->
                        <a href="/artikel/{{ $row->id }}/delete"  class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush