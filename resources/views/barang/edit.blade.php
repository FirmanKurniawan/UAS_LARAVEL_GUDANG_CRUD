@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
      @foreach($barang as $barrang)
  	     <div class="card-body">
                <form action="{{route('update_barang')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$barrang->id}}">
                    <h1>Ubah Data Barang</h1>
                  <div class="form-row">
                    <div class="col-6">
                    <label>Nama</label>
                    <label class="sr-only" for="inlineFormInputGroup">Nama</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-tie"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nama" name="nama" value="{{$barrang->nama}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Berat</label>
                    <label class="sr-only" for="inlineFormInputGroup">Berat</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-balance-scale"></i></div>
                      </div>  
                      <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Berat" name="berat" value="{{$barrang->berat}}">
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="input-group mb-2">
                      <button type="submit" class="form-control" id="inlineFormInputGroup"><a href="" class="">
                        <i class="fa fa-paper-plane"></i>
                        Submit
                      </a></button>
                    </div>
                  </div>
                  <div class="col-">
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
