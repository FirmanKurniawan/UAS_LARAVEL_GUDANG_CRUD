@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
      @foreach($gudang as $guddang)
  	     <div class="card-body">
                <form action="{{route('update_gudang')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$guddang->id}}">
                  <div class="form-row">
                  	<h1>Ubah Data Gudang</h1>
                    <div class="col-12">
                    <label>Alamat</label>
                    <label class="sr-only" for="inlineFormInputGroup">Alamat</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="" name="alamat" value="{{$guddang->alamat}}">
                    </div>
                  </div>
                  <div class="col-12">
                    <label>Kapasitas</label>
                    <label class="sr-only" for="inlineFormInputGroup">Kapasitas</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                      </div>  
                      <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Kapasitas" name="kapasitas" value="{{$guddang->kapasitas}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Picture</label>
                    <label class="sr-only" for="inlineFormInputGroup">Name</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-shield"></i></div>
                      </div>
                      <input type="file" id="inlineFormInputGroup" placeholder="Picture" name="gambar">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                      </div>
                      <img src="{{url('/picture/',$guddang->pict)}}" style="width: 40%;height: 40%;">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="input-group mb-2">
                      <button type="submit" class="form-control" id="inlineFormInputGroup"><a href="" class="">
                        <i class="fa fa-paper-plane"></i>
                        Submit
                      </a></button>
                    </div>
                  </div>
                  <div class="col-1">
                    <div class="input-group mb-2">
                      <a href="{{url('home')}}" class="form-control" id="inlineFormInputGroup">Kembali</a>
                    </div>
                  </div>
                  </div>
                </form>
         </div>
      @endforeach
</div>
@endsection
