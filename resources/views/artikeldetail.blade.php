@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-12 col-lg-7">

      <!-- Area Chart -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Detail Artikel</h6>
        </div>
        <div class="card-body">
          @foreach($dataartikel as $dt)
          <h3 class="card-title"><b>Judul Pertanyaan: </b>{{ $dt->judul }}</h3><br>
          <p><b>Isi: </b>{{ $dt->isi }}</p>
          <p><b>Slug: </b>{{ $dt->slug }}</p>
          <p><b>Tanggal Dibuat: </b>{{ $dt->created_at }}</p>
          <p><b>Tanggal Diperbaharui: </b>{{ $dt->updated_at }}</p>
          <p><b>Tag: 
            <a href="#" class="btn btn-success btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-flag"></i>
              </span>
              <span class="text">{{ $dt->tag }}</span>
            </a>
          </p>
          @endforeach

        </div>
      </div>

  </div>

</div>
<!-- /.container-fluid -->

@endsection