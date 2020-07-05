@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">ERD</h1>
  <p class="mb-4">Entity Relationship Diagram tabel artikel</p>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-12 col-lg-7">

      <!-- Area Chart -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Gambar ERD</h6>
        </div>
        <div class="card-body">
          <img src="{{ asset('/adminlte/dist/img/quiz-3 laravel sanbercode.png') }}" alt="AdminLTE Logo" style="opacity: .8">
          <hr>
          Keterangan:
          <ul>
            <li>user dapat membuat banyak artikel, 1 artikel kepunyaan satu user</li>
            <li>user dapat mengikuti (follow) ke user yang lain</li>
            <li>1 user dapat follow ke banyak user</li>
            <li>dan 1 user dapat diikuti oleh banyak user</li>
          <ul>

        </div>
      </div>

  </div>

</div>
<!-- /.container-fluid -->

@endsection