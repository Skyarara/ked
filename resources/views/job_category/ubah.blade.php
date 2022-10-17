@extends('layout.app')

@section ('title', 'Edit Kategori')     

@section ('content-header')  
<div class="content-header row" style="margin-bottom:7.5px">
  <div class="content-header-left">
    <h4 class="content-header-title" style="margin-left: 10px;"><b>Edit Kategori</b></h4>
  </div>
</div>


@stop

@section ('content-body')
<form method="post" action="{{ url('/job_category/ubah', $old_category->id) }}" role="form" enctype="multipart/form-data">
{{csrf_field()}}
<div class="card row" style="margin-bottom: 10px">
    <div class="card-header" style="border: none;"></div>  
    <div class="card-body">
    <div class="form-group col-md-11" style="width:97.5%; margin-left: 10px;">
        <label for="nama">Nama Kategori</label>
        <input type="text" name="nama" class="form-control" id="nama" value="{{ $old_category->name }}" style="border-radius: 5px;" required>
    </div>

    <div class="form-group col-md-11" style="width:97.5%; margin-left: 10px;">
        <label for="namas">Nama Singkatan</label>
        <input type="text" name="namas" class="form-control" id="namas" value="{{ $old_category->short_name }}" style="border-radius: 5px;" required>
    </div>
    </div>
    <div class="card-footer" style="border: none; margin-top: 31.65%">
        <a href="{{ route('job_category') }}">
            <input type="button" value="Batal" class="btn btn-secondary btn-md" style="border-radius: 25px; width: 15%; margin-left: 700px">
        </a>
        <input type="submit" value="Simpan" class="btn btn-secondary btn-md" style="filter: invert(100%); border-radius: 25px; width: 15%; margin-left: 17.5px;">
    </div>
</div>

@stop

@section('js')

@stop