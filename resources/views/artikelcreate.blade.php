@extends('layouts.master')

@section('content')

<div class="p-5">
  <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Membuat Artikel Baru!</h1>
  </div>
  <form class="user" action="/artikel" method="POST">
     {!! csrf_field() !!}
    <div class="form-group">
      <h6 class="h6 text-gray-900">Judul :</h6>
      <input type="judul" class="form-control" id="judul" name="judul" placeholder="Masukkan judul...">
    </div>
    <div class="form-group">
      <h6 class="h6 text-gray-900">Isi :</h6>
      <input type="isi" class="form-control " id="isi" name="isi" placeholder="Masukkan isi...">
    </div>
    <div class="form-group">
      <h6 class="h6 text-gray-900">Tag :</h6>
      <input type="tag" class="form-control " id="tag" name="tag" placeholder="Masukkan tag...">
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
    </div>
    
  </form>
  <hr>
</div>

@endsection

@push('scripts')
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush